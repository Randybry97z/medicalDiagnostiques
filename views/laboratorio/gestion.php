<?php require_once __dir__.'../../layouts/header.php'; ?>

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                    <h1 class="box-title">Laboratorio 
					<a class="btn btn-success" id="btnagregar" href="<?=base_url?>?controller=LaboratorioController&action=registro" style="display:<?=Utils::isAdmin() || Utils::isCoordinador() ? 'block' : 'none';?>"><i class="fa fa-plus-circle"></i> Agregar</a></h1>
                  <div class="box-tools pull-right">
                  </div>
              </div>
              <!-- /.box-header -->
              <!-- centro -->
              <div class="panel-body table-responsive" id="listadoregistros">
                  <table id="tbllistado" class="table table-striped table-bordered" style="width:100%;">
                    <thead>
                      <th style="width: 10%">Nombre</th>
                      <th style="width: 10%">Estado</th>
                      <th style="width: 10%">Ciudad</th>
                      <th style="width: 10%">Correo</th>
                      <th style="width: 10%">Teléfono</th>
                      <th style="width: 10%">Usuario Asignado</th>
                    </thead>
                    <tbody>
                    	<?php while ($labs=$laboratorios->fetch_object()): ?>
						            <tr>
							            <td style="width: 10%"><a href="<?=base_url?>?controller=LaboratorioController&action=detalle&id=<?=$labs->idlaboratorio?>"><?=$labs->nombre?></a></td>
                          <td style="width: 10%"><?=$labs->estado?></td>
							            <td style="width: 10%"><?=$labs->ciudad?></td>
							            <td style="width: 2%"><a href="mailto:<?=$labs->correo?>"><?=$labs->correo?></a></td>
                          <td style="width: 10%"><?=$labs->telefono?></td>
                          <td style="width: 10%"><a class="h5" href="<?=base_url?>Usuario/perfil&id=<?=$labs->idusuario?>"><?=$labs->usuario_nombre?></a></td>
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

<script type="text/javascript" src="<?=base_url?>views/scripts/laboratorio/generate_filters.js"></script>
<?php require_once __dir__.'../../layouts/footer.php'; ?>