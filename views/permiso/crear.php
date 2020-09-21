<?php require_once __dir__.'../../layouts/header.php'; ?>
	<!--Contenido-->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <?php if(isset($edit) && isset($pm) && is_object($pm)):?>
        <h1>Editar permiso <?=$pm->nombre?></h1>
        <?php $url_action = base_url."?controller=PermisoController&action=save&id=".$pm->idpermiso; ?>
      <?php else: ?>
        <h1>Crear Productos</h1>
        <?php $url_action = base_url."?controller=PermisoController&action=save"; ?>
      <?php endif; ?>
      <div class="panel-body" id="formularioregistros">
        <form action="<?=$url_action?>" name="formulario" id="formulario" method="POST">
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <label>Nombre</label>
              <input type="hidden" name="idpermiso" id="idpermiso">
              <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" value="<?=isset($pm) && is_object($pm) ? $pm->nombre : ''?>" required>
            </div>
              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
          </div>
       	</form>
   		</div>
 		</section>
</div>
<?php require_once __dir__.'../../layouts/footer.php'; ?>