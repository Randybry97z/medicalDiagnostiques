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
              <?php if(isset($edit) && isset($pm) && is_object($pm)):?>
                <div class="col-xs-6 col-md-4">
                  <span class="h1 font-weight-bold">Permiso: <?=$pm->nombre?></span>
                  <h4>Usuarios con este permiso</h4>
                </div>
              <?php endif; ?>
      </div>
              <div class="panel-body" id="formularioregistros">
                <table class="table table-striped">
                  <thead>
                    <th scope="col">Usuario</th>
                    <th scope="col">Acciones</th>
                  </thead>
                  <tbody>
                    <?php while ($usr=$user->fetch_object()): ?>
                      <tr><td class="h3"><a href="<?=base_url?>?controller=UsuarioController&action=perfil&id=<?=$usr->idusuario?>"><?=$usr->nombre;?></a></td><td><button class="btn btn-danger" id="elim" onclick="deleteUsuarioPermiso(<?=$usr->idup?>)">Eliminar usuario del permiso</button></td></tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
   		</div>
 		</section>
</div>
<script type="text/javascript" src="<?=base_url?>views/scripts/permiso/detalle.js"></script>
<?php require_once __dir__.'../../layouts/footer.php'; ?>