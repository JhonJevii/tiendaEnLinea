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
							<div class="button button_shop home_button_shop trans_200_shop"><a href="categories.html">Shop NOW!</a></div>
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
							<div class="button button_shop home_button_shop trans_200_shop"><a href="categories.html">Shop NOW!</a></div>
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
							<div class="button button_shop home_button_shop trans_200_shop"><a href="categories.html">Shop NOW!</a></div>
						</div>
					</div>
				</div>

			</div>
				
			<!-- Home Slider Navigation -->
			<div class="home_slider_nav home_slider_prev trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="primeraPlantilla/images/prev.png" alt=""></div></div>
			<div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="primeraPlantilla/images/next.png" alt=""></div></div>

		</div>
	</div>

  <!-- Categories -->
  
  <div class="boxes">
    <div class="section_container">
      <div class="container">
        <div class="row">
          
          <!-- Box -->
          <div class="col-lg-4 box_col">
            <div class="box">
              <div class="box_image"><img src="images/box_1.jpg" alt=""></div>
              <div class="box_title trans_200"><a href="categories.html">summer collection</a></div>
            </div>
          </div>

          <!-- Box -->
          <div class="col-lg-4 box_col">
            <div class="box">
              <div class="box_image"><img src="images/box_2.jpg" alt=""></div>
              <div class="box_title trans_200"><a href="categories.html">eyewear collection</a></div>
            </div>
          </div>

          <!-- Box -->
          <div class="col-lg-4 box_col">
            <div class="box">
              <div class="box_image"><img src="images/box_3.jpg" alt=""></div>
              <div class="box_title trans_200"><a href="categories.html">basic pieces</a></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- ================ trending product section start ================= -->  
    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Popular Item in the market</p>
          <h2>Trending <span class="section-intro__style">Product</span></h2>
        </div>

	      <div class="col-md-6 col-lg-4 col-xl-3">
	        <div class="card text-center card-product">
	          <div class="card-product__img">
	            <img class="card-img" src="img/product/product5.png" alt="">
	            <ul class="card-product__imgOverlay">
	              <li><button><i class="ti-search"></i></button></li>
	              <li><button><i class="ti-shopping-cart"></i></button></li>
	              <li><button><i class="ti-heart"></i></button></li>
	            </ul>
	          </div>
	          <div class="card-body">
	            <p>Accessories</p>
	            <h4 class="card-product__title"><a href="single-product.html">Man Office Bag</a></h4>
	            <p class="card-product__price">$150.00</p>
	          </div>
	        </div>
	      </div>
	  </div>
    </section>
    
    <!-- ================ trending product section end ================= --> 

@endsection