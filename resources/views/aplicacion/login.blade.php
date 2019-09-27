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
			<form action="validar.php" method="POST">

				    <section class="form-group">
			              <label for="Usuario">Usuario:</label>
		                  <input class="form-control" name="usuario" type="text" placeholder="Usuario:" required="" >
			
		            </section>
		            <section class="form-group">
			              <label for="Contrasena">Contraseña:</label>
		                  <input class="form-control" name="contrasena" type="password" placeholder="Contraseña:" required="" >
			
		            </section>
		            <section class="form-group">
		                        <button  class="boton btn" type="submit">Iniciar Sesion</button>
		                        <a href="recuperar.php">¿Olvidaste tu contraseña ?</a>
		                        
		                        
	                </section>
				
			</form>
			
        </section>
        <section  class=" col-xs-1 col-sm-2 col-md-2">
				
		</section>
        </div>

<!-- fin html de  el formulario de  login-->




@endsection


