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
              <?php if(isset($sub)):?>
                <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <span class="h1 font-weight-bold"><?=$sub->nombre?> </span>
                  </div>
                  <div class="col-xs-6 col-md-4">
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <p class="m-2"><button class="btn btn-info" onclick="edit()" id="btnEditar"><i class="fa fa-plus-circle"></i> Editar</button></p>
                    <p class="m-2"><button class="btn btn-danger" onclick="cancelar()" id="btnCancelar"><i class="fa fa-plus-circle"></i> Cancelar</button></p>
                  </div>
                </div>
              <?php else: ?>
                 <h1 class="h1">La persona no existe</h1>
              <?php endif; ?>
      </div>
              <div class="panel-body" id="formularioregistros">
                  <form action="<?=base_url?>?controller=PersonaController&action=save&id=<?=$sub->idpersona?>" name="formulario" id="formulario" method="POST">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Nombre</label>
                <input type="hidden" name="idusuario" id="idusuario">
                <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" value="<?=$sub->nombre?>">
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Estatus</label>
                <input type="text" class="form-control" name="estatus" id="estatus" placeholder="Estatus" value="<?= ($sub->estatus)?"Activado":"Desactivado";?>">
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Contacto</label>
                <input type="text" class="form-control" name="contacto" id="contacto" placeholder="Contacto" value="<?=$sub->contacto?>">
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Correo</label>
                <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo" value="<?=$sub->correo?>">
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Teléfono</label>
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" value="<?=$sub->telefono?>">
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <label>Tipo</label>
              <select class="form-control" data-live-search="true"  name="tipo" id="tipo" required>
                <option value="<?=$sub->tipo?>"><?=$sub->tipo?></option>
                <option value="Cliente">Cliente</option>
                <option value="Proveedor">Proveedor</option>
              </select>
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Programas:</label>
                <?php $programas = Utils::showProgramas();?>
                <select multiple class="form-control" data-live-search="true"  name="programas[]" id="programas">
                  <?php while($pm = $programas->fetch_object() ): ?>
                    <option value="<?=$pm->idprograma?>"><?=$pm->nombre?></option>
                  <?php endwhile; ?>
                </select>
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Programas actuales:</label>
                <?php $programas = Utils::showClientProgram($sub->idpersona);?>
                <div class="" name="permisos[]" id="permisos_act">
                  <?php while($prog = $programas->fetch_object() ): ?>
                    <div class="row" style="margin: 1rem">
                      <p class="col-md-6"><?=$prog->nombre?> </p>
                    </div>
                  <?php endwhile; ?>
                </div>
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label>Creado por</label>
                <div name="usuario" id="usuario"><?=$sub->usuario_nombre?></div>
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
<script type="text/javascript" src="<?=base_url?>views/scripts/persona/detalle.js"></script>
<?php require_once __dir__.'../../layouts/footer.php'; ?>