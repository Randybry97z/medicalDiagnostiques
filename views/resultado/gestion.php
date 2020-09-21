<?php require_once __dir__.'../../layouts/header.php'; ?>

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h1 class="box-title">Resultados<a class="btn btn-success" id="btnagregar"
                                href="<?=base_url?>?controller=ResultadoController&action=registro"><i class="fa fa-plus-circle"></i> Agregar</a>
                        </h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                                <th class="th-sm">ID</th>
                                <th class="th-sm">Paciente</th>
                                <th class="th-sm">Programa</th>
                                <th class="th-sm">Médico</th>
                                <th class="th-sm">Cliente</th>
                                <th class="th-sm">Tipo estudio</th>
                                <th style="display:none"></th>
                            </thead>
                            <tbody>
                                <?php while ($res=$resultados->fetch_object()): ?>
                                <tr>
                                    <td><a
                                            href="<?=base_url?>?controller=ResultadoController&action=detalle&id=<?=$res->idresultado?>"><?=$res->idresultado?></a>
                                    </td>
                                    <td><?=$res->nombre_paciente?></td>
                                    <td><?=$res->nombre_programa?></td>
                                    <td><?=$res->nombre_medico?></td>
                                    <td><?=$res->nombre_estudio?></td>
                                    <td><?=$res->tipo_estudio?></td>
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

<script type="text/javascript" src="<?=base_url?>views/scripts/resultado/filters.js"></script>
<?php require_once __dir__.'../../layouts/footer.php'; ?>