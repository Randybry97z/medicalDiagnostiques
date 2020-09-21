<?php require_once __dir__.'../../layouts/header.php'; ?>

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                    <h1 class="box-title">Usuario <a class="btn btn-success" id="btnagregar" href="<?=base_url?>?controller=UsuarioController&action=registro"><i class="fa fa-plus-circle"></i> Agregar</a></h1>
                  <div class="box-tools pull-right">
                  </div>
              </div>
              <!-- /.box-header -->
              <!-- centro -->
              <div class="panel-body table-responsive" id="listadoregistros">
                  <table id="tbllistado" class="table table-striped table-bordered" style="width:100%;">
                    <thead>
                      <th class="th-sm">Opciones</th>
                      <th class="th-sm">Nombre</th>
                      <th class="th-sm">Correo</th>
                      <th class="th-sm">Teléfono</th>
                      <th class="th-sm">Usuario</th>
                      <th class="th-sm">Estatus</th>
                    </thead>
                    <tbody>
                    	<?php while ($usr=$usuarios->fetch_object()): ?>
						            <tr>
							            <td><?php if ($usr->estatus): ?>
							            		<a class="btn btn-warning" href="<?=base_url?>?controller=UsuarioController&action=perfil&id=<?=$usr->idusuario?>"><i class="fa fa-pencil"></i></a>
				                    	<button class="btn btn-danger" id="desactivar" onclick="desactivar(<?=$usr->idusuario?>)"><i class="fa fa-close"></i></button>
				                    <?php else :?>
					                    <a class="btn btn-warning" href="<?=base_url?>?controller=UsuarioController&action=perfil&id=<?=$usr->idusuario?>"><i class="fa fa-pencil"></i></a>
					                    <button class="btn btn-primary" id="activar" onclick="activar(<?=$usr->idusuario?>)"><i class="fa fa-check"></i></button>
							              <?php endif; ?>
							            </td>
							            <td><?=$usr->nombre?></td>
							            <td><?=$usr->correo?></td>
							            <td><?=$usr->telefono?></td>
							            <td><?=$usr->username?></td>
							            <td>
							            	<?php if($usr->estatus): ?>
						            			<span class="label bg-green">Activado</span>
						            		<?php else: ?>
						                	<span class="label bg-red">Desactivado</span>
							              <?php endif; ?>
							            </td>
							          </tr>
						        	<?php endwhile; ?>
                    </tbody>
                    <tfoot>
                      <th>Opciones</th>
                      <th>Nombre</th>
                      <th>Correo</th>
                      <th>Teléfono</th>
                      <th>Usuario</th>
                      <th>Estatus</th>
                    </tfoot>
                  </table>
            	</div>
          </div>
       	</div>
			</div>
	</section>
</div>

<script type="text/javascript" src="<?=base_url?>views/scripts/usuario/usuario.js"></script>
<script type="text/javascript" src="<?=base_url?>views/scripts/usuario/filters.js"></script>
<?php require_once __dir__.'../../layouts/footer.php'; ?>