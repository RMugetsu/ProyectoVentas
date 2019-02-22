<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<script type="text/javascript" src="code.js"></script>

	<!-- BOOTSRAP -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<!-- Barra de navegación -->
			@include('navbar')
			
		<!-- Componente Errores  -->
		<div class="row compErrors">
			@include('errors')
		</div>
		<!-- Titulo -->
		<div class="row bg-dark d-flex justify-content-center">
			<h1 class="bg-dark text-white">Nuevo cliente</h1>
		</div>
		<br>

		<!-- FORMULARIO -->
		<div class="row">
			<div class="col-md-1 col-lg-1"></div>

			<div class="col-md-10 col-lg-10">
				<form method="post" action('ClientesControler@save')>

				 	{{ csrf_field() }}
				 	<div class="row">
						<div class="form-group col-md-6">
							<label for="nombre">Nombre:</label>
							<input type="text" class="form-control" id="nombre">
						</div>
						<div class="form-group col-md-6">
							<label for="email">Email:</label>
							<input type="text" class="form-control" id="email">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="telefono">Teléfono:</label>
							<input type="text" class="form-control" id="telefono">
						</div>
						<div class="form-group col-md-6">
							<label for="direccion">Dirección:</label>
							<input type="text" class="form-control" id="direccion">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="cifNif">CIF/NIF:</label>
							<input type="text" class="form-control" id="cifNif">
						</div>
						<div class="form-group col-md-6">
							<label for="provincia">Provincia:</label>
							<input type="text" class="form-control" id="provincia">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="localidad">Localidad:</label>
							<input type="text" class="form-control" id="localidad">
						</div>
						<div class="form-group col-md-6">
							<label for="cp">Código Postal:</label>
							<input type="text" class="form-control" id="cp">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6"">
							<button type="submit" class="btn btn-dark">Guardar</button>
						</div>
						<div class="col-md-6 text-right">
							<a type="button" class="btn btn-dark" href="{{ URL::to('/') }}">Cancelar</a>
						</div>
					</div>
				</form>
			</div>

			<div class="col-md-1 col-lg-1"></div> 
		</div>
	</div>
</body>
</html>