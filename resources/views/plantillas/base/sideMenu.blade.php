@section('sideMenu')
	
	<!-- Sidebar -->

	<div class="sidebar">

		<!-- Logo -->
		<div class="sidebar_logo">
			<a href="#"><div>a<span>star</span></div></a>
		</div>

		<!-- Sidebar Navigation -->
		<nav class="sidebar_nav">
			<ul>
				<li><a href="{{ route('inicio') }}">inicio<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

				<li><a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Administrar<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>

				<ul class="collapse list-unstyled" id="homeSubmenu">
					<li><a href="{{ route('tabla.producto') }}">Registrar producto<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
					<li><a href="{{ route('tabla.categoria') }}">Registrar categoria<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
					<li><a href="{{ route('tabla.categoria') }}">Registrar detalle<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
					<li><a href="{{ route('tabla.categoria') }}">Registrar oferta<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
					<li><a href="{{ route('tabla.categoria') }}">Registrar proveedor<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				</ul>
			
				<li><a href="#">man<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#">woman<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#">lookbook<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#">blog<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="#">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			</ul>
		</nav>

		<!-- Cart -->
		<div class="cart d-flex flex-row align-items-center justify-content-start">
			<div class="cart_icon"><a href="cart.html">
				<img src="images/bag.png" alt="">
				<div class="cart_num">2</div>
			</a></div>
			<div class="cart_text">bag</div>
			<div class="cart_price">$39.99 (1)</div>
		</div>
	</div>


@endsection