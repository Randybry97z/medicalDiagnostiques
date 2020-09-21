<?php require_once __dir__.'../../layouts/header.php'; ?>

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <div class="row">
                  <div class="col-xs-6 col-md-4 text-center">
                    <span class="h1 font-weight-bold">Permisos </span>
                    <span class="text-muted h4"></span>
                  </div>
                  <div class="col-xs-6 col-md-4">
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <!-- <p class="m-2 text-center"><a href="Permiso/crear" class="btn btn-lg btn-info" id="btnAgregar"><i class="fa fa-plus-circle"></i> Agregar</a></p> -->
                  </div>
                </div>
              </div>
              <!-- /.box-header -->
              <!-- centro -->
              <div class="panel-body table-responsive" id="listadoregistros">
                  <table id="tbllistado" class="table table-striped table-bordered" style="width:100%;">
                    <thead>
                      <th class="col-md-6">Nombre</th>
                      <th class="col-md-4 text-center">Acciones</th>
                    </thead>
                    <tbody>
                    	<?php while ($pm=$permisos->fetch_object()): ?>
						            <tr>
							            <td class="col-md-6 font-weight-bold h4"><?=$pm->nombre?></td>
                          <td class="col-md-6">
                            <span class="col-md-4"></span>
                            <a class="btn btn-success col-md-4" id="" href="<?=base_url?>?controller=PermisoController&action=detail&id=<?=$pm->idpermiso?>"><i class="fa fa-plus-circle"></i>  Detalle</a>
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

<?php require_once __dir__.'../../layouts/footer.php'; ?>