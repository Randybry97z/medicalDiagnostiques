<?php require_once __dir__.'../../layouts/header.php'; ?>

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                    <h1 class="box-title">Personas <a class="btn btn-success" id="btnagregar" href="<?=base_url?>controller=PersonaController&action=registro"><i class="fa fa-plus-circle"></i> Agregar</a></h1>
                  <div class="box-tools pull-right">
                  </div>
              </div>
              <!-- /.box-header -->
              <!-- centro -->
              <div class="panel-body table-responsive" id="listadoregistros">
                  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                      <th class="th-sm">Nombre</th>
                      <th class="th-sm">Tipo</th>
                      <th class="th-sm">Correo</th>
                      <th class="th-sm">Teléfono</th>
                      <th class="th-sm">Usuario</th>
                      <th class="th-sm">Estatus</th>
                    </thead>
                    <tbody>
                    	<?php while ($sub=$personas->fetch_object()): ?>
						            <tr>
							            <td><a href="<?=base_url?>?controller=PersonaController&action=detalle&id=<?=$sub->idpersona?>"><?=$sub->nombre?></a></td>
                          <td><?=$sub->tipo?></td>
							            <td><?=$sub->correo?></td>
							            <td><?=$sub->telefono?></td>
                          <td><?php if($sub->usuario): ?>
                              <a href="<?=base_url?>?controller=UsuarioController&action=perfil&id=$sub->idusuario"><?=$sub->usuario?></span>
                            <?php else: ?>
                              <span class="text-muted">Sin usuario asignado</span>
                            <?php endif; ?></td>
							            <td>
							            	<?php if($sub->estatus): ?>
						            			<span class="label bg-green">Activado</span>
						            		<?php else: ?>
						                	<span class="label bg-red">Desactivado</span>
							              <?php endif; ?>
							            </td>
							          </tr>
						        	<?php endwhile; ?>
                    </tbody>
                  </table>
            	</div>
          </div>
       	</div>
			</div>
	</section>
</div>

<script type="text/javascript" src="<?=base_url?>views/scripts/persona/filters.js"></script>
<?php require_once __dir__.'../../layouts/footer.php'; ?>