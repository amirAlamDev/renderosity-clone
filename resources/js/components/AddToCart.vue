<template>
    <div>
		<hr>
		<button class="btn btn-success"
			v-on:click.prevent="addProductToCart()">
			Add To Cart
		</button>
    </div>
</template>

<script>
    export default {
		data() {
			return {
			
			}
		},
		props:['productId', 'userId'],
		methods:{
			async addProductToCart(){
			
				// Checking if the user is logged in
				if(this.userId == 0) {
					this.$toastr.e('Please login to add this product to cart');
					return;
				}
				
				// If user is logged in, then add item to cart
				let response = await axios.post('/cart', {
					'product_id': this.productId
				});
				
				this.$root.$emit('changeInCart', response.data.items);
			}
		},
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
