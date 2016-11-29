<div class="col-xs-6 col-xs-offset-3">
  <h1>¡Bienvenido! <small> Introduce tus datos para iniciar sesión.</small></h1>
</div>
<div>
  <form class="form-horizontal" action="/CodeIgniter/index.php/User/authenticate" method="post">
    <div class="form-group">
      <div class="col-xs-4 col-xs-offset-4">
        <input type="text" class="form-control" name="username" placeholder="Usuario">
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-4 col-xs-offset-4">
        <input type="password" class="form-control" name="password" placeholder="Contraseña">
      </div>
    </div>
      <div class="row col-xs-4 col-xs-offset-4">
        <div class="col-xs-4 col-xs-offset-2">
          <div class="form-group">
            <div class="">
              <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </div>
          </div>
        </div>
        <div class="col-xs-4">
          <div class="">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
              Registrarse
            </button>
          </div>
        </div>
      </div>
  </form>
</div>
<!--Aqui empieza el modal para registrar!-->
<div class="">
  <form class="form-horizontal" action="/CodeIgniter/index.php/User/register" method="post">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title" id="myModalLabel">Registrar Usuario</h3>
          </div>
          <div class="modal-body">
            <h4>¡Hola!<small> Favor de llenar correctamente los campos.</small></h4>
            <div class="form-group">
              <div class="col-xs-6 col-xs-offset-3">
                <input type="text" class="form-control" name="first_name" placeholder="Nombre(s)" autocomplete="off">
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-6 col-xs-offset-3">
                <input type="text" class="form-control" name="last_name" placeholder="Apellidos(s)" autocomplete="off">
              </div>
            </div>

            <div class="form-group">
              <div class="col-xs-6 col-xs-offset-3">
                <input type="text" class="form-control" name="user" placeholder="Usuario" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-6 col-xs-offset-3">
                <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-6 col-xs-offset-3">
                <input type="password" class="form-control" name="confirmpassword" placeholder="Confirmar Contraseña" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-6 col-xs-offset-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-6 col-xs-offset-3">
                <select type="text" class="form-control" name="secquestion1" placeholder="Pregunta de Seguridad" required="Campo Obligatorio">
                  <option value="¿Nombre de su primera mascota?">¿Nombre de su primera mascota?</option>
                  <option value="¿Pelicula Favorita?">¿Pelicula Favorita?</option>
                  <option value="¿Pasatiempo Favorito?">¿Pasatiempo Favorito?</option>
                  <option value="¿Nombre de su libro favorito?">¿Nombre de su libro favorito?</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-6 col-xs-offset-3">
                <input type="text" class="form-control" name="secanswer1" placeholder="Respuesta" autocomplete="off" required>
              </div>
            </div>
            <div class="col-xs-6 col-xs-offset-3 text-center">
              <h6>¿Eres empleado? Introduce el codigo seguridad para empleado:</h6>
            </div>
            <div class="form-group">
              <div class="col-xs-6 col-xs-offset-3">
                <input type="text" class="form-control" name="codeemployee" placeholder="Codigo de Empleado" autocomplete="off">
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-6 col-xs-offset-3">
                <input type="text" class="form-control" name="confirmcode" placeholder="Confirmar Codigo" autocomplete="off">
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

<!--<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>!-->
