<?php require_once __dir__.'../../layouts/header.php'; ?>

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                    <h1 class="box-title">Proveedores <a class="btn btn-success" id="btnagregar" href="<?=base_url?>?controller=PersonaController&action=registro"><i class="fa fa-plus-circle"></i> Agregar</a></h1>
                  <div class="box-tools pull-right">
                  </div>
              </div>
              <!-- /.box-header -->
              <!-- centro -->
              <div class="panel-body table-responsive" id="listadoregistros">
                  <table id="tbllistado" class="table table-striped table-bordered">
                    <thead>
                      <th>Nombre</th>
                      <th>Correo</th>
                      <th>Teléfono</th>
                      <th>Contacto</th>
                      <th>Estatus</th>
                    </thead>
                    <tbody>
                    	<?php while ($pro=$proveedores->fetch_object()): ?>
						            <tr>
							            <td><a href="<?=base_url?>?controller=PersonaController&action=detalle&id=<?=$pro->idpersona?>"><?=$pro->nombre?></a></td>
							            <td><?=$pro->correo?></td>
							            <td><?=$pro->telefono?></td>
                          <td><?=$pro->contacto?></td>
							            <td>
							            	<?php if($pro->estatus): ?>
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