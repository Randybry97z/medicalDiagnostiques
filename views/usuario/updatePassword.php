<?php require_once __dir__.'../../layouts/header.php'; ?>

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
              <?php if(isset($usr)): ?>
                <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <span class="h1 font-weight-bold">Actualizar contraseña de: <?=$usr->nombre?> </span>
                    <span class="text-muted h4">(<?=$usr->username?>)</span>
                  </div>
                  <div class="col-xs-6 col-md-4">
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <button class="btn btn-danger" onclick="cancelar()" id="btnCancelar"><i class="fa fa-plus-circle"></i> Cancelar</button>
                  </div>
                </div>
              </div>
             <?php else: ?>
                 <h1 class="h1">El usuario no existe</h1>
              <?php endif; ?>
              <div class="panel-body" id="formularioregistros">
                    <form action="<?=base_url?>?controller=UsuarioController&action=updatePassword&id=<?=$usr->idusuario?>" name="formulario" id="formulario" method="POST">
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Nueva Contraseña</label>
                        <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña">
                      </div>
                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
      </div>

  </section>
</div>
<script type="text/javascript" src="<?=base_url?>views/scripts/usuario/updatePassword.js"></script>
<?php require_once __dir__.'../../layouts/footer.php'; ?>