@extends('plantillas.base.plantilla')

@include('plantillas.base.preCarga')

@include('plantillas.base.postCarga')

@include('plantillas.base.sideMenu')

@section('content')
	
	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_content_container">
						<div class="home_content">
							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num">20</div>
								<div class="home_discount_text">Discount on the</div>
							</div>
							<div class="home_title">New Collection</div>
							<div class="button button_shop home_button_shop trans_200_shop"><a href="{{ route('tabla.categoria') }}">Shop NOW!</a></div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_content_container">
						<div class="home_content">
							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num">20</div>
								<div class="home_discount_text">Discount on the</div>
							</div>
							<div class="home_title">New Collection</div>
							<div class="button button_shop home_button_shop trans_200_shop"><a href="{{ route('tabla.categoria') }}">Shop NOW!</a></div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_content_container">
						<div class="home_content">
							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num">20</div>
								<div class="home_discount_text">Discount on the</div>
							</div>
							<div class="home_title">New Collection</div>
							<div class="button button_shop home_button_shop trans_200_shop"><a href="{{ route('tabla.categoria') }}">Shop NOW!</a></div>
						</div>
					</div>
				</div>

			</div>
				
			<!-- Home Slider Navigation -->
			<div class="home_slider_nav home_slider_prev trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="primeraPlantilla/images/prev.png" alt=""></div></div>
			<div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="primeraPlantilla/images/next.png" alt=""></div></div>

		</div>
	</div>

	

  	@include('productos')

@endsection