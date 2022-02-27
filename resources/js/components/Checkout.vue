<template>
	<div>
		<div class="container checkoutBox">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
					<div class="box">
						<h3 class="box-title">Products in your cart</h3>
						<div class="plan-selection" v-for="item in items" :key="item.id">
							<div class="plan-data" v-if="item.name">
								<input id="question1" name="question" type="radio" class="with-font" value="sel" />
								<label for="question1">{{item.name}}</label>
								<p class="plan-text">
									Quantity: {{item.quantity}}
								</p>
								<span class="plan-price">
									Price: ${{item.sale_price}}
								</span>
							</div>
						</div>
						<div>
							<!--BILLING INFO-->
							<div class="panel panel-info">
								<div class="panel-body">
									<div class="form-group">
										<div class="col-md-12">
											<h4>Biling Info</h4>
											<br>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12"><strong>Country:</strong></div>
										<div class="col-md-12">
											<input type="text" class="form-control" v-model="country" name="country" id="country1" value="" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-6 col-xs-12">
											<strong>First Name:</strong>
											<input type="text" name="first_name" id="firstName1" v-model="firstName" class="form-control" value="" />
										</div>
										<div class="span1"></div>
										<div class="col-md-6 col-xs-12">
											<strong>Last Name:</strong>
											<input type="text" name="last_name" id="lastName1" v-model="lastName" class="form-control" value="" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12"><strong>Address:</strong></div>
										<div class="col-md-12">
											<input type="text" name="address" id="address1" v-model="address" class="form-control" value="" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12"><strong>City:</strong></div>
										<div class="col-md-12">
											<input type="text" name="city" id="city1" v-model="city" class="form-control" value="" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12"><strong>State:</strong></div>
										<div class="col-md-12">
											<input type="text" name="state" id="state1" v-model="state" class="form-control" value="" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
										<div class="col-md-12">
											<input type="text" name="zip_code" id="zipCode1" v-model="zipCode" class="form-control" value="" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12"><strong>Phone Number:</strong></div>
										<div class="col-md-12"><input type="text" v-model="phone" name="phone_number" class="form-control" value="" /></div>
									</div>
									<div class="form-group">
										<div class="col-md-12"><strong>Email Address:</strong></div>
										<div class="col-md-12"><input type="text" v-model="email" name="email_address" id="email1" class="form-control" value="" /></div>
									</div>
								</div>
							</div>
							<!--BILLING INFO END-->
							<hr>
							<!--CREDIT CART PAYMENT-->
							<div class="panel panel-info">
								<h4>Pay with Credit Card</h4>
								<br>
								<div class="panel-body">
									<div class="form-group">
										<div class="col-md-12"><strong>Card Type:</strong></div>
										<div class="col-md-12">
											<select id="CreditCardType" v-model="cardType"
											name="CreditCardType" class="form-control">
												<option value="5">Visa</option>
												<option value="6">MasterCard</option>
												<option value="7">American Express</option>
												<option value="8">Discover</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12"><strong>Credit Card Number:</strong></div>
										<div class="col-md-12">
										<input type="text" v-model="cardNumber" class="form-control" name="car_number" value="" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12"><strong>Card CVV:</strong></div>
										<div class="col-md-12">
										<input type="text" v-model="cvv" class="form-control" name="car_code" value="" />
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<strong>Expiration Date</strong>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<select class="form-control" name="" v-model="expirationMonth">
												<option value="">Month</option>
												<option value="01">01</option>
												<option value="02">02</option>
												<option value="03">03</option>
												<option value="04">04</option>
												<option value="05">05</option>
												<option value="06">06</option>
												<option value="07">07</option>
												<option value="08">08</option>
												<option value="09">09</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
										</select>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<select class="form-control" name="" v-model="expirationYear">
												<option value="">Year</option>
												<option value="2015">2015</option>
												<option value="2016">2016</option>
												<option value="2017">2017</option>
												<option value="2018">2018</option>
												<option value="2019">2019</option>
												<option value="2020">2020</option>
												<option value="2021">2021</option>
												<option value="2022">2022</option>
												<option value="2023">2023</option>
												<option value="2024">2024</option>
												<option value="2025">2025</option>
										</select>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<span>Pay secure using your credit card.</span>
										</div>
										<div class="col-md-12">
											<ul class="cards">
												<li class="visa hand">Visa</li>
												<li class="mastercard hand">MasterCard</li>
												<li class="amex hand">Amex</li>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
									<br>
									<div class="form-group">
										<div class="col-md-6 col-sm-6 col-xs-12">
											<button type="submit" class="btn btn-success btn-submit-fix"
												v-on:click.prevent="getUserDetails()">Place Order</button>
										</div>
									</div>
									<hr>
									<div class="paypal-payment">
										<h4>Pay with PayPal</h4>
										<div id="paypal-button" />
									</div>
								</div>
							</div>
							<!--CREDIT CART PAYMENT END-->
						</div>
					</div>
					</div>

				<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
					<div class="widget">
						<h4 class="widget-title">Order Summary</h4>
						<div class="summary-block" v-for="summaryItem in items" :key="summaryItem.id">
							<div class="summary-content" v-if="summaryItem.name">
								<div class="summary-head">
								<h5 class="summary-title">
								{{summaryItem.name}}
								</h5></div>
								<div class="summary-price">
									<p class="summary-text">
										${{summaryItem.total}}
									</p>
									<span class="summary-small-text pull-right">
										Q  {{summaryItem.quantity}} x
										P  ${{summaryItem.sale_price}}
									</span>
								</div>
							</div>
						</div>
						<div class="summary-block">
							<div class="summary-content">
							   <div class="summary-head"> <h5 class="summary-title">Order Total</h5></div>
								<div class="summary-price">
									<p class="summary-text">${{items.totalAmount}}</p>
								</div>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>	
		</div>
	</div>
</template>
<script>
	export default {
		data() {
			return {
				items: [],
				firstName:'',
				lastName:'',
				address:'',
				city:'',
				state:'',
				zipCode:'',
				email:'',
				phone:'',
				country:'',
				cardType: '',
				expirationMonth:'',
				expirationYear:'',
				cvv:'',
				cardNumber:'',
			}
		},
		methods:{
			async getCartItems() {
				let response = await axios.get('/checkout/get/items');
				this.items = response.data;
				console.log(this.items);
			},
			async getUserDetails(){
				if(this.firstName != '' && this.address != '' && this.cardNumber && this.cvv) {
					// Start processing payment by passing data to CartsController
					let response = await axios.post('/process/user/payment', {
						'firstName':this.firstName,
						'lastName':this.lastName,
						'address':this.address,
						'city':this.city,
						'state':this.state,
						'zipCode':this.zipCode,
						'email':this.email,
						'phone':this.phone,
						'country':this.country,
						'cardType':this.cardType,
						'expirationMonth':this.expirationMonth,
						'expirationYear':this.expirationYear,
						'cvv':this.cvv,
						'cardNumber':this.cardNumber,
						'amount':this.items.totalAmount,
						'order': this.items,
					});
					
					if (response.data.success) {
						this.$toastr.s(response.data.success);
					} else {					
						this.$toastr.e(response.data.error);
					}
					
					setTimeout(()=>{
						window.location.href='/';
					}, 5000);
					
					console.log(response.data);
				} else {
					this.$toastr.e('Please fill out each field');
				}
			}
		},
		created() {
			this.getCartItems();
		},
	}
</script>