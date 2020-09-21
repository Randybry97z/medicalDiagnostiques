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
                        <?php if(isset($lab)):?>
                        <div class="row">
                            <div class="col-xs-6 col-md-6">
                                <p class="h3 font-weight-bold" style="margin: 2rem"><?=$lab->nombre?> </p>
                            </div>
                            <div class="col-xs-6 col-md-2">
                            </div>
                            <div class="col-xs-6 col-md-4">
                                <p style="margin: 2rem"><button class="btn btn-info" onclick="edit()" id="btnEditar"><i
                                            class="fa fa-plus-circle"></i> Editar</button></p>
                                <p style="margin: 2rem;"><button class="btn btn-danger" onclick="cancelar()"
                                        id="btnCancelar"><i class="fa fa-plus-circle"></i>
                                        Cancelar</button></p>
                            </div>
                        </div>
                        <?php else: ?>
                        <h1 class="h1">El laboratorio no existe</h1>
                        <?php endif; ?>
                    </div>
                    <div class="panel-body" id="formularioregistros">
                        <form action="<?=base_url?>Laboratorio/save&id=<?=$lab->idlaboratorio?>" name="formulario"
                            id="formulario" method="POST">
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Nombre</label>
                                <input type="hidden" name="idlaboratorio" id="idlaboratorio">
                                <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100"
                                    placeholder="Nombre" value="<?=$lab->nombre?>" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Estatus</label>
                                <select class="form-control" name="estatus" id="estatus">
                                    <option value="<?=($lab->estatus) ? $lab->estatus : ''?>">
                                        <?=($lab->estatus == 1) ? 'Activo' : 'Inactivo'?></option>
                                    <option value="0">Activo</option>
                                    <option value="1">Inactivo</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Estado</label>
                                <select class="form-control" name="estado" id="estado">
                                    <option selected="true" value="<?=$lab->estado?>"><?=$lab->estado?></option>
                                    <option value="Aguascalientes">Aguascalientes</option>
                                    <option value="Baja California">Baja California</option>
                                    <option value="Baja California Sur">Baja California Sur</option>
                                    <option value="Campeche">Campeche</option>
                                    <option value="Coahuila">Coahuila</option>
                                    <option value="CDMX">CDMX</option>
                                    <option value="Colima">Colima</option>
                                    <option value="Chiapas">Chiapas</option>
                                    <option value="Chihuahua">Chihuahua</option>
                                    <option value="Durango">Durango</option>
                                    <option value="Guanajuato">Guanajuato</option>
                                    <option value="Guerrero">Guerrero</option>
                                    <option value="Hidalgo">Hidalgo</option>
                                    <option value="Jalisco">Jalisco</option>
                                    <option value="Estado de Mexico">Estado de Mexico</option>
                                    <option value="Michoacan">Michoacan</option>
                                    <option value="Morelos">Morelos</option>
                                    <option value="Nayarit">Nayarit</option>
                                    <option value="Nuevo Leon">Nuevo León</option>
                                    <option value="Oaxaca">Oaxaca</option>
                                    <option value="Puebla">Puebla</option>
                                    <option value="Queretaro">Queretaro</option>
                                    <option value="Quintana Roo">Quintana Roo</option>
                                    <option value="San Luis Potosi">San Luis Potosi</option>
                                    <option value="Sinaloa">Sinaloa</option>
                                    <option value="Sonora">Sonora</option>
                                    <option value="Tabasco">Tabasco</option>
                                    <option value="Tamaulipas">Tamaulipas</option>
                                    <option value="Tlaxcala">Tlaxcala</option>
                                    <option value="Veracruz">Veracruz</option>
                                    <option value="Yucatan">Yucatán</option>
                                    <option value="Zacatecas">Zacatecas</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Ciudad</label>
                                <input type="text" class="form-control" name="ciudad" id="ciudad" maxlength="100"
                                    placeholder="Ciudad" value="<?=($lab->ciudad) ? $lab->ciudad : 'Sin ciudad' ?>" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Dirección</label>
                                <textarea class="form-control" name="direccion" id="direccion" maxlength="100"
                                    placeholder="Dirección" required><?=($lab->direccion) ? $lab->direccion : 'Sin dirección' ?></textarea>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Contacto</label>
                                <input type="text" class="form-control" name="contacto" id="contacto"
                                    placeholder="Contacto" value="<?=($lab->contacto) ? $lab->contacto : 'Sin contacto' ?>" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Teléfono fijo</label>
                                <input type="text" class="form-control" name="telefono" id="telefono"
                                    placeholder="Teléfono" value="<?=($lab->telefono) ? $lab->telefono : 'SN'?>" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Teléfono celular</label>
                                <input type="text" class="form-control" name="movil" id="movil"
                                    placeholder="Teléfono Celular" value="<?=($lab->movil) ? $lab->movil : 'SN' ?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Correo</label>
                                <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo"
                                    value="<?=($lab->correo) ? $lab->correo : ''?>" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Correo adicional</label>
                                <input type="email" class="form-control" name="correo_2" id="correo_2"
                                    placeholder="Correo adicional" value="<?=($lab->correo_2) ? $lab->correo_2 : ''?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Estudios</label>
                                <input type="text" class="form-control" name="estudio" id="estudio"
                                    placeholder="Estudios que realiza"
                                    value="<?=($lab->estudio) ? $lab->estudio : ''?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>Precio por estudio</label>
                              <input type="number" class="form-control" name="precio" id="precio" step="0.01" value="<?=$lab->precio_estudio?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Horario de atención</label>
                                <input type="text" class="form-control" name="atencion" id="atencion"
                                    placeholder="Horario de atención"
                                    value="<?=($lab->atencion) ? $lab->atencion : ''?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Nombre clínica</label>
                                <input type="text" class="form-control" name="clinica" id="clinica"
                                    placeholder="Nombre de la clínica"
                                    value="<?=($lab->clinica) ? $lab->clinica : 'Nombre de clinica'?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Razón social</label>
                                <input type="text" class="form-control" name="razon_social" id="razon_social"
                                    placeholder="Razón social"
                                    value="<?=($lab->razon_social) ? $lab->razon_social : 'Razón social' ?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>Nombre de banco</label>
                              <input type="text" class="form-control" name="nombre_banco" id="nombre_banco" placeholder="Nombre del banco" value="<?=$lab->nombre_banco?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Número de cuenta bancaria</label>
                                <input type="number" class="form-control" name="num_cuenta" id="num_cuenta"
                                    placeholder="Número de cuenta bancaria"
                                    value="<?=($lab->num_cuenta) ? $lab->num_cuenta : 0 ?>">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>¿Cuenta con convenio?</label>
                                <select class="form-control" name="convenio" id="convenio">
                                    <option value="0">Sí</option>
                                    <option value="1">No</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label>Observaciones</label>
                                <textarea class="form-control" name="observaciones" id="observaciones"><?=($lab->observaciones) ? $lab->observaciones : 'Sin observaciones '?></textarea>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Creado por:</label>
                                <div class="container">
                                    <a
                                        href="<?=base_url?>Usuario/perfil&id=<?=$lab->idusuario?>"><?=$lab->usuario_nombre;?></a>
                                </div>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Fecha de creación:</label>
                                <div class="container">
                                    <p><?=($lab->fecha_creacion) ? $lab->fecha_creacion : 'NULL'?></p>
                                </div>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>
                                    Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>
<script type="text/javascript" src="<?=base_url?>views/scripts/laboratorio/detalle.js"></script>
<?php require_once __dir__.'../../layouts/footer.php'; ?>