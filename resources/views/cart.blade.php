@extends('plantillas.base.plantilla')

@include('plantillas.base.preCarga')

@include('plantillas.base.postCarga')

@include('plantillas.base.sideMenu')

@section('content')

		<!-- Cart -->

<div class="cart_section">
	<div class="section_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cart_container">
						
						<!-- Cart Bar -->
						<div class="cart_bar">
							<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-start">
								<li>Producto</li>
								<li>Talla</li>
								<li>Precio</li>
								<li>Cantidad</li>
								<li></li>
								<li>Total</li>
							</ul>
						</div>

						<!-- Cart Items -->
						<div class="cart_items">
							<ul class="cart_items_list">

								<!-- Cart Item -->
								<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
										<div>
											<div class="product_image">
												<img src="{{ $item-imagen }}" alt="">
											</div>
										</div>
										<div class="product_name">
											<a type="button">{{ $item->nombre }}</a>
										</div>
									</div>									
									<div class="product_size text-lg-center product_text">{{ $item->descripcion }}</div>
									<div class="product_price text-lg-center product_text">{{ number_format() $item->precio,2) }}</div>
									<div class="product_quantity_container">
										<div class="product_quantity ml-lg-auto mr-lg-auto text-center">
											<span class="product_text product_num">{{ $item->quantity }}</span>
											<div class="qty_sub qty_button trans_200 text-center">
												<span>-</span>
											</div>
											<div class="qty_add qty_button trans_200 text-center">
												<span>+</span>
											</div>
										</div>
									</div>
									<div  class="button button_clear trans_200"><i class="fa fa-remove">Quitar</i></div>
									<div class="product_total text-lg-center product_text">{{ number_format($item->quantity * $item->precio,2) }}
									</div>
								</li>
							</ul>
						</div>

						<!-- Cart Buttons -->
						<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
							<div class="cart_buttons_inner ml-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
								<div class="button button_continue trans_200">
									<a href="categories.html">continue shopping</a>
								</div>
								<div class="button button_clear trans_200">
									<a href="categories.html">clear cart</a>
								</div>
								<div class="button button_update trans_200">
									<a href="categories.html">update cart</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section_container cart_extra_container">
		<div class="container">
			<div class="row">

				<!-- Shipping & Delivery -->
				<div class="col-xxl-6">
					<div class="cart_extra cart_extra_1">
						<div class="cart_extra_content cart_extra_coupon">
							<div class="cart_extra_title">Coupon code</div>
							<div class="coupon_form_container">
								<form action="#" id="coupon_form" class="coupon_form">
									<input type="text" class="coupon_input" required="required">
									<button class="coupon_button">apply code</button>
								</form>
							</div>
							<div class="shipping">
								<div class="cart_extra_title">Shipping Method</div>
								<ul>
									<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
										<label class="radio_container">
											<input type="radio" id="radio_1" name="shipping_radio" class="shipping_radio">
											<span class="radio_mark"></span>
											<span class="radio_text">Next day delivery</span>
										</label>
										<div class="shipping_price ml-auto">$4.99</div>
									</li>
									<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
										<label class="radio_container">
											<input type="radio" id="radio_2" name="shipping_radio" class="shipping_radio">
											<span class="radio_mark"></span>
											<span class="radio_text">Standard delivery</span>
										</label>
										<div class="shipping_price ml-auto">$1.99</div>
									</li>
									<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
										<label class="radio_container">
											<input type="radio" id="radio_3" name="shipping_radio" class="shipping_radio" checked>
											<span class="radio_mark"></span>
											<span class="radio_text">Personal Pickup</span>
										</label>
										<div class="shipping_price ml-auto">Free</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Cart Total -->
				<div class="col-xxl-6">
					<div class="cart_extra cart_extra_2">
						<div class="cart_extra_content cart_extra_total">
							<div class="cart_extra_title">Cart Total</div>
							<ul class="cart_extra_total_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_extra_total_title">Subtotal</div>
									<div class="cart_extra_total_value ml-auto">$29.90</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_extra_total_title">Shipping</div>
									<div class="cart_extra_total_value ml-auto">Free</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="cart_extra_total_title">Total</div>
									<div class="cart_extra_total_value ml-auto">$29.90</div>
								</li>
							</ul>
							<div class="checkout_button trans_200"><a href="checkout.html">proceed to checkout</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

		<!-- Newsletter -->

		
@endsection