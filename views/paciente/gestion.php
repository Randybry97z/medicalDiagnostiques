<?php require_once __dir__.'../../layouts/header.php'; ?>

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h1 class="box-title">Pacientes<a class="btn btn-success" id="btnagregar"
                                href="<?=base_url?>?controller=PacienteController&action=registro&idcliente=<?=$_GET['idcliente']?>&idprograma=<?=$_GET['idprograma']?>"><i
                                    class="fa fa-plus-circle"></i> Agregar</a></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered" style="width:100%;">
                            <thead>
                                <th class="th-sm">Nombre</th>
								<th class="th-sm">Fecha de Captura</th>
                                <th class="th-sm">Estatus</th>
						        <th class="th-sm">Cliente</th>
								<th class="th-sm">Médico Asociado</th>
								<th class="th-sm" style="display:none;">Correo Médico Tratante</th>
								<th class="th-sm">Médico Tratante</th>
								<th class="th-sm" style="display:none;">Correo Médico Asociado</th>
								<th class="th-sm" style="display:none;">Folio ID</th>
								<th class="th-sm" style="display:none;">Folio</th>
								<th class="th-sm" style="display:none;"># Activación de farma</th>
								<th class="th-sm" style="display:none;">Nombre de representante</th>
								<th class="th-sm" style="display:none;">Nombre PX</th>
								<th class="th-sm" style="display:none;">Nombre de clínica</th>
								<th class="th-sm" style="display:none;">Teléfono fijo</th>
								<th class="th-sm" style="display:none;">Teléfono celular</th>
								<th class="th-sm" style="display:none;">Estado</th>
								<th class="th-sm" style="display:none;">Ciudad</th>
								<th class="th-sm" style="display:none;">Dirección</th>
								<th class="th-sm" style="display:none;">Sexo</th>
								<th class="th-sm" style="display:none;">Edad</th>
								<th class="th-sm" style="display:none;">Fecha de Nacimiento</th>
								<th class="th-sm" style="display:none;">Laboratorio</th>
								<th class="th-sm" style="display:none;">Fecha de Cita</th>
								<th class="th-sm" style="display:none;">Hora de cita</th>
								<th class="th-sm" style="display:none;">Confirmación de Cita</th>
								<th class="th-sm" style="display:none;">Tipo de Cupón</th>
								<th class="th-sm" style="display:none;">Motivo de Cancelación</th>
								<th class="th-sm" style="display:none;"># Factura Asociado</th>
								<th class="th-sm" style="display:none;"># Factura MDT</th>
								<th class="th-sm" style="display:none;">Pagado en Factura</th>
								<th class="th-sm" style="display:none;">Fecha Entrega</th>
								<th class="th-sm" style="display:none;">Observaciones</th>
								<th class="th-sm" style="display:none;">Tipo de Estudio</th>
								<th class="th-sm" style="display:none;">Resultados</th>
								<th class="th-sm" style="display:none;">Fecha de envío de resultados</th>
								<th class="th-sm" style="display:none;">Cupón Original</th>
								<th class="th-sm" style="display:none;">Cupón Copia</th>
								<th class="th-sm" style="display:none;">Consentimiento Informado Original</th>
								<th class="th-sm" style="display:none;">Consentimiento Informado Copia</th>
								<th class="th-sm" style="display:none;">Resultado Original</th>
								<th class="th-sm" style="display:none;">Resultado Copia</th>
								<th class="th-sm">Creado Por</th>
								
								
                            </thead>
                            <tbody>
                                <?php while ($pcs=$pacientes->fetch_object()): ?>
                                <tr>
                                    <td><a
                                            href="<?=base_url?>?controller=PacienteController&action=detalle&id=<?=$pcs->idpaciente?>"><?=$pcs->nombre?></a>
                                    </td>
									<td><?=$pcs->fecha_captura?></td>
									<td>
                                        <?php if ($pcs->estatus == 0): ?>
                                        <span class="label bg-green">Por agendar</span>
                                        <?php elseif ($pcs->estatus == 1): ?>
                                        <span class="label bg-orange">Por acudir</span>
                                        <?php elseif ($pcs->estatus == 2): ?>
                                        <span class="label bg-blue">Finalizado</span>
                                        <?php elseif ($pcs->estatus == 3): ?>
                                        <span class="label bg-red">Cancelado</span>
                                        <?php else: ?>
                                        <span class="label bg-red">Desactivado</span>
                                        <?php endif; ?>
                                    </td>
									<td><?=$pcs->cliente?></td>
									<td><?=$pcs->medico_asociado?></td>
									<td style="display:none;"><?=$pcs->asociado_correo?></td>
									<td><?=$pcs->medico_tratante?></td>
									<td style="display:none;"><?=$pcs->tratante_correo?></td>
									<td style="display:none;"><?=$pcs->folio_id?></td>
									<td style="display:none;"><?=$pcs->folio?></td>
									<td style="display:none;"><?=$pcs->activacion_farma?></td>
									<td style="display:none;"><?=$pcs->activacion_representante?></td>
									<td style="display:none;"><?=$pcs->nombre?></td>
									<td style="display:none;"><?=$pcs->clinica?></td>
									<td style="display:none;"><?=$pcs->telefono?></td>
									<td style="display:none;"><?=$pcs->movil?></td>
									<td style="display:none;"><?=$pcs->estado?></td>
									<td style="display:none;"><?=$pcs->ciudad?></td>
									<td style="display:none;"><?=$pcs->direccion?></td>
									
                                   <td style="display:none;">
                                        <?php if($pcs->sexo == 'M' || $pcs->sexo == 'Masculino' ): ?>
                                            <span>Masculino</span>
                                        <?php elseif ($pcs->sexo == 'F' || $pcs->sexo == 'Femenino'): ?>
                                            <span>Femenino</span>
                                        <?php else: ?>
                                            <span>SN</span>
                                        <?php endif; ?>
                                    </td>
									
									<td style="display:none;"><?=$pcs->edad?></td>
									<td style="display:none;"><?=$pcs->fecha_nacimiento?></td>
									<td style="display:none;"><?=$pcs->laboratorio?></td>
									<td style="display:none;"><?=$pcs->fecha_cita?></td>
									<td style="display:none;"><?=$pcs->hora_cita?></td>
									<td style="display:none;"><?=$pcs->fecha_confirmacion?></td>
									<td style="display:none;"><?=$pcs->tipo_cupon?></td>
									<td style="display:none;"><?=$pcs->motivo_cancelacion?></td>
									
									<td style="display:none;"><?=$pcs->factura_asociado?></td>
									<td style="display:none;"><?=$pcs->factura_mdt?></td>
									<td style="display:none;"><?=$pcs->pago_factura?></td>
									<td style="display:none;"><?=$pcs->fecha_entrega?></td>
									<td style="display:none;"><?=$pcs->observaciones?></td>
									<td style="display:none;"><?=$pcs->tipo_estudio?></td>
									<td style="display:none;"><?=$pcs->resultados?></td>
									<td style="display:none;"><?=$pcs->fecha_resultados?></td>
									<td style="display:none;"><?=$pcs->cupon_original == '0' ? 'No' : 'Si';?></td>
									<td style="display:none;"><?=$pcs->cupon_copia == '0' ? 'No' : 'Si';?></td>
									<td style="display:none;"><?=$pcs->consentimiento_original == '0' ? 'No' : 'Si';?></td>
									<td style="display:none;"><?=$pcs->consentimiento_copia == '0' ? 'No' : 'Si';?></td>
									<td style="display:none;"><?=$pcs->resultado_original == '0' ? 'No' : 'Si';?></td>
									<td style="display:none;"><?=$pcs->resultado_copia == '0' ? 'No' : 'Si';?></td>
									
									
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