<div id="form-user" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
  <div class="modal-content">
    <div id="form-user-login" class="form-user">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Ingresa</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <form action="">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Contraseña">
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Recordarme <a href="#">Olvidé contraseña</a>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary btn-lg btn-block">Ingresar</button>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-facebook btn-lg btn-block btn-facebook">Ingresa con Facebook</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <p>¿No tienes una cuenta? <a data-form="form-user-register" href="#">Regístrate</a></p>
      </div>
    </div>
    <div id="form-user-register" class="hide form-user">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Registrar</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <form action="">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Contraseña">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirmar contraseña">
              </div>
              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Acepto los <a href="index.php?page=terms-conditions">Términos y Condiciones</a>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary btn-lg btn-block">Registrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <p>¿Tienes una cuenta? <a data-form="form-user-login" href="#">Ingresa</a></p>
      </div>
    </div>
  </div>
</div>