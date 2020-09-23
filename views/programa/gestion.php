<?php require_once __dir__.'../../layouts/header.php'; ?>
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                    <h1 class="box-title">Programas <a class="btn btn-success" id="btnagregar" href="<?=base_url?>?controller=ProgramaController&action=registro"><i class="fa fa-plus-circle"></i> Agregar</a></h1>
                  <div class="box-tools pull-right">
                  </div>
              </div>
              <!-- /.box-header -->
              <!-- centro -->
              <div class="panel-body table-responsive" id="listadoregistros">
                  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                      <th class="th-sm">Nombre</th>
                      <th class="th-sm">Estatus</th>
                      <th class="th-sm">Fecha de creación</th>
                    </thead>
                    <tbody>
                      <?php while($programa=$progs->fetch_object()): ?>
                        <tr>
                          <td><a href="<?=base_url?>?controller=ProgramaController&action=detalle&id=<?=$programa->idprograma?>"><?=$programa->nombre?></a></td>
                          <td>
                            <?php if($programa->estatus): ?>
                              <span class="label bg-green">Activado</span>
                            <?php else: ?>
                              <span class="label bg-red">Desactivado</span>
                            <?php endif; ?>
                          </td>
                          <td><?=$programa->fecha_creacion?></td>
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

<script type="text/javascript" src="<?=base_url?>views/scripts/programa/table.js"></script>
<?php require_once __dir__.'../../layouts/footer.php'; ?>