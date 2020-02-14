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
							<div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>
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
							<div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>
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
							<div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>
						</div>
					</div>
				</div>

			</div>
				
			<!-- Home Slider Navigation -->
			<div class="home_slider_nav home_slider_prev trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="primeraPlantilla/images/prev.png" alt=""></div></div>
			<div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="primeraPlantilla/images/next.png" alt=""></div></div>

		</div>
	</div>

  <!-- Boxes -->
  
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

  <!-- Categories -->

  <div class="categories">
    <div class="section_container">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <div class="categories_list_container">
              <ul class="categories_list d-flex flex-row align-items-center justify-content-start">
                <li><a href="categories.html">new arrivals</a></li>
                <li><a href="categories.html">recommended</a></li>
                <li><a href="categories.html">best sellers</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection