<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Processing;
use Stripe;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$gateway = new \Braintree\Gateway([
			'environment' => config('services.braintree.environment'),
			'merchantId' => config('services.braintree.merchantId'),
			'publicKey' => config('services.braintree.publicKey'),
			'privateKey' => config('services.braintree.privateKey')
		]);

		$paypalToken = $gateway->ClientToken()->generate();
		
        return view('pages.checkout')->with([
			'paypalToken' => $paypalToken
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		// Return the number of items in cart after the page is loaded, 
		// not after an item is actually added
		if (!$request->get('product_id')) {
			return [
				'message' => 'Cart items saved',
				'items' => Cart::where('user_id', auth()->user()->id)->sum('quantity'),
			];			
		}
		
		// Getting product details
        $product = Product::where('id', $request->get('product_id'))->first();
		
		$productFoundInCart = Cart::where('product_id', $request->get('product_id'))
								  ->where('user_id', auth()->user()->id)->pluck('id');
		
		if ($productFoundInCart->isEmpty()) {
			
			// Adding product to cart
			$cart = Cart::create([
				'product_id' => $product->id,
				'quantity' => 1,
				'price' => $product->sale_price,
				'user_id' => auth()->user()->id,
			]);			
		} else {

			// Incrementing product quantity
			$cart = Cart::where('product_id', $request->get('product_id'))
						->where('user_id', auth()->user()->id)
						->increment('quantity');
		}
		
		// Return number of items in user's cart
		if ($cart) {
			return [
				'message' => 'Cart updated',
				'items' => Cart::where('user_id', auth()->user()->id)->sum('quantity'),
			];
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Get cart items.
     *
     * @return \Illuminate\Http\JsonResponse
     */	
	public function getCartItemsForCheckout() {
		$cartItems = Cart::with('product')->where('user_id', auth()->user()->id)->get();
		$finalData = [];
		$totalAmount = 0;

		if (isset($cartItems)) {
			foreach($cartItems as $cartItem) {
				if ($cartItem->product) {
					foreach($cartItem->product as $cartProduct) {
						if($cartProduct->id == $cartItem->product_id) {
							$finalData[$cartItem->product_id]['id'] = $cartProduct->id;
							$finalData[$cartItem->product_id]['name'] = $cartProduct->name;
							$finalData[$cartItem->product_id]['quantity'] = $cartItem->quantity;
							$finalData[$cartItem->product_id]['sale_price'] = $cartItem->price;
							$finalData[$cartItem->product_id]['total'] = $cartItem->price * $cartItem->quantity;
							$totalAmount += $cartItem->price * $cartItem->quantity;
							$finalData['totalAmount'] = $totalAmount;
						}
					}
				}
			}
		}
		
		return response()->json($finalData);
	}
	
    /**
     * Process payment using Stripe.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */	
	public function processPayment(Request $request) {
		$firstName = $request->get('firstName');
		$lastName = $request->get('lastName');
		$address = $request->get('address');
		$city = $request->get('city');
		$state = $request->get('state');
		$zipCode = $request->get('zipCode');
		$email = $request->get('email');
		$phone = $request->get('phone');
		$country = $request->get('country');
		$cardType = $request->get('cardType');
		$expirationMonth = $request->get('expirationMonth');
		$expirationYear = $request->get('expirationYear');
		$cvv = $request->get('cvv');
		$cardNumber = $request->get('cardNumber');
		$amount = $request->get('amount');
		$orders = $request->get('order');
		$ordersArray = [];
		
		// Getting order details
		foreach($orders as $order) {
			if ($order['id']) {
				$ordersArray[$order['id']]['order_id'] = $order['id'];
				$ordersArray[$order['id']]['quantity'] = $order['quantity'];
			}
		}
		
		// Instantiate Stripe
		$stripe = Stripe::make(env('STRIPE_KEY'));
		
		// Create array with card details
		$token = $stripe->tokens()->create([
			'card' => [
				'number' => $cardNumber,
				'exp_month' => $expirationMonth,
				'exp_year' => $expirationYear,
				'cvc' => $cvv,
			]]
		);
		
		// Make sure the token is received
		if (!$token['id']) {
			session()->flush('error', 'Stripe token generation failed');
			return;
		}
	
		// Create a Stripe customer
		$customer = $stripe->customers()->create([
			'name' => $firstName.' '.$lastName,
			'email' => $email,
			'phone' => $phone,
			'address' => [
				'line1' => $address,
				'postal_code' => $zipCode,
				'city' => $city,
				'state' => $state,
				'country' => $country,
			],
			'shipping' => [
				'name' => $firstName.' '.$lastName,
				'address' => [
					'line1' => $address,
					'postal_code' => $zipCode,
					'city' => $city,
					'state' => $state,
					'country' => $country,
				],
			],
			'source' => $token['id'],
		]);

		// Charging the customer in Stripe
		$charge = $stripe->charges()->create([
			'customer' => $customer['id'],
			'currency' => 'USD',
			'amount' => $amount,
			'description' => 'Payment for order',
		]);
		
		if ($charge['status'] == "succeeded") {
			$customerIdStripe = $charge['id'];
			$amountRec = $charge['amount'];
			$customer_id = auth()->user()->id;
			
			// Record transaction in Processing table
			$processingDetails = Processing::create([
				'customer_id' => $customer_id,
				'customer_name' => $firstName.' '.$lastName,
				'customer_address' => json_encode([
													'line1' => $address,
													'postal_code' => $zipCode,
													'city' => $city,
													'state' => $state,
													'country' => $country,	
												]),
				'order_details' => json_encode($ordersArray),
				'amount' => $amount,
				'currency' => $charge['currency'],
				'payment_gateway' => 'stripe',
			]);
			
			// Clear cart after payment success
			if ($processingDetails) {
				Cart::where('user_id', $customer_id)->delete();
				
				return ['success' => 'Order completed successfully'];
			}
		} else {
			return ['error' => 'Order failed'];
		}
	}
	
    /**
     * Process payment using PayPal.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
	public function paypalCheckout(Request $request) {
		$firstName = $request->get('firstName');
		$lastName = $request->get('lastName');
		$email = $request->get('email');
		$address = $request->get('address');
		$zipCode = $request->get('zipCode');
		$city = $request->get('city');
		$state = $request->get('state');
		$country = $request->get('country');
		$orders = $this->getCartItemsForCheckout()->getData();
		$ordersArray = [];
		$amount = $orders->totalAmount;
		
		// Getting order details
		foreach($orders as $order) {
			if (isset($order->id)) {
				$ordersArray[$order->id]['order_id'] = $order->id;
				$ordersArray[$order->id]['quantity'] = $order->quantity;
			}
		}
		
		// Make transaction
		$gateway = new \Braintree\Gateway([
			'environment' => config('services.braintree.environment'),
			'merchantId' => config('services.braintree.merchantId'),
			'publicKey' => config('services.braintree.publicKey'),
			'privateKey' => config('services.braintree.privateKey')
		]);
		
		$nonce = $request->payment_method_nonce;
		$result = $gateway->transaction()->sale([
			'amount' => $amount,
			'paymentMethodNonce' => $nonce,
			'customer' => [
				'firstName' => $firstName,
				'lastName' => $lastName,
				'email' => $email,
			],
			'options' => [
				'submitForSettlement' => true
			]
		]);
	
		// Process sale
		if ($result->success) {
			$transaction = $result->transaction;
			$customer_id = auth()->user()->id;
			
			// Record transaction in Processing table
			$processingDetails = Processing::create([
				'customer_id' => $customer_id,
				'customer_name' => $firstName.' '.$lastName,
				'customer_address' => json_encode([
													'line1' => $address,
													'postal_code' => $zipCode,
													'city' => $city,
													'state' => $state,
													'country' => $country,	
												]),
				'order_details' => json_encode($ordersArray),
				'amount' => $amount,
				'currency' => strtolower($transaction->currencyIsoCode),
				'payment_gateway' => 'paypal',
			]);
			
			// Clear cart after payment success
			if ($processingDetails) {
				Cart::where('user_id', $customer_id)->delete();
			}
			
			return back()->with(['success' => 'Transaction successful. The ID is: '.$transaction->id]);
		} else {
			return back()->withErrors(['msg' => 'An error occurred with the message: '.$result->message]);
		}
	}	

}
