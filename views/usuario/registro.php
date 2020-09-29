<?php require_once __dir__.'../../layouts/header.php'; ?>

<!--Contenido-->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3>Registrar Usuario</h3>
            </div>
           <div class="panel-body" id="formularioregistros">
                <form action="<?=base_url?>?controller=UsuarioController&action=save" name="formulario" id="formulario" method="POST">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label>Nombre</label>
                    <input type="hidden" name="idusuario" id="idusuario">
                    <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" required>
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Correo</label>
                    <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo" required>
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Teléfono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required>
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Nombre de usuario</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de usuario">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Tipo de usuario</label>
                  <select  class="form-control selectpicker" data-live-search="true"  name="tipo" id="tipo" required>
                    <option value="Interno">Interno</option>
                    <option value="Medico tratante">Médico tratante</option>
                  </select>
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Cumpleaños</label>
                    <input type="date" class="form-control" name="cumple" id="cumple" required>
                  </div>
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->

<?php require_once __dir__.'../../layouts/footer.php'; ?>