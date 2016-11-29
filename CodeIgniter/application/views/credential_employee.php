<div class="col-xs-6 col-xs-offset-3 text-center" style="margin-top:20px;">
<h1>SISTEMA DE CREDENCIALIZACION<small> Bienvenido Empleado </small></h1>
</div>
<div class="row col-xs-6 col-xs-offset-3">
		<div class="col-xs-4 col-xs-offset-2" style="margin-top:40px;">
			<button  id="students"type="button" class="btn btn-primary" data-toggle="modal" data-target="#registerStudents" disabled="disabled">
				Estudiante
			</button>
		</div>
		<div class="col-xs-4 col-xs-offset-2" style="margin-top:40px;">
			<button id="employee" type="button" class="btn btn-primary" data-toggle="modal" data-target="#registerEmployee">
				Empleado
			</button>
		</div>
</div>
<div class="row col-xs-6 col-xs-offset-3" style="margin-top:40px;">
	<form id="visual" class="form-vertical" action="/CodeIgniter/index.php/Credential/employee_view" method="post" enctype="multipart/form-data">
	<div class="col-xs-4">
		<h5>Intruduce tu No. de Empleado:</h5>
	</div>
	<div class="col-xs-4">
		<?php echo '<input type="text" class="form-control" name="id_employee" placeholder="Matricula Registrada" required/>';?>
	</div>
	<div class="col-xs-3 col-xs-offset-">
		<button id="employee" type="submit" class="btn btn-primary">
			Visualizar Credencial
		</button>
	</div>
	</form>
</div>
<div class="">
	<form class="form-horizontal" action="/CodeIgniter/index.php/Credential/register_ctrl_employee" method="post" enctype="multipart/form-data">
		<div id="registerEmployee" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		  <div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h2 class="modal-title" id="myModalLabel">Registrarse para credencializacion</h2>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<div class="col-xs-6 col-xs-offset-3">
								<input type="text" class="form-control" name="id_employee" placeholder="No. Empleado" autocomplete="off" required/>
							</div>
						</div>
						<div class="col-xs-6 col-xs-offset-3 text-center">
							<h3>Datos Personales<h3>
						</div>
						<div class="form-group">
							<div class="col-xs-12 col-xs-offset-0 row">
								<div class="col-xs-6">
									<input type="text" class="form-control" name="name" placeholder="Nombre(s)" autocomplete="off" required>
								</div>
								<div class="col-xs-6">
									<input type="text" class="form-control" name="lastname" placeholder="Apellidos(s)" autocomplete="off" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12 col-xs-offset-0 row">
								<div class="col-xs-6 col-xs-offset-0">
									<input type="text" class="form-control" name="rfc" placeholder="RFC" autocomplete="off" required>
								</div>
								<div class="col-xs-6 col-xs-offset-0">
									<input type="text" class="form-control" name="curp" placeholder="CURP" autocomplete="off" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12 col-xs-offset-0 row">
								<div class="col-xs-6">
									<input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off" required/>
								</div>
								<div class="col-xs-6">
									<input type="text" class="form-control" name="address" placeholder="Direccion" autocomplete="off"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12 col-xs-offset-0 row">
								<div class="col-xs-4 col-xs-offset-0">
									<input type="text" class="form-control" name="home" placeholder="Telefono de Casa" autocomplete="off" required>
								</div>
								<div class="col-xs-4 col-xs-offset-0">
									<input type="text" class="form-control" name="personal" placeholder="Telefono Personal" autocomplete="off" required>
								</div>
								<div class="col-xs-4 col-xs-offset-0">
									<input type="text" class="form-control" name="emergency" placeholder="Telefono de Emergencias" autocomplete="off" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-10 col-xs-offset-1 radio row">
								<div class="col-md-2 col-xs-offset-1">
									<h4 style="margin-top: 0px;">Genero:</h4>
								</div>
								<div class="col-xs-2 col-xs-offset-1">
									<input type="radio" name="gender" value="Masculino" checked>Hombre<br>
								</div>
								<div class="col-xs-2 col-xs-offset-1">
	  							<input type="radio" name="gender" value="Femenino">Mujer<br>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-xs-offset-3 text-center">
						<h3>Datos Academicos</h3>
						</div>
						<div class="form-group">
							<div class="col-xs-12 col-xs-offset-0 row">
								<div class="col-xs-4 col-xs-offset-0">
									<input type="text" class="form-control" name="position" placeholder="Cargo" autocomplete="off" required>
								</div>
								<div class="col-xs-4 col-xs-offset-0">
									<input type="text" class="form-control" name="departament" placeholder="Departamento" autocomplete="off" required>
								</div>
								<div class="col-xs-4 col-xs-offset-0">
									<input type="text" class="form-control" name="company_name" placeholder="Compañia" autocomplete="off" required>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-xs-offset-3 text-center">
							<h3>...</h3>
						</div>
						<div class="form-group">
							<div class="col-xs-12 col-xs-offset-0 row">
								<div class="col-xs-4 col-xs-offset-0">
									<input type="date" name="birthdate" class="form-control" step="1" min="1900-01-01" max="2030-12-31" placeholder="Fecha de Nacimiento : " autocomplete="off">
								</div>
								<div class="col-xs-4 col-xs-offset-0">
									<input type="text" class="form-control" name="city" placeholder="Ciudad de Nacimiento" autocomplete="off">
								</div>
								<div class="col-xs-4 col-xs-offset-0">
									<input type="text" class="form-control" name="country" placeholder="Pais de Nacimiento" autocomplete="off">
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-xs-offset-3 text-center">
							<h3>Subir una imagen</h3>
						</div>
						<div class="form-group" sytle="margen-bot:20px">
							<div class="col-xs-6 col-xs-offset-3">
								<div class="col-xs-offset-2">
									<input type="file" name="file" id="file" required/>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						<button type="submit" class="btn btn-primary">Registrar</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
