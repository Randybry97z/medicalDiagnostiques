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
                    <span class="h1 font-weight-bold">Crear Programa</span>
                  </div>
                  <div class="col-xs-6 col-md-4">
                  </div>
                  <div class="col-xs-6 col-md-4">
                  </div>
                </div>
            </div>
            <div class="panel-body" id="formularioregistros">
              <form action="<?=base_url?>?controller=ProgramaController&action=save" name="formulario" id="formulario" method="POST">
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Nombre</label>
                  <input type="hidden" class="form-control" id="idpersona" name="idpersona">
                  <input type="text" class="form-control" id="nombre" name="nombre" maxlength="150" placeholder="Nombre" required>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Estatus</label>
                  <select name="estatus" class="form-control" id="estatus">
                    <option value="" selected="true">Seleccione una opción</option>
                    <option value="0">Desactivado</option>
                    <option value="1">Activado</option>
                  </select>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Fecha de creación</label>
                  <input type="date" class="form-control" id="fecha_creacion" name="fecha_creacion" maxlength="100" placeholder="Fecha de creacion" value="<?php echo date("Y-m-d");?>" required>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label >Observaciones</label>
                  <textarea class="form-control" name="observaciones" id="observaciones"></textarea>
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
<script type="text/javascript" src="<?=base_url?>views/scripts/programa/registro.js"></script>
<?php require_once __dir__.'../../layouts/footer.php'; ?>