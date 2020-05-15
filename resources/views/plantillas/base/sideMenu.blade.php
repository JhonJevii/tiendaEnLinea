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

			<ul class="collapse list-unstyled ml-3 mb-2" id="homeSubmenu">
				<li><a href="{{ route('formulario.producto') }}">Registrar producto<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="{{ route('formulario.categoria') }}">Registrar categoria<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="{{ route('formulario.detalle') }}">Registrar detalle<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="{{ route('formulario.oferta') }}">Registrar oferta<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="{{ route('formulario.proveedor') }}">Registrar proveedor<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			</ul>

			
		
			<li><a href="#">categorias<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			<li><a href="#">contact<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
		</ul>
	</nav>

	<!-- Cart -->

	<div class="cart d-flex flex-row align-items-center justify-content-start">
		<div class="cart_icon"><a href="{{ url('mostrar-carrito/{id}') }}">
			<img src="images/bag.png" alt="">
			<div class="cart_num"><span class="badge">{{ $carrito }}</span></div>
		</a></div> 
		<div class="cart_text">Bolsa</div>
		<div class="cart_price"> </div>

		</nav>	

		<!-- Cart -->
		<div class="cart d-flex flex-row align-items-center justify-content-start">
			<div class="cart_icon"><a href="{{ url('carro') }}">
				<img src="images/bag.png" alt="">
				<div class="cart_num">2</div>
			</a></div> 
			<div class="cart_text">Bolsa</div>
			<div class="cart_price">$39.99 </div>
		</div>

	</div>
</div>


@endsection