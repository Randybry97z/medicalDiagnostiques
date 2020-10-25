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
                <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <span class="h1 font-weight-bold">Crear Cliente/Proveedor</span>
                  </div>
                  <div class="col-xs-6 col-md-4">
                  </div>
                </div>
            </div>
            <div class="panel-body" id="formularioregistros">
              <form action="<?=base_url?>?controller=PersonaController&action=save" name="formulario" id="formulario" method="POST">
				<input type="hidden" name="creado_por" id="creado_por"
                                value="<?=$_SESSION['identity']->idusuario?>">
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Nombre</label>
                  <input type="hidden" class="form-control" id="idpersona" name="idpersona">
                  <input type="text" class="form-control" id="nombre" name="nombre" maxlength="150" placeholder="Nombre" required>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Contacto</label>
                  <input type="text" class="form-control" id="contacto" name="contacto" maxlength="150" placeholder="Contacto" required>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Correo</label>
                  <input type="email" class="form-control" id="correo" name="correo" maxlength="100" placeholder="Correo" required>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Teléfono</label>
                  <input type="text" class="form-control" id="telefono" name="telefono" maxlength="30" placeholder="Teléfono" required>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <button type="submit" class="btn btn-md btn-primary" id="btnGuardar">Guardar</button>
                  <button class="btn btn-md btn-danger" onclick="cancelar()" id="btnCancelar">Cancelar</button>
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