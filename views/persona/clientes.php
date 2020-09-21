<?php require_once __dir__.'../../layouts/header.php'; ?>

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h1 class="box-title">clientes <a class="btn btn-success" id="btnagregar"
                                href="<?=base_url?>?controller=PersonaController&action=registro"><i class="fa fa-plus-circle"></i> Agregar</a></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered" style="width:100%;">
                            <thead>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th>Contacto 1</th>
                                <th>Contacto 2</th>
                                <th>Estatus</th>
                            </thead>
                            <tbody>
                                <?php while ($cliente=$clientes->fetch_object()): ?>
                                <tr>
                                    <td><a
                                            href="<?=base_url?>?controller=PersonaController&action=detalle&id=<?=$cliente->idpersona?>"><?=$cliente->nombre?></a>
                                    </td>
                                    <td><?=$cliente->correo?></td>
                                    <td><?=$cliente->telefono?></td>
                                    <td>
                                        <?php if($cliente->contacto): ?>
                                        <span class="text-dark"><?=$cliente->contacto?></span>
                                        <?php else: ?>
                                        <div class="text-muted">Sin contacto</div>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($cliente->contacto_2): ?>
                                        <span class="text-dark"><?=$cliente->contacto_2?></span>
                                        <?php else: ?>
                                        <div class="text-muted">Sin contacto</div>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($cliente->estatus): ?>
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