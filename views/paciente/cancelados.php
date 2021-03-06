<?php require_once __dir__.'../../layouts/header.php'; ?>

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                  <h1 class="box-title">Pacientes Cancelados</h1>
                  <div class="box-tools pull-right">
                  </div>
              </div>
              <!-- /.box-header -->
              <!-- centro -->
              <div class="panel-body table-responsive" id="listadoregistros">
                  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                      <th class="th-sm">Nombre</th>
                      <th class="th-sm">Sexo</th>
                      <th class="th-sm">Edad</th>
                      <th class="th-sm">Laboratorio</th>
                      <th class="th-sm">Teléfono</th>
                      <th class="th-sm">Estado</th>
                      <th class="th-sm">Estudio</th>
                      <th class="th-sm">Estatus</th>
                      <th class="th-sm">Creado por</th>
                    </thead>
                    <tbody>
                    	<?php while ($pcs=$pacientes->fetch_object()): ?>
						            <tr>
							            <td><a href="<?=base_url?>?controller=PacienteController&action=detalle&id=<?=$pcs->idpaciente?>"><?=$pcs->nombre?></a></td>
                          <td><?=$pcs->sexo?></td>
                          <td><?=$pcs->edad?></td>
							            <td><?=$pcs->laboratorio?></td>
							            <td><?=$pcs->telefono?></td>
                          <td><?=$pcs->estado?></td>
                          <td><?=$pcs->cliente?></td>
							            <td>
							            	<?php if($pcs->estatus == 1): ?>
						            			<span class="label bg-orange">Por acudir</span>
						            		<?php elseif ($pcs->estatus == 2): ?>
						                	<span class="label bg-green">Finalizado</span>
                            <?php elseif ($pcs->estatus == 3): ?>
                              <span class="label bg-red">Cancelado</span>
                            <?php else: ?>
                              <span class="label bg-red">Desactivado</span>
							              <?php endif; ?>
							            </td>
                          <td><?=$pcs->nombre_usuario?></td>
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

<script type="text/javascript" src="<?=base_url?>views/scripts/paciente/gestion.js"></script>
<?php require_once __dir__.'../../layouts/footer.php'; ?>