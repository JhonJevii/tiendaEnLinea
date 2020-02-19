@extends('plantillas.base.plantilla')

@include('plantillas.base.preCarga')

@include('plantillas.base.postCarga')

@include('plantillas.base.sideMenu')

@section('content')

<!-- Categories -->
 <div class="row col-md-12">

      <div class="row col-md-12 mt-3">
          <h4>REGISTRO DE CATEGORIAS</h4>
      </div>

      <div class="row col-md-12 mt-2">

          <form class="col-md-12" 
                action="{{ route('ingresar.categoria') }}" 
                method="POST"
                enctype="multipart/form-data">

              @csrf
                <div class="col-md-3">
                  <div class="input-group">
                    <label class="control-label label-margin">Imagen de la categoria</label>
                    <input type="file" name="imagen" id="foto" class="filestyle" 
                         data-text="Seleccionar" 
                         data-dragdrop="false" 
                         data-btnClass="btn-dark"
                         data-placeholder="archivo no se|leccionado">
                  </div>
                </div>            

              <div class="form-row">

                  <div class="col-md-6">
                      <label class="label-margin">Nombre</label>
                      <input type="text" maxlength="100" name="nombre" class="form-control">
                  </div>

                  <div class="col-md-6">
                     <label class="label-margin">Descripción de la caracteristica</label>
                    <textarea maxlength="200" name="descripcion" class="form-control" placeholder="descripción del producto"></textarea>
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
                      <input type="submit" value="Grabar" name="btnGrabarCategory" class="form-control btn btn-info">

                </div>              
              
          </form>

      </div>

  </div>
@endsection