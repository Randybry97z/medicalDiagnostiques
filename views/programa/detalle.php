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
              <?php if(isset($prog)):?>
                <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <span class="h1 font-weight-bold"><?=$prog->nombre?> </span>
                  </div>
                  <div class="col-xs-6 col-md-4">
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <p class="m-2"><button class="btn btn-info" onclick="edit()" id="btnEditar"><i class="fa fa-plus-circle"></i> Editar</button></p>
                    <p class="m-2"><button class="btn btn-danger" onclick="cancelar()" id="btnCancelar"><i class="fa fa-plus-circle"></i> Cancelar</button></p>
                  </div>
                </div>
              <?php else: ?>
                 <h1 class="h1">El programa no existe</h1>
              <?php endif; ?>
      </div>
              <div class="panel-body" id="formularioregistros">
                  <form action="<?=base_url?>?controller=ProgramaController&action=save&id=<?=$prog->idprograma?>" name="formulario" id="formulario" method="POST">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Nombre</label>
                <input type="hidden" name="idprograma" id="idprograma">
                <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" value="<?=$prog->nombre?>">
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Estatus</label>
                <input type="text" class="form-control" name="estatus_t" id="estatus" placeholder="Estatus" value="<?= ($prog->estatus)? "Activado":"Desactivado";?>">
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Fecha de creación</label>
                <input type="text" class="form-control" name="fecha_creacion" id="fecha_creacion" placeholder="Fecha de creación" value="<?=$prog->fecha_creacion?>">
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Clientes relacionados:</label>
                <?php $clis = Utils::showProgramClients($prog->idprograma);?>
                <div class="" name="clientes[]" id="clientes">
                  <?php while($cli = $clis->fetch_object() ): ?>
                    <div class="row" style="margin: 1rem">
                      <p class="col-md-6"><?=$cli->nombre?> </p>
                    </div>
                  <?php endwhile; ?>
                </div>
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Observaciones</label>
                <textarea class="form-control" name="observaciones" id="observaciones"><?=$prog->observaciones?>
                </textarea>
              </div>
              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
              </div>
            </form>
              </div>
            </div>
          </div>
        </div>
   		</div>
 		</section>
</div>

<script type="text/javascript" src="<?=base_url?>views/scripts/programa/detalle.js"></script>
<?php require_once __dir__.'../../layouts/footer.php'; ?>