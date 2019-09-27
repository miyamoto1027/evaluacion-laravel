@extends("theme.$theme.layout")
@section('titulo')
Recuperar clave  
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
			              <label for="email" class="control-label requerido">Correo Electronico:</label>
		                  <input class="form-control" name="email" id="email" type="text"  >
			
		            </section>
		            
		            <section class="form-group">
								@include('includes.boton-form-editar')
		                       
	                </section>
				
			</form>
			
        </section>
        <section  class=" col-xs-1 col-sm-2 col-md-2">
				
		</section>
        </div>

<!-- fin html de  el formulario de  login-->




@endsection


