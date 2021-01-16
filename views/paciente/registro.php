<?php require_once __dir__.'../../layouts/header.php'; ?>

<!--Contenido-->
<!-- Content Wrapper. Contains page content -->
<style>
input:invalid:required {
 border: 2px dashed red;
}

</style>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="panel-body" id="formularioregistros">
            <div class="box">
                <div class="row">
                    <div class="col-xs-6 col-md-4">
                        <p class="h1 font-weight-bold" style="margin: 2rem;">Registrar paciente</p>
                    </div>
                    <div class="col-xs-6 col-md-4">
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <button style="margin: 2rem" class="btn btn-danger" onclick="cancelar()" id="btnCancelar"><i
                                class="fa fa-plus-circle"></i> Cancelar</button>
                    </div>
                </div>
                <div class="box-body">
                    <form action="<?=base_url?>?controller=PacienteController&action=save" name="formulario" id="formulario" method="POST"
                        enctype="multipart/form-data">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            <label>Estudio</label>
                            <input type="hidden" name="idpaciente" id="idpaciente">
                            <input type="hidden" name="creado_por" id="creado_por"
                                value="<?=$_SESSION['identity']->idusuario?>">
								
                            <?php $programas = Utils::showPrograma($_GET['idprograma']);?>
                            <select class="form-control" data-live-search="true" name="idprograma" id="idprograma">
                                <?php// while($prog = $programas->fetch_object()): ?>
                                <option value="<?=$programas->idprograma?>"><?=$programas->nombre?></option>
                                <?php// endwhile ?>
                            </select>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Cliente</label>
                            <?php $cliente = Utils::showCliente($_GET['idcliente']);?>
                            <input type="text" class="form-control" name="estudio" id="estudio" placeholder="Cliente"
                                value="<?=$cliente->idpersona?>" style="display: none;">
                            <input type="text" class="form-control" name="estudio_nombre" id="estudio_nombre"
                                placeholder="Cliente" value="<?=$cliente->nombre?>" disabled="true">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Folio ID</label>
                            <input type="text" class="form-control" name="folio_id" id="folio_id" placeholder="Folio" required>
							<small class="text-muted">Caracteres</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Folio</label>
                            <input type="text" class="form-control" name="folio" id="folio" placeholder="Folio" required>
							<small class="text-muted">Caracteres</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label># de activación farma</label>
                            <input type="text" class="form-control" name="activacion_farma" id="activacion_farma"
                                placeholder="Número de activación de Farma" required>
								<small class="text-muted">Caracteres</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre de representante</label>
                            <input type="text" class="form-control" name="activacion_representante"
                                id="activacion_representante" placeholder="Nombre del representante" required>
								<small class="text-muted">Caracteres</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre px</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100"
                                placeholder="Nombre de PX" required>
								<small class="text-muted">Caracteres</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre de clínica</label>
                            <input type="text" class="form-control" name="clinica" id="clinica" maxlength="100"
                                placeholder="Nombre de clínica" required>
								<small class="text-muted">Caracteres</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Teléfono fijo</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" maxlength="10"
                                placeholder="Teléfono fijo" required>
								<small class="text-muted">Caracteres</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Teléfono celular</label>
                            <input type="text" class="form-control" name="movil" id="movil" maxlength="10"
                                placeholder="Teléfono celular" required>
								<small class="text-muted">Caracteres</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Estado</label>
                            <select class="form-control" name="estado" id="estado">
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
							<small class="text-muted">Seleccionar opción de lista desplegable</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Ciudad</label>
                            <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad"
                                required>
								<small class="text-muted">Caracteres</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Dirección</label>
                            <input type="text" class="form-control" name="direccion" id="direccion"
                                placeholder="Dirección" required>
								<small class="text-muted">Caracteres</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Sexo</label>
                            <select class="form-control" name="sexo" id="sexo">
                                <option value="" selected="true">Seleccione una opción</option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
							<small class="text-muted">Seleccionar opción de lista desplegable</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Edad</label>
                            <input type="text" class="form-control" name="edad" id="edad" placeholder="Edad" required>
							<small class="text-muted">Se calcula solo</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Fecha de nacimiento</label>
                            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento"
                                placeholder="Fecha de nacimiento" required>
								<small class="text-muted">Seleccionar fecha</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Laboratorio:</label>
                            <?php $laboratorios = Utils::showLaboratorios();?>
                            <select class="form-control" data-live-search="true" name="idlaboratorio"
                                id="idlaboratorio">
                                <?php while($lab = $laboratorios->fetch_object()): ?>
                                <option value="<?=$lab->idlaboratorio?>"><?=$lab->nombre?></option>
                                <?php endwhile ?>
                            </select>
							<small class="text-muted">Seleccionar laboratorio</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Fecha de captura</label>
                            <input type="date" class="form-control" name="fecha_captura" id="fecha_captura"
                                placeholder="Fecha de captura" value="<?php echo date("Y-m-d");?>">
								<small class="text-muted">Se calcula solo</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Fecha de cita</label>
                            <input type="date" class="form-control" name="fecha_cita" id="fecha_cita"
                                placeholder="Fecha de cita" required>
								<small class="text-muted">Seleccionar fecha</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Hora de cita</label>
                            <input type="time" class="form-control" name="hora_cita" id="hora_cita" placeholder="0:00"
                                required>
								<small class="text-muted">Seleccionar hora</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Confirmación de cita</label>
                            <input type="text" class="form-control" name="fecha_confirmacion" id="fecha_confirmacion"
                                placeholder="Fecha de confirmación de cita">
								<small class="text-muted">Se calcula solo</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Tipo de cupón</label>
                            <input type="text" class="form-control" name="tipo_cupon" id="tipo_cupon"
                                placeholder="Tipo de cupón" required>
								<small class="text-muted">Caracteres</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Estatus</label>
                            <select class="form-control" name="estatus" id="estatus" onchange="showCancelacion()">
                                <option value="0">Por agendar</option>
                                <option value="1">Por acudir</option>
                                <option value="2">Finalizado</option>
                                <option value="3">Cancelado</option>
                            </select>
							<small class="text-muted">Seleccionar opción de lista desplegable</small>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="cancelacion_div"
                            hidden="true">
                            <label>Motivo cancelación</label>
                            <textarea class="form-control" name="motivo_cancelacion" id="motivo_cancelacion"
                                placeholder="Motivo de cancelacion"></textarea>
								<small class="text-muted">Caracteres</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Médico Tratante</label>
                            <?php $medicos = Utils::showMedicosTratantes();?>
                            <select class="form-control" data-live-search="true" name="medico_tratante"
                                id="medico_tratante">
                                <?php while($med = $medicos->fetch_object()): ?>
                                <option value="<?=$med->idusuario?>"><?=$med->nombre?></option>
                                <?php endwhile ?>
                            </select>
							<small class="text-muted">Seleccionar opción de lista desplegable</small>
                        </div>
						<div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Médico Asociado</label>
                            <?php $medicos = Utils::showMedicosAsociados();?>
                            <select class="form-control" data-live-search="true" name="medico_asociado"
                                id="medico_asociado">
                                <?php while($med = $medicos->fetch_object()): ?>
                                <option value="<?=$med->idusuario?>"><?=$med->nombre?></option>
                                <?php endwhile ?>
                            </select>
							<small class="text-muted">Seleccionar opción de lista desplegable</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label># Factura asociado</label>
                            <input type="text" class="form-control" name="factura_asociado" id="factura_asociado"
                                placeholder="Factura de asociado" required>
								<small class="text-muted">Caracteres</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label># Factura MDT</label>
                            <input type="text" class="form-control" name="factura_mdt" id="factura_mdt"
                                placeholder="Factura de MDT" required>
								<small class="text-muted">Caracteres</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Pagado en Factura</label>
                            <select class="form-control" name="pago_factura" id="pago_factura">
                                <option value="empty" selected="true">Seleccione una opción</option>
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
							<small class="text-muted">Seleccionar opción de lista desplegable</small>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Fecha de pago</label>
                            <input type="date" class="form-control" name="fecha_entrega" id="fecha_entrega"
                                placeholder="Fecha de entrega">
								<small class="text-muted">Seleccionar fecha</small>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Observaciones</label>
                            <textarea class="form-control" name="observaciones" id="observaciones"
                                placeholder="Observaciones" required></textarea>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Documentos</label>
                            <div class="row">
                                <p class="col-md-6"><input type="checkbox" name="cupon_original" id="cupon_original">
                                    Cupón Original</p>
                                <p class="col-md-6"><input type="checkbox" name="cupon_copia" id="cupon_copia"> Cupón
                                    Copia</p>
                                <p class="col-md-6"><input type="checkbox" name="consentimiento_original"
                                        id="consentimiento_original"> Consentimiento Informado Original</p>
                                <p class="col-md-6"><input type="checkbox" name="consentimiento_copia"
                                        id="consentimiento_copia"> Consentimiento Informado Copia</p>
                                <p class="col-md-6"><input type="checkbox" name="resultado_original"
                                        id="resultado_original"> Resultado Original</p>
                                <p class="col-md-6"><input type="checkbox" name="resultado_copia" id="resultado_copia">
                                    Resultado Copia</p>
                            </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Tipo de estudio</label>
                            <select class="form-control" name="tipo_estudio" id="tipo_estudio">
                                <option value="">----</option>
                                <option value="PSA">PSA</option>
                                <option value="MASEI">MASEI</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Fecha de Envío de Resultados</label>
                            <input type="date" name="fecha_resultados" id="fecha_resultados" class="form-control">
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>
                                Guardar</button>
                        </div>
                    </form>
					
                </div>
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->
<script type="text/javascript" src="<?=base_url?>views/scripts/paciente/registro.js"></script>
<?php require_once __dir__.'../../layouts/footer.php'; ?>