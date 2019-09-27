@extends("theme.$theme.layout")
@section('titulo')
Iniciar Session    
@endsection

@section('contenido')

<!-- codigo html de  el formulario de  login-->

        <div class="row">
<section  class=" col-xs-1 col-sm-2 col-md-2">
				
					
    </section>
    <section class="col-xs-12 col-sm-8 col-md-8">
			@include('includes.form-error')
            @include('includes.mensaje')
			<form action="validar.php" method="POST">

				    <section class="form-group">
			              <label for="usuario" class="control-label requerido">Usuario:</label>
		                  <input class="form-control" name="usuario" id="usuario" type="text"  >
			
		            </section>
		            <section class="form-group">
			              <label for="contrasena" lass="control-label requerido">Contraseña:</label>
		                  <input class="form-control" name="contrasena" id="contrasena"   type="password"  >
			
		            </section>
		            <section class="form-group">
								@include('includes.boton-form-crear')
		                        <a href="{{route('recuperar')}}">¿Olvidaste tu contraseña ?</a>
		                        
		                        
	                </section>
				
			</form>
			
        </section>
        <section  class=" col-xs-1 col-sm-2 col-md-2">
				
		</section>
        </div>

<!-- fin html de  el formulario de  login-->




@endsection


