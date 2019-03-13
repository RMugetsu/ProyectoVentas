<!DOCTYPE html>
<html lang="es">
	<head>
		<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
		<script type="text/javascript" src="{{asset('js/listas.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/componenteErrores.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/venta.js')}}"></script>

		<!-- BOOTSRAP -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

		<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
				<h1 class="bg-dark text-white">Venta</h1>

				<!-- <div id="editarGuardar">
					ICONO EDITAR /ICONO GUARDAR
					<img id="editarCliente" src="{{asset('img/editBlanco.png')}}" height="45" width="55" onclick="editar()">

					VARIARA ENTRE LAS 2 SIGUIENTES IMAGENES
					<img id="editarCliente" src="{{asset('img/editBlanco.png')}}" height="45" width="55" onclick="editar()">
					<img id="guardarCliente" src="{{asset('img/okBlanco.png')}}" height="45" width="45" onclick="guardar()">
				</div> -->

			</div>
			<br>
			<div class="atras">
				 
			</div>
			<br>

			<div class="row">
				<div class="col"></div>
				<div class="form-group col">
					<label for="id">ID:</label>
					<input type="text" class="form-control" name="id" id="id" disabled value="1">
				</div>
				<div class="form-group col">
					<label for="created_at">Fecha de creación:</label>
					<input type="text" class="form-control" name="created_at" id="created_at" disabled value="27/07/2017">
				</div>
				<div class="form-group col">
					<label for="updated_at">Fecha última modificación:</label>
					<input type="text" class="form-control" name="updated_at" id="updated_at" disabled value="18/12/2017">
				</div>
				<div class="col"></div>
			</div>

			<div class="row">
			<h4>Facturas</h4> 
			<img src="{{asset('img/agregar.png')}}" class="agregar" id="agregarFac" data-toggle="modal" data-target="#agrearDoc" onclick="editarModal(this)">
		</div>
			<div class="tabla blan desplegaFac">
				<div class="encabezado">
					<div class="row">
						<div class="col-lg-2">Nombre</div>
						<div class="col-lg-2">Estado</div>
						<div class="col-lg-2">Fecha modificación</div>
						<div class="col-lg-2"></div>
						<div class="col-lg-2"></div>
						<div class="col-lg-2"></div>
					</div>
				</div>
				<hr>
				<div class="cuerpo" id="tbodyFactura">
					<!-- LISTA DE FACTURAS -->


				</div>
			</div>


		<br>
		<div class="row">
			<h4>Albaran</h4>
			<img src="{{asset('img/agregar.png')}}" class="agregar" id="agregarAlb" data-toggle="modal" data-target="#agrearDoc" onclick="editarModal(this)">
		</div>
		<div class="tabla blan desplegaAl">
			<div class="encabezado">
				<div class="row">
					<div class="col-lg-2">Nombre</div>
					<div class="col-lg-2">Estado</div>
					<div class="col-lg-2">Fecha modificación</div>
					<div class="col-lg-2"></div>
					<div class="col-lg-2"></div>
					<div class="col-lg-2"></div>
				</div>
			</div>
			<hr>
			<div class="cuerpo" id="tbodyAlbaran">
				<!-- LISTA DE ALBARANES -->


			</div>
		</div>


		<br>
		<div class="row">
			<h4>Tipo3</h4>
			<img src="{{asset('img/agregar.png')}}" class="agregar" id="agregarT3" data-toggle="modal" data-target="#agrearDoc" onclick="editarModal(this)">
		</div>
		<div class="tabla blan desplegaT3">
				<div class="encabezado">
					<div class="row">
						<div class="col-lg-2">Nombre</div>
						<div class="col-lg-2">Estado</div>
						<div class="col-lg-2">Fecha modificación</div>
						<div class="col-lg-2"></div>
						<div class="col-lg-2"></div>
						<div class="col-lg-2"></div>
					</div>
				</div>
				<hr>
				<div class="cuerpo" id="tbodyT3">
					<!-- LISTA DE TIPO 3 -->


				</div>
			</div>



		<br>
		<div class="row">
			<h4>Tipo4</h4>
			<img src="{{asset('img/agregar.png')}}" class="agregar" id="agregarT4" data-toggle="modal" data-target="#agrearDoc" onclick="editarModal(this)">
		</div>
		<div class="tabla blan desplegaT4">
				<div class="encabezado">
					<div class="row">
						<div class="col-lg-2">Nombre</div>
						<div class="col-lg-2">Estado</div>
						<div class="col-lg-2">Fecha modificación</div>
						<div class="col-lg-2"></div>
						<div class="col-lg-2"></div>
						<div class="col-lg-2"></div>
					</div>
				</div>
				<hr>
				<div class="cuerpo" id="tbodyT4">
					<!-- LISTA DE TIPO 4 -->


				</div>
			</div>


		<br>
		<div class="row">
			<h4>Presupuestos</h4>
			<img src="{{asset('img/agregar.png')}}" class="agregar" id="agregarPres" data-toggle="modal" data-target="#agrearDoc" onclick="editarModal(this)">
		</div>	
		<div class="tabla blan despPre">
				<div class="encabezado">
					<div class="row">
						<div class="col-lg-2">Nombre</div>
						<div class="col-lg-2">Estado</div>
						<div class="col-lg-2">Fecha modificación</div>
						<div class="col-lg-2"></div>
						<div class="col-lg-2"></div>
						<div class="col-lg-2"></div>
					</div>
				</div>
				<hr>
				<div class="cuerpo" id="tbodyPresupuesto">
					<!-- LISTA DE PRESUPUESTOS -->


				</div>
			</div>

			<div class="modal fade" id="agrearDoc">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h2 id="modalTitulo"></h2>
							<button type="button" class="close" data-dismiss="modal">X</button>
						</div>
						<div class="modal-body">
							<form  method="POST" id ="formArchivo"action="/cliente/subida/{{$venta->id}}" accept-charset="UTF-8" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="form-group">

									<label class="labelCliente" for="tipo">Tipo:</label>
									<input type="text" class="form-control" name="tipo" id="tipo" disabled>

									<label for="estado">Estado</label>
									<input type="text" class="form-control" name="estado" id="estado">

									<input type="file" class="form-control-file" id="archivo" name="archivo">
									<button type="submit" onclick="checkFormSubidaArchivos('formArchivo');return false;" class="btn btn-dark float-right"> Guardar </button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>




	<script>
		var venta = {!! json_encode($venta->toArray(), JSON_HEX_TAG) !!};

		var facturas = {!! json_encode($facturas->toArray(), JSON_HEX_TAG) !!};
		var albaranes = {!! json_encode($albaranes->toArray(), JSON_HEX_TAG) !!};
		var tipo3 = {!! json_encode($tipo3->toArray(), JSON_HEX_TAG) !!};
		var tipo4 = {!! json_encode($tipo4->toArray(), JSON_HEX_TAG) !!};
		var presupuestos = {!! json_encode($presupuestos->toArray(), JSON_HEX_TAG) !!};
		

		$(document).ready(function() {
			datosVenta(venta);

			detalleArchivos(facturas, albaranes, tipo3, tipo4, presupuestos);
		});				
	</script>
</body>
</html>

