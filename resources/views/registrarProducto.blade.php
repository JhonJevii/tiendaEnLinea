@extends('plantillas.base.plantilla')

@include('plantillas.base.preCarga')

@include('plantillas.base.postCarga')

@include('plantillas.base.sideMenu')

@section('content')

	<div class="row col-md-12">

	    <div class="row col-md-12 mt-3">
	        <h4>TABLA DE PRODUCTOS</h4>
	    </div>

	    <div class="row col-md-12 mt-2">

	        <form class="col-md-12" 
	              action="{{ route('ingresar.productos') }}" 
	              method="POST"
	              enctype="multipart/form-data">

	            @csrf

	            @if ($mensaje = Session::get('mensajeVerde'))
			        <div class="form-row col-md-12 alert alert-success estilo-success alert-dismissible fade show estilo-mensaje-verde" role="alert">
			            {{ $mensaje }}
			            <button type="button" class="close" data-dismiss="alert">&times;</button>
			        </div>
			    @endif

	            <div class="form-row">

				    @isset($categorias)

		                <div class="col-md-1">
		                    <label class="label-margin">Categoria</label>
		                    <select name="categoria" id="categoria" class="form-control">

								<option value="-1">seleccionar</option>
								@foreach($categorias as $item)
									<option value="{!! $item->id !!}">{{ $item->nombre }}</option>
								@endforeach

							</select>
		                </div>

					@endisset

					@isset($caracteristicas)

		                <div class="col-md-8">
		                    <label class="label-margin">Caracteristicas</label>
		                    <select name="caracteristicas" id="caracteristicas" class="form-control">
		                    	<option value="-1">seleccionar</option>
								@foreach($caracteristicas as $item)	
									<option value="{!! $item->id !!}">{{ $item->tipo }}</option>
								@endforeach
							</select>
		                </div>

		            @endisset

	                <div class="col-md-3">
						<div class="input-group">
							<label class="control-label label-margin">Imagen del producto</label>
							<input type="file" name="imagen" id="imagen" class="filestyle" 
								   data-text="Seleccionar"
								   data-dragdrop="false"
								   data-btnClass="btn-dark"
								   data-placeholder="archivo no seleccionado">
						</div>
	                </div>

	            </div>

	            <div class="form-row">

	                <div class="col-md-6">
	                    <label class="label-margin">Nombre</label>
	                    <input type="text" maxlength="100" name="nombre" class="form-control">
	                </div>

	                <div class="col-md-6">
	                   <label class="label-margin">Descripción del producto</label>
		                <textarea maxlength="200" name="descripcionProducto" class="form-control" placeholder="descripción del producto"></textarea>
	                </div>

	            </div>

		            <div class="form-row">

		                <div class="col-md-4">
		                    <label class="label-margin">Oferta</label>
		                    <select name="oferta" class="form-control browser-default custom-select">

							<option disabled>seleccionar</option>
							<option value="1" selected>si</option>
							<option value="0" selected>no</option>

						</select>
		                </div>

		                <div class="col-md-4">
		                    <label class="label-margin">Precio unitario</label>
		                    <input type="text" maxlength="15" name="precioUnitario" class="form-control">
		                </div>

		                <div class="col-md-4">
		                    <label class="label-margin">Precio absoluto</label>
		                    <input type="text" maxlength="15" name="precioAbsoluto" class="form-control">
		                </div>

		            </div>

			        @if ($errors->any())
			            <div class="alert alert-danger col-md-12 mt-3 mb-1 pl-3 pr-3 alert-dismissible fade show">
			                <ol class="estilo-lista-errores">
			                    @foreach ($errors->all() as $error)
			                        <li>{{ $error }}</li>
			                    @endforeach
			                </ol>
			                <button type="button" class="close" data-dismiss="alert">&times;</button>
			            </div>
			        @endif

		            <div class="row col-md-12 mt-3">

	                    <label></label>
	                    <input type="submit" value="Grabar" name="btnGrabarProducto" class="form-control btn btn-info">

		            </div>	          
	            
	        </form>

	    </div>

	</div>
@endsection