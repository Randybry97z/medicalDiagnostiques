<?php require_once __dir__.'../../layouts/header.php'; ?>

<!--Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="panel-body" id="formularioregistros">
            <div class="box">
                <div class="box-header h3">
                    <div class="row">
                        <div class="col-xs-6 col-md-4">
                            <span class="h1 font-weight-bold"><?=$pac->nombre?></span>
                        </div>
                        <div class="col-xs-6 col-md-4">
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <p class="m-2" id="btnEditar"><button class="btn btn-info" onclick="edit()"
                                    id="btnEditar"><i class="fa fa-plus-circle"></i> Editar</button></p>
                            <p class="m-2" id="btnCancelar"><button class="btn btn-danger" onclick="cancelar()"
                                    id="btnCancelar"><i class="fa fa-plus-circle"></i> Cancelar</button></p>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <form action="<?=base_url?>?controller=PacienteController&action=save&id=<?=$pac->idpaciente?>" name="formulario" id="formulario"
                        method="POST" enctype="multipart/form-data">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <label>Cliente</label>
                            <input type="hidden" name="idpaciente" id="idpaciente">
                            <input type="hidden" name="creado_por" id="creado_por"
                                value="<?=$_SESSION['identity']->idusuario?>">
                            <?php $clientes = Utils::showClientes();?>
                            <select class="form-control" data-live-search="true" name="estudio" id="estudio">
                                <?php while($cs = $clientes->fetch_object()): ?>
                                <option value="<?=$cs->idpersona?>"
                                    <?=isset($cs) && is_object($cs) && $cs->idpersona == $pac->estudio ? 'selected' : '';?>>
                                    <?=$cs->nombre?></option>
                                <?php endwhile ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Programa</label>
                            <?php $programas = Utils::showProgramas();?>
                            <select class="form-control" data-live-search="true" name="idprograma" id="idprograma">
                                <?php while($prog = $programas->fetch_object()): ?>
                                <option value="<?=$prog->idprograma?>"
                                    <?=isset($prog) && is_object($prog) && $prog->idprograma == $pac->idprograma ? 'selected' : '';?>>
                                    <?=$prog->nombre?></option>
                                <?php endwhile ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Folio ID</label>
                            <input type="text" class="form-control" name="folio_id" id="folio_id" placeholder="Folio"
                                value="<?=$pac->folio_id?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Folio</label>
                            <input type="text" class="form-control" name="folio" id="folio" placeholder="Folio"
                                value="<?=$pac->folio?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label># de activación farma</label>
                            <input type="text" class="form-control" name="activacion_farma" id="activacion_farma"
                                placeholder="Número de activación de Farma" value="<?=$pac->activacion_farma?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre de representante</label>
                            <input type="text" class="form-control" name="activacion_representante"
                                id="activacion_representante" placeholder="Número de activación de Representante"
                                value="<?=$pac->activacion_representante?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre px</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100"
                                placeholder="Nombre de PX" required value="<?=$pac->nombre?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre de clínica</label>
                            <input type="text" class="form-control" name="clinica" id="clinica" maxlength="100"
                                placeholder="Nombre de clínica" required value="<?=$pac->clinica?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Teléfono fijo</label>
                            <input type="text" class="form-control" name="telefono" id="telefono"
                                placeholder="Teléfono fijo" value="<?=$pac->telefono?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Teléfono celular</label>
                            <input type="text" class="form-control" name="movil" id="movil"
                                placeholder="Teléfono celular" value="<?=$pac->movil?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Estado</label>
                            <select class="form-control" name="estado" id="estado" value="<?=$pac->estado?>">
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
                                <option value="Estado de Mexico">Estado de México</option>
                                <option value="Michoacan">Michoacán</option>
                                <option value="Morelos">Morelos</option>
                                <option value="Nayarit">Nayarit</option>
                                <option value="Nuevo Leon">Nuevo León</option>
                                <option value="Oaxaca">Oaxaca</option>
                                <option value="Puebla">Puebla</option>
                                <option value="Queretaro">Querétaro</option>
                                <option value="Quintana Roo">Quintana Roo</option>
                                <option value="San Luis Potosi">San Luis Potosí</option>
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
                            <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad"
                                required value="<?=$pac->ciudad?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Dirección</label>
                            <input type="text" class="form-control" name="direccion" id="direccion"
                                placeholder="Dirección" required value="<?=$pac->direccion?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Sexo</label>
                            <input type="text" class="form-control" name="sexo" id="sexo" placeholder="Sexo" required
                                value="<?=$pac->sexo?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Edad</label>
                            <input type="text" class="form-control" name="edad" id="edad" placeholder="Edad" required
                                value="<?=$pac->edad?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Fecha de nacimiento</label>
                            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento"
                                placeholder="Fecha de nacimiento" required value="<?=$pac->fecha_nacimiento?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Laboratorio:</label>
                            <?php $laboratorios = Utils::showLaboratorios();?>
                            <select class="form-control" data-live-search="true" name="idlaboratorio"
                                id="idlaboratorio">
                                <?php while($lab = $laboratorios->fetch_object()): ?>
                                <option value="<?=$lab->idlaboratorio?>"
                                    <?=isset($lab) && is_object($lab) && $lab->idlaboratorio == $pac->idlaboratorio ? 'selected' : '';?>>
                                    <?=$lab->nombre?></option>
                                <?php endwhile ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Fecha de captura</label>
                            <input type="date" class="form-control" name="fecha_captura" id="fecha_captura"
                                placeholder="Fecha de captura" value="<?=$pac->fecha_captura?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Fecha de cita</label>
                            <input type="date" class="form-control" name="fecha_cita" id="fecha_cita"
                                placeholder="Fecha de cita" required value="<?=$pac->fecha_cita?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Hora de cita</label>
                            <input type="time" class="form-control" name="hora_cita" id="hora_cita" placeholder="0:00"
                                value="<?=$pac->hora_cita?>" required>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Fecha de confirmación de cita</label>
                            <input type="text" class="form-control" name="fecha_confirmacion" id="fecha_confirmacion"
                                placeholder="Fecha de confirmación de cita" value="<?=$pac->fecha_confirmacion?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Tipo de cupón</label>
                            <input type="text" class="form-control" name="tipo_cupon" id="tipo_cupon"
                                placeholder="Tipo de cupón" value="<?=$pac->tipo_cupon?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Estatus</label>
                            <input class="form-control" type="text" name="estatus_text" id="estatus_text" value="<?php if($pac->estatus == 0){
                                echo 'Por agendar';
                                }elseif ($pac->estatus == 1){
                                    echo 'Por acudir';
                                }elseif ($pac->estatus == 2){
                                    echo 'Finalizado';
                                }else{
                                    echo 'Cancelado';
                                } ?>" disabled="true">
                            <select class="form-control" name="estatus" id="estatus" style="display: none"
                                onchange="showCancelacion()">
                                <option value="0">Por agendar</option>
                                <option value="1">Por acudir</option>
                                <option value="2">Finalizado</option>
                                <option value="3">Cancelado</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="cancelacion_div"
                            hidden="true">
                            <label>Motivo cancelación</label>
                            <textarea class="form-control" name="motivo_cancelacion" id="motivo_cancelacion"
                                placeholder="Motivo de cancelacion"><?=$pac->motivo_cancelacion?></textarea>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Médico Tratante</label>
                            <?php $medicos_tratantes = Utils::showMedicosTratantes();?>
                            <select class="form-control" data-live-search="true" name="medico_tratante"
                                id="medico_tratante">
                                <?php while($medt = $medicos_tratantes->fetch_object()): ?>
                                <option value="<?=$medt->idusuario?>"
                                    <?=isset($medt) && is_object($medt) && $medt->idusuario == $pac->medico_tratante ? 'selected' : '';?>>
                                    <?=$medt->nombre?></option>
									
                            <?php endwhile; ?>
                            </select>
                        </div>
						
						<div class="form-group form-group col-lg-6 col-md-6 col-sm-6 col-xs-12" id="correo_medico"
                            disabled="true">
                            <label>Correo del médico tratante</label>
                            <?php $medico = Utils::showEmail($pac->medico_tratante);?>
                            <?php while($m = $medico->fetch_object()): ?>
                            <?php if($m->correo): ?>
                            <div class="container form-control"><a href="mailto:<?=$m->correo?>"><?=$m->correo?></a>
                            </div>
                            <?php else: ?>
                            <div class="container form-control">Sin correo electrónico</div>
                            <?php endif; ?>
							<?php endwhile; ?>
                        </div>
												

						
						<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Médico Asociado</label>
                            <?php $medicos_asociados = Utils::showMedicosAsociados();?>
                            <select class="form-control" data-live-search="true" name="medico_asociado"
                                id="medico_asociado">
                                <?php while($meda = $medicos_asociados->fetch_object()): ?>
                                <option value="<?=$meda->idusuario?>"
                                    <?=isset($meda) && is_object($meda) && $meda->idusuario == $pac->medico_asociado ? 'selected' : '';?>>
                                    <?=$meda->nombre?></option>
								
                            <?php endwhile; ?>
                            </select>
                        </div>
						<div class="form-group form-group col-lg-6 col-md-6 col-sm-6 col-xs-12" id="correo_medico"
                            disabled="true">
                            <label>Correo del médico asociado</label>
                            <?php $medico = Utils::showEmail($pac->medico_asociado);?>
                            <?php while($m = $medico->fetch_object()): ?>
                            <?php if($m->correo != "porasignar@porasignar.com"): ?>
                            <div class="container form-control"><a href="mailto:<?=$m->correo?>"><?=$m->correo?></a>
                            </div>
                            <?php else: ?>
                            <div class="container form-control">Sin correo electrónico</div>
                            <?php endif; ?>
                            <?php endwhile ?>
                        </div>		
                        
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label># Factura asociado</label>
                            <input type="text" class="form-control" name="factura_asociado" id="factura_asociado"
                                placeholder="Factura de asociado" value="<?=$pac->factura_asociado?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label># Factura MDT</label>
                            <input type="text" class="form-control" name="factura_mdt" id="factura_mdt"
                                placeholder="Factura de MDT" value="<?=$pac->factura_mdt?>">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Pagado en Factura</label>
                            <select class="form-control" name="pago_factura" id="pago_factura">
                                <option value="<?=($pac->pago_factura) ? $pac->pago_factura : 'empty'?>"
                                    selected="true">
                                    <?php if($pac->pago_factura == '0'){
                                        echo "No";
                                    }elseif($pac->pago_factura == '1'){
                                        echo "Sí";
                                    }else{
                                        echo "Seleccione una opción";
                                    }?></option>
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Fecha entrega</label>
                            <input type="date" class="form-control" name="fecha_entrega" id="fecha_entrega"
                                placeholder="Fecha de entrega" value="<?=$pac->fecha_entrega?>" required>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Observaciones</label>
                            <textarea class="form-control" name="observaciones" id="observaciones"
                                placeholder="Observaciones" required><?=$pac->observaciones?></textarea>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Documentos</label>
                            <div class="row">
                                <p class="col-md-6"><input type="checkbox" name="cupon_original" id="cupon_original"
                                        value="<?=$pac->cupon_original?>"
                                        <?=$pac->cupon_original == 1 ? 'checked' : '';?>>
                                    Cupón Original</p>
                                <p class="col-md-6"><input type="checkbox" name="cupon_copia" id="cupon_copia"
                                        value="<?=$pac->cupon_copia?>" <?=$pac->cupon_copia == 1 ? 'checked' : '';?>>
                                    Cupón
                                    Copia</p>
                                <p class="col-md-6"><input type="checkbox" name="consentimiento_original"
                                        id="consentimiento_original" value="<?=$pac->consentimiento_original?>"
                                        <?=$pac->consentimiento_original == 1 ? 'checked' : '';?>>
                                    Consentimiento
                                    Informado Original</p>
                                <p class="col-md-6"><input type="checkbox" name="consentimiento_copia"
                                        id="consentimiento_copia" value="<?=$pac->consentimiento_copia?>"
                                        <?=$pac->consentimiento_copia == 1 ? 'checked' : '';?>> Consentimiento Informado
                                    Copia</p>
                                <p class="col-md-6"><input type="checkbox" name="resultado_original"
                                        id="resultado_original" value="<?=$pac->resultado_original?>"
                                        <?=$pac->resultado_original == 1 ? 'checked' : '';?>> Resultado Original</p>
                                <p class="col-md-6"><input type="checkbox" name="resultado_copia" id="resultado_copia"
                                        value="<?=$pac->resultado_copia?>"
                                        <?=$pac->resultado_copia == 1 ? 'checked' : '';?>>
                                    Resultado Copia</p>
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Tipo de estudio</label>
                            <select class="form-control" name="tipo_estudio" id="tipo_estudio">
                                <option value="">----</option>
                                <option value="PSA" <?= $pac->tipo_estudio == "PSA" ? 'selected' : ''?>>PSA</option>
                                <option value="MASEI" <?= $pac->tipo_estudio == "MASEI" ? 'selected' : ''?>>MASEI
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Resultados</label>
                            <div class="container" id="div_resultados"><a
                                    href="<?=base_url.'uploads/resultados/'.$pac->resultados?>"
                                    target="_blank"><?=($pac->resultados) ? $pac->resultados : 'Sin resultados' ?></a>
                            </div>
                            <!--Crear input oculto cuando se edite se oculta el div y se puesta el input-->
                            <input type="file" class="form-control" name="resultados" id="resultados" hidden="true">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Fecha de Envío de Resultados</label>
                            <input type="date" name="fecha_resultados" id="fecha_resultados" class="form-control"
                                value="<?=$pac->fecha_resultados?>" required>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Fecha de creación:</label>
                            <div class="container">
                                <p><?=$pac->fecha_creacion;?></p>
                            </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>
                                Guardar</button>
                            <button type="button" class="btn btn-success" id="btnEnviar"><i class="fa fa-save"></i>
                                Enviar Resultados</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->

<script type="text/javascript" src="<?=base_url?>views/scripts/paciente/detalle.js"></script>
<?php require_once __dir__.'../../layouts/footer.php'; ?>