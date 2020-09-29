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
              <div class="col-xs-6 col-md-6">
                <p class="h3 font-weight-bold" style="margin: 2rem;margin-bottom: 1rem;">Crear laboratorio</p>
              </div>
            </div>
            <div class="panel-body" id="formularioregistros">
              <form action="<?=base_url?>?controller=LaboratorioController&action=save" name="formulario" id="formulario" method="POST">
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Nombre</label>
                  <input type="hidden" name="idlaboratorio" id="idlaboratorio">
                  <input type="hidden" name="idusuario" id="idusuario" value="<?=$_SESSION['identity']->idusuario?>">
                  <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" required>
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
                    <option value="Estado de Mexico">Estado de Mexico</option>
                    <option value="Michoacan">Michoacan</option>
                    <option value="Morelos">Morelos</option>
                    <option value="Nayarit">Nayarit</option>
                    <option value="Nuevo Leon">Nuevo Leon</option>
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
                    <option value="Yucatan">Yucatan</option>
                    <option value="Zacatecas">Zacatecas</option>
                  </select>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Ciudad</label>
                  <input type="text" class="form-control" name="ciudad" id="ciudad" maxlength="100" placeholder="Ciudad" required>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Dirección</label>
                  <textarea class="form-control" name="direccion" id="direccion" maxlength="100" placeholder="Dirección" required></textarea>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Contacto</label>
                  <input type="text" class="form-control" name="contacto" id="contacto" placeholder="Contacto" required>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Teléfono fijo</label>
                  <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Teléfono celular</label>
                  <input type="text" class="form-control" name="telefono_2" id="telefono_2" placeholder="Teléfono Celular" required>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Correo</label>
                  <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo" required>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Correo adicional</label>
                  <input type="email" class="form-control" name="correo_2" id="correo_2" placeholder="Correo adicional" required>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Estudios</label>
                  <?php $programas = Utils::showProgramas();?>
                  <select class="form-control" data-live-search="true" name="estudio" id="estudio">
                      <?php while($prog = $programas->fetch_object()): ?>
                      <option value="<?=$prog->idprograma?>"><?=$prog->nombre?></option>
                      <?php endwhile ?>
                  </select>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Precio por estudio</label>
                  <input type="number" class="form-control" name="precio" id="precio" step="0.01" value="0.00">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Horario de atención</label>
                  <input type="text" class="form-control" name="atencion" id="atencion" placeholder="Horario de atención">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Nombre clínica</label>
                  <input type="text" class="form-control" name="clinica" id="clinica" placeholder="Nombre de la clínica">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Razón social</label>
                  <input type="text" class="form-control" name="razon_social" id="razon_social" placeholder="Razón social">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Nombre de banco</label>
                  <input type="text" class="form-control" name="nombre_banco" id="nombre_banco" placeholder="Nombre del banco">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Número de cuenta bancaria</label>
                  <input type="text" class="form-control" name="num_cuenta" id="num_cuenta" placeholder="Número de cuenta bancaria">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>¿Cuenta con convenio?</label>
                  <select class="form-control" name="convenio" id="convenio" >
                    <option selected="true" value="">Seleccione una opción</option>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                  </select>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <label>Creado por:</label>
                    <div class="container">
                      <?=$_SESSION['identity']->nombre?>
                    </div>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <label>Observaciones</label>
                  <textarea class="form-control" name="observaciones" id="observaciones"></textarea>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                </div>
              </form>
          </div>
        </div>
      </div>
        </div>
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->

<?php require_once __dir__.'../../layouts/footer.php'; ?>