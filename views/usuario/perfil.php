<?php require_once __dir__.'../../layouts/header.php'; ?>

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
              <?php if(isset($usr)): ?>
                <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <span class="h1 font-weight-bold"><?=$usr->nombre?> </span>
                    <span class="text-muted h4">(<?=$usr->username?>)</span>
                  </div>
                  <div class="col-xs-6 col-md-4">
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <button class="btn btn-info" onclick="edit()" id="btnEditar"><i class="fa fa-plus-circle"></i> Editar</button>
                    <button class="btn btn-danger" onclick="cancelar()" id="btnCancelar"><i class="fa fa-plus-circle"></i> Cancelar</button>
                  </div>
                </div>
              </div>
    <?php if(isset($_SESSION['updatePassword']) && $_SESSION['updatePassword'] == 'complete'):?>
      <div class="h3 bg-success text-success">Contraseña actualizada correctamente</div>
    <?php endif; ?>
    <?php Utils::deleteSession('updatePassword'); ?>
             <?php else: ?>
                 <h1 class="h1">El usuario no existe</h1>
              <?php endif; ?>
              <div class="panel-body" id="formularioregistros">
                    <form action="<?=base_url?>?controller=UsuarioController&action=save&id=<?=$usr->idusuario?>" name="formulario" id="formulario" method="POST">
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" value="<?=$usr->nombre?>">
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Estatus</label>
                        <input type="email" class="form-control" name="estatus" id="estatus" placeholder="Estatus" value="<?= ($usr->estatus)?"Activado":"Desactivado";?>">
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Correo</label>
                        <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo" value="<?=$usr->correo?>">
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Teléfono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" value="<?=$usr->telefono?>">
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Nombre de usuario</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de usuario" value="<?=$usr->username?>">
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña" value="<?=$usr->contrasena?>">
                        <a href="<?=base_url?>controller=UsuarioController&action=passform&id=<?=$usr->idusuario?>">Cambiar contraseña</a>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <label>Tipo de usuario</label>
                      <select class="form-control" data-live-search="true"  name="tipo" id="tipo" required>
                        <option selected="true" value="<?=$usr->tipo?>"><?=$usr->tipo?></option>
                        <option value="Interno">Interno</option>
                        <option value="Medico tratante">Médico tratante</option>
                      </select>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Cumpleaños</label>
                        <input type="date" class="form-control" name="cumple" id="cumple" value="<?=$usr->cumple?>" required>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Permisos:</label>
                        <?php $permisos = Utils::showPermisos();?>
                        <select multiple class="form-control" data-live-search="true"  name="permisos[]" id="permisos">
                          <?php while($pm = $permisos->fetch_object() ): ?>
                            <option value="<?=$pm->idpermiso?>" <?=isset($usr) && is_object($usr) && $pm->idpermiso == $pm->idpermiso ? '' : 'selected';?>><?=$pm->nombre?></option>
                          <?php endwhile; ?>
                        </select>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Permisos del usuario:</label>
                        <?php $permisos = Utils::showUserPermisos($usr->idusuario);?>
                        <div class="" name="permisos[]" id="permisos_act">
                          <?php while($upm = $permisos->fetch_object() ): ?>
                            <div class="row" style="margin: 1rem">
                              <p class="col-md-6"><?=$upm->nombre?> </p>
                              <div class="col-md-6">
                                <p id="btnElim" class="btn btn-danger btn-sm" onclick="deleteUsuarioPermiso(<?=$upm->idup?>)">Eliminar permiso</p>
                              </div>
                            </div>
                          <?php endwhile; ?>
                        </div>
                      </div>
                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
      </div>

  </section>
</div>
<script type="text/javascript" src="<?=base_url?>views/scripts/usuario/perfil.js"></script>
<?php require_once __dir__.'../../layouts/footer.php'; ?>