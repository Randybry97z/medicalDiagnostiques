<?php require_once __dir__.'../../layouts/header.php'; ?>

<!--Contenido-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="panel-body" id="formularioregistros">
            <div class="box">
                <div class="row">
                    <div class="col-xs-6 col-md-4">
                        <p class="h1 font-weight-bold" style="margin: 2rem;">Resultado</p>
                    </div>
                </div>

                <div class="box-body">
                    <form action="<?=base_url?>?controller=ResultadoController&action=save" name="formulario" id="formulario" method="POST"
                        enctype="multipart/form-data">

                        <div class="panel-body table-responsive" id="listadoregistros">
                            <input type="hidden" name="creado_por" id="creado_por"
                                value="<?=$_SESSION['identity']->idusuario?>">

                            <?php $pacientes = Utils::showPacientes();?>
                            <select class="form-control" data-live-search="true" name="idpaciente" id="idpaciente">
                                <?php while($pac = $pacientes->fetch_object()): ?>
                                <option value="<?=$pac->idpaciente?>"><?=$pac->nombre?></option>
                                <?php endwhile ?>
                            </select>

                            <?php $programas = Utils::showProgramas();?>
                            <select style="display: none" class="form-control" data-live-search="true" name="idprograma"
                                id="idprograma">
                                <?php while($pro = $programas->fetch_object()): ?>
                                <option value="<?=$pro->idprograma?>"><?=$pro->nombre?></option>
                                <?php endwhile ?>
                            </select>


                            <div style="display: none" id="psa">
                                <!--ARTICULACIONES-->
                                <table id="tbllistado"
                                    class="table table-striped table-bordered table-condensed table-hover">
                                    <h2>ARTICULACIONES</h2>
                                    <thead>
                                        <th class="th-sm"></th>
                                        <th class="th-sm"></th>
                                        <th class="th-sm">Derecha</th>
                                        <th class="th-sm">Izquierda</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Radiosemilunar</td>
                                            <td>Hipertrofía sinovial</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="radio_hiper_der" id="radio_hiper_der">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="radio_hiper_izq" id="radio_hiper_izq">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Power Doppler</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="radio_power_der" id="radio_power_der">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="radio_power_izq" id="radio_power_izq">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>2IFP</td>
                                            <td>Hipertrofía sinovial</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="2ifp_hiper_der" id="2ifp_hiper_der">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="2ifp_hiper_izq" id="2ifp_hiper_izq">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Power Doppler</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="2ifp_power_der" id="2ifp_power_der">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="2ifp_power_izq" id="2ifp_power_izq">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>3IFP</td>
                                            <td>Hipertrofía sinovial</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="3ifp_hiper_der" id="3ifp_hiper_der">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="3ifp_hiper_izq" id="3ifp_hiper_izq">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Power Doppler</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="3ifp_power_der" id="3ifp_power_der">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="3ifp_power_izq" id="3ifp_power_izq">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>4IFP</td>
                                            <td>Hipertrofía sinovial</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="4ifp_hiper_der" id="4ifp_hiper_der">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="4ifp_hiper_izq" id="4ifp_hiper_izq">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Power Doppler</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="4ifp_power_der" id="4ifp_power_der">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="4ifp_power_izq" id="4ifp_power_izq">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>5IFP</td>
                                            <td>Hipertrofía sinovial</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="5ifp_hiper_der" id="5ifp_hiper_der">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="5ifp_hiper_izq" id="5ifp_hiper_izq">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Power Doppler</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="5ifp_power_der" id="5ifp_power_der">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="5ifp_power_izq" id="5ifp_power_izq">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>Rodilla
                                                Receso lateral</td>
                                            <td>Hipertrofía sinovial</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="rrl_hiper_der" id="rrl_hiper_der">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="rrl_hiper_izq" id="rrl_hiper_izq">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Power Doppler</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="rrl_power_der" id="rrl_power_der">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="rrl_power_izq" id="rrl_power_izq">
                                                    <option value="">----</option>
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </td>
                                        </tr>


                                    </tbody>
                                    <tfoot>
                                        <th></th>
                                        <th></th>
                                        <th>Derecha</th>
                                        <th>Izquierda</th>
                                    </tfoot>
                                </table>
                                <!--ARTICULACIONES FIN-->


                                <!--TENDONES-->
                                <table id="tbllistado"
                                    class="table table-striped table-bordered table-condensed table-hover">
                                    <h2>TENDONES</h2>
                                    <thead>
                                        <th class="th-sm"></th>
                                        <th class="th-sm">Derecha</th>
                                        <th class="th-sm"></th>
                                        <th class="th-sm">Izquierda</th>
                                        <th class="th-sm"></th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Flexores(longitudinal)</td>
                                            <td>Derrame</td>
                                            <td>Power Doppler</td>
                                            <td>Derrame</td>
                                            <td>Power Doppler</td>
                                        </tr>

                                        <!--2 Flexor-->
                                        <tr>
                                            <td>2 flexor</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="flexlong_2_derrame_der" id="flexlong_2_derrame_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="flexlong_2_power_der" id="flexlong_2_power_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="flexlong_2_derrame_izq" id="flexlong_2_derrame_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="flexlong_2_power_izq" id="flexlong_2_power_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <!--2 Flexor FIN-->

                                        <!--3 Flexor-->
                                        <tr>
                                            <td>3 flexor</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="flexlong_3_derrame_der" id="flexlong_3_derrame_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="flexlong_3_power_der" id="flexlong_3_power_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="flexlong_3_derrame_izq" id="flexlong_3_derrame_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="flexlong_3_power_izq" id="flexlong_3_power_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <!--3 Flexor FIN-->

                                        <!--4 Flexor-->
                                        <tr>
                                            <td>4 flexor</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="flexlong_4_derrame_der" id="flexlong_4_derrame_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="flexlong_4_power_der" id="flexlong_4_power_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="flexlong_4_derrame_izq" id="flexlong_4_derrame_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="flexlong_4_power_izq" id="flexlong_4_power_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <!--4 Flexor FIN-->

                                        <!--5 Flexor-->
                                        <tr>
                                            <td>5 flexor</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="flexlong_5_derrame_der" id="flexlong_5_derrame_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="flexlong_5_power_der" id="flexlong_5_power_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="flexlong_5_derrame_izq" id="flexlong_5_derrame_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="flexlong_5_power_izq" id="flexlong_5_power_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <!--5 flexor FIN-->

                                        <tr>
                                            <td>Extensores (longitudinal)</td>
                                            <td>Inflamación de peritenon</td>
                                            <td>Power Doppler</td>
                                            <td>Inflamación de peritenon</td>
                                            <td>Power Doppler</td>
                                        </tr>

                                        <!--2 extensor-->
                                        <tr>
                                            <td>2 Extensor</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extlong_2_derrame_der" id="extlong_2_derrame_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extlong_2_power_der" id="extlong_2_power_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extlong_2_derrame_izq" id="extlong_2_derrame_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extlong_2_power_izq" id="extlong_2_power_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <!--2 extensor FIN-->

                                        <!--3 extensor-->
                                        <tr>
                                            <td>3 extensor</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extlong_3_derrame_der" id="extlong_3_derrame_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extlong_3_power_der" id="extlong_3_power_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extlong_3_derrame_izq" id="extlong_3_derrame_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extlong_3_power_izq" id="extlong_3_power_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <!--3 extensor FIN-->

                                        <!--4 extensor-->
                                        <tr>
                                            <td>4 extensor</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extlong_4_derrame_der" id="extlong_4_derrame_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extlong_4_power_der" id="extlong_4_power_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extlong_4_derrame_izq" id="extlong_4_derrame_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extlong_4_power_izq" id="extlong_4_power_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <!--4 extensor FIN-->

                                        <!--5 extensor-->
                                        <tr>
                                            <td>5 extensor</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extlong_5_derrame_der" id="extlong_5_derrame_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extlong_5_power_der" id="extlong_5_power_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extlong_5_derrame_izq" id="extlong_5_derrame_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extlong_5_power_izq" id="extlong_5_power_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <!--5 Extensor FIN-->

                                        <tr>
                                            <td>Extensores del carpo (transversales)</td>
                                            <td>Hipertrofia</td>
                                            <td>Power Doppler</td>
                                            <td>Hipertrofia</td>
                                            <td>Power Doppler</td>
                                        </tr>

                                        <!--2 transversal-->
                                        <tr>
                                            <td>2 transversal</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extran_2_derrame_der" id="extran_2_derrame_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extran_2_power_der" id="extran_2_power_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extran_2_derrame_izq" id="extran_2_derrame_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="extran_2_power_izq" id="extran_2_power_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <!--2 transversal FIN-->

                                    </tbody>
                                    <tfoot>
                                        <th></th>
                                        <th></th>
                                        <th>Derecha</th>
                                        <th>Izquierda</th>
                                    </tfoot>
                                </table>

                                <!--TENDONES FIN-->


                                <!--ENTESIS-->
                                <table id="tbllistado"
                                    class="table table-striped table-bordered table-condensed table-hover">
                                    <h2>ENTESIS</h2>
                                    <thead>
                                        <th class="th-sm"></th>
                                        <th class="th-sm"></th>
                                        <th class="th-sm">Derecha</th>
                                        <th class="th-sm">Izquierda</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Infrapatelar proximal</td>
                                            <td>Cambios ecotextura</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infraprox_camb_der" id="infraprox_camb_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infraprox_camb_izq" id="infraprox_camb_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Engrosamiento</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infraprox_engro_der" id="infraprox_engro_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infraprox_engro_izq" id="infraprox_engro_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Calcificaciones</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infraprox_calci_der" id="infraprox_calci_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infraprox_calci_izq" id="infraprox_calci_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Entesofitos</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infraprox_ente_der" id="infraprox_ente_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infraprox_ente_izq" id="infraprox_ente_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Power Dooppler</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infraprox_power_der" id="infraprox_power_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infraprox_power_izq" id="infraprox_power_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>Infrapatelar distal</td>
                                            <td>Cambios ecotextura</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infradis_camb_der" id="infradis_camb_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infradis_camb_izq" id="infradis_camb_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Engrosamiento</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infradis_engro_der" id="infradis_engro_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infradis_engro_izq" id="infradis_engro_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Calcificaciones</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infradis_calci_der" id="infradis_calci_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infradis_calci_izq" id="infradis_calci_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Entesofitos</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infradis_ente_der" id="infradis_ente_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infradis_ente_izq" id="infradis_ente_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Power Dooppler/td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infradis_power_der" id="infradis_power_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="infradis_power_izq" id="infradis_power_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>Aquíleo</td>
                                            <td>Cambios ecotextura</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="aquileo_camb_der" id="aquileo_camb_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="aquileo_camb_izq" id="aquileo_camb_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Engrosamiento</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="aquileo_engro_der" id="aquileo_engro_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="aquileo_engro_izq" id="aquileo_engro_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Calcificaciones</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="aquileo_calci_der" id="aquileo_calci_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="aquileo_calci_izq" id="aquileo_calci_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Entesofitos</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="aquileo_ente_der" id="aquileo_ente_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="aquileo_ente_izq" id="aquileo_ente_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Power Dooppler</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="aquileo_power_der" id="aquileo_power_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="aquileo_power_izq" id="aquileo_power_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>Epicóndilo lateral</td>
                                            <td>Cambios ecotextura</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="epilat_camb_der" id="epilat_camb_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="epilat_camb_izq" id="epilat_camb_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Engrosamiento</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="epilat_engro_der" id="epilat_engro_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="epilat_engro_izq" id="epilat_engro_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td></td>
                                            <td>Calcificaciones</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="epilat_calci_der" id="epilat_calci_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="epilat_calci_izq" id="epilat_calci_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Entesofitos</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="epilat_ento_der" id="epilat_ento_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="epilat_ento_izq" id="epilat_ento_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Power Dooppler</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="epilat_power_der" id="epilat_power_der">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="epilat_power_izq" id="epilat_power_izq">
                                                    <option value="">----</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No" selected>No</option>
                                                </select>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <th></th>
                                        <th></th>
                                        <th>Derecha</th>
                                        <th>Izquierda</th>
                                    </tfoot>
                                </table>
                                <!--Entesis FIN-->

                                <!--CONCLUSIÓN-->
                                <table id="tbllistado"
                                    class="table table-striped table-bordered table-condensed table-hover">
                                    <h2>CONCLUSIÓN</h2>
                                    <thead>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Artritis</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="conclusion_artritis" id="conclusion_artritis">
                                                    <option value="" selected>----</option>
                                                    <option value="Sin artritis">Sin artritis</option>
                                                    <option value="Con artritis">Con artritis</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Tendones</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="conclusion_tendones" id="conclusion_tendones">
                                                    <option value="" selected>----</option>
                                                    <option value="Sin involucro tendinoso">Sin involucro tendinoso
                                                    </option>
                                                    <option value="Con involucro tendinoso">Con involucro tendinoso
                                                    </option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Entesis</td>
                                            <td>
                                                <select class="form-control" data-live-search="true"
                                                    name="conclusion_entesis" id="conclusion_entesis">
                                                    <option value="" selected>----</option>
                                                    <option value="Sin entesis">Sin entesis</option>
                                                    <option value="Con entesis">Con entesis</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <label>Hallazgos</label>
                                                    <textarea class="form-control" name="conclusion_hallazgos"
                                                        id="conclusion_hallazgos" placeholder=""></textarea>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                                </table>
                                <!--CONCLUSIÓN FIN-->
                            </div>
                            <div style="display: none" id="masei">
                                <!--MASEI-->
                                <table id="tbllistado"
                                    class="table table-striped table-bordered table-condensed table-hover">
                                    <h2>MASEI</h2>
                                    <thead>

                                    </thead>
                                    <tbody>

                                        <!--IZQUIERDA-->
                                        <tr>
                                            <td colspan="9">I<h3><span class="label bg-green">Izquierda</span></h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Ref(mm)</td>
                                            <td>Valor</td>
                                            <td>Espesor</td>
                                            <td>Estructura</td>
                                            <td>Bursitis</td>
                                            <td>Erosión</td>
                                            <td>Calcificaciones</td>
                                            <td>PWD</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">Tríceps</div>
                                            </td>
                                            <td>
                                                <div class="form-group">4.3</div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="triceps_valor_izq"
                                                        id="triceps_valor_izq" value="4.3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="triceps_espesor_izq"
                                                        id="triceps_espesor_izq" value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="triceps_estructura_izq" id="triceps_estructura_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="triceps_bursitis_izq" id="triceps_bursitis_izq" disabled>
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>NA</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="triceps_erosion_izq" id="triceps_erosion_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="triceps_calc_izq" id="triceps_calc_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="triceps_pwd_izq" id="triceps_pwd_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">Cuadríceps</div>
                                            </td>
                                            <td>
                                                <div class="form-group">6.1</div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        name="cuadriceps_valor_izq" id="cuadriceps_valor_izq"
                                                        value="6.1">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        name="cuadriceps_espesor_izq" id="cuadriceps_espesor_izq"
                                                        value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="cuadriceps_estructura_izq" id="cuadriceps_estructura_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="cuadriceps_bursitis_izq" id="cuadriceps_bursitis_izq"
                                                        disabled>
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>NA</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="cuadriceps_erosion_izq" id="cuadriceps_erosion_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="cuadriceps_calc_izq" id="cuadriceps_calc_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="cuadriceps_pwd_izq" id="cuadriceps_pwd_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">Patelar proximal</div>
                                            </td>
                                            <td>
                                                <div class="form-group">4</div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        name="patelar_prox_valor_izq" id="patelar_prox_valor_izq"
                                                        value="4.0" step="any">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        name="patelar_prox_espesor_izq" id="patelar_prox_espesor_izq"
                                                        value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_prox_estructura_izq"
                                                        id="patelar_prox_estructura_izq">
                                                        <option value="">----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_prox_bursitis_izq" id="patelar_prox_bursitis_izq"
                                                        disabled>
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>NA</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_prox_erosion_izq" id="patelar_prox_erosion_izq">
                                                        <option value="">----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_prox_calc_izq" id="patelar_prox_calc_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_prox_pwd_izq" id="patelar_prox_pwd_izq">
                                                        <option value="">----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">Patelar distal</div>
                                            </td>
                                            <td>
                                                <div class="form-group">4</div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        name="patelar_dist_valor_izq" id="patelar_dist_valor_izq"
                                                        value="4.0" step="any">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        name="patelar_dist_espesor_izq" id="patelar_dist_espesor_izq"
                                                        value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_dist_estructura_izq"
                                                        id="patelar_dist_estructura_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_dist_bursitis_izq" id="patelar_dist_bursitis_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_dist_erosion_izq" id="patelar_dist_erosion_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_dist_calc_izq" id="patelar_dist_calc_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_dist_pwd_izq" id="patelar_dist_pwd_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <div class="form-group">Aquíleo</div>
                                            </td>
                                            <td>
                                                <div class="form-group">5.29</div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="aquileo_valor_izq"
                                                        id="aquileo_valor_izq" value="5.29">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="aquileo_espesor_izq"
                                                        id="aquileo_espesor_izq" value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="aquileo_estructura_izq" id="aquileo_estructura_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="aquileo_bursitis_izq" id="aquileo_bursitis_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="aquileo_erosion_izq" id="aquileo_erosion_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="aquileo_calc_izq" id="aquileo_calc_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="aquileo_pwd_izq" id="aquileo_pwd_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group col-sm-2">Fascia plantar</div>
                                            </td>
                                            <td>
                                                <div class="form-group">4.4</div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        name="fascia_plantar_valor_izq" id="fascia_plantar_valor_izq"
                                                        value="4.4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        name="fascia_plantar_espesor_izq"
                                                        id="fascia_plantar_espesor_izq" value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="fascia_plantar_estructura_izq"
                                                        id="fascia_plantar_estructura_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="fascia_plantar_bursitis_izq"
                                                        id="fascia_plantar_bursitis_izq" disabled>
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>NA</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="fascia_plantar_erosion_izq"
                                                        id="fascia_plantar_erosion_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="fascia_plantar_calc_izq" id="fascia_plantar_calc_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="fascia_plantar_pwd_izq" id="fascia_plantar_pwd_izq">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group col-sm-2">Score</div>
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="total_espesor_izq"
                                                        id="total_espesor_izq" value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        name="total_estructura_izq" id="total_estructura_izq" value="0"
                                                        readonly>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="total_bursitis_izq"
                                                        id="total_bursitis_izq" value="0" readonly>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="total_erosion_izq"
                                                        id="total_erosion_izq" value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="total_calc_izq"
                                                        id="total_calc_izq" value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="total_pwd_izq"
                                                        id="total_pwd_izq" value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="total_izq"
                                                        id="total_izq" value="0" readonly>
                                                </div>
                                            </td>
                                        </tr>

                                        <!--IZQUIERDA FIN-->

                                        <!--DERECHA-->
                                        <tr>
                                            <td colspan="9">
                                                <h3><span class="label bg-green">Derecha</span></h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Ref(mm)</td>
                                            <td>Valor</td>
                                            <td>Espesor</td>
                                            <td>Estructura</td>
                                            <td>Bursitis</td>
                                            <td>Erosión</td>
                                            <td>Calcificaciones</td>
                                            <td>PWD</td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">Tríceps</div>
                                            </td>
                                            <td>
                                                <div class="form-group">4.3</div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="triceps_valor_der"
                                                        id="triceps_valor_der" value="4.3">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="triceps_espesor_der"
                                                        id="triceps_espesor_der" value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="triceps_estructura_der" id="triceps_estructura_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="triceps_bursitis_der" id="triceps_bursitis_der" disabled>
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>NA</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="triceps_erosion_der" id="triceps_erosion_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="triceps_calc_der" id="triceps_calc_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="triceps_pwd_der" id="triceps_pwd_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">Cuadríceps</div>
                                            </td>
                                            <td>
                                                <div class="form-group">6.1</div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        name="cuadriceps_valor_der" id="cuadriceps_valor_der"
                                                        value="6.1">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        name="cuadriceps_espesor_der" id="cuadriceps_espesor_der"
                                                        value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="cuadriceps_estructura_der" id="cuadriceps_estructura_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="cuadriceps_bursitis_der" id="cuadriceps_bursitis_der"
                                                        disabled>
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>NA</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="cuadriceps_erosion_der" id="cuadriceps_erosion_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="cuadriceps_calc_der" id="cuadriceps_calc_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="cuadriceps_pwd_der" id="cuadriceps_pwd_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">Patelar proximal</div>
                                            </td>
                                            <td>
                                                <div class="form-group">4</div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        name="patelar_prox_valor_der" id="patelar_prox_valor_der"
                                                        value="4.0" step="any">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        name="patelar_prox_espesor_der" id="patelar_prox_espesor_der"
                                                        value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_prox_estructura_der"
                                                        id="patelar_prox_estructura_der">
                                                        <option value="">----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_prox_bursitis_der" id="patelar_prox_bursitis_der"
                                                        disabled>
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>NA</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_prox_erosion_der" id="patelar_prox_erosion_der">
                                                        <option value="">----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_prox_calc_der" id="patelar_prox_calc_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_prox_pwd_der" id="patelar_prox_pwd_der">
                                                        <option value="">----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">Patelar distal</div>
                                            </td>
                                            <td>
                                                <div class="form-group">4</div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        name="patelar_dist_valor_der" id="patelar_dist_valor_der"
                                                        value="4.0" step="any">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        name="patelar_dist_espesor_der" id="patelar_dist_espesor_der"
                                                        value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_dist_estructura_der"
                                                        id="patelar_dist_estructura_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_dist_bursitis_der" id="patelar_dist_bursitis_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_dist_erosion_der" id="patelar_dist_erosion_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_dist_calc_der" id="patelar_dist_calc_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="patelar_dist_pwd_der" id="patelar_dist_pwd_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <div class="form-group">Aquíleo</div>
                                            </td>
                                            <td>
                                                <div class="form-group">5.29</div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="aquileo_valor_der"
                                                        id="aquileo_valor_der" value="5.29">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="aquileo_espesor_der"
                                                        id="aquileo_espesor_der" value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="aquileo_estructura_der" id="aquileo_estructura_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="aquileo_bursitis_der" id="aquileo_bursitis_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="aquileo_erosion_der" id="aquileo_erosion_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="aquileo_calc_der" id="aquileo_calc_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="aquileo_pwd_der" id="aquileo_pwd_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group col-sm-2">Fascia plantar</div>
                                            </td>
                                            <td>
                                                <div class="form-group">4.4</div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        name="fascia_plantar_valor_der" id="fascia_plantar_valor_der"
                                                        value="4.4">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        name="fascia_plantar_espesor_der"
                                                        id="fascia_plantar_espesor_der" value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="fascia_plantar_estructura_der"
                                                        id="fascia_plantar_estructura_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="fascia_plantar_bursitis_der"
                                                        id="fascia_plantar_bursitis_der" disabled>
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>NA</option>
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="fascia_plantar_erosion_der"
                                                        id="fascia_plantar_erosion_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="fascia_plantar_calc_der" id="fascia_plantar_calc_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" data-live-search="true"
                                                        name="fascia_plantar_pwd_der" id="fascia_plantar_pwd_der">
                                                        <option value="" disabled>----</option>
                                                        <option value="0" selected>0</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group col-sm-2">Score</div>
                                            </td>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="total_espesor_der"
                                                        id="total_espesor_der" value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        name="total_estructura_der" id="total_estructura_der" value="0"
                                                        readonly>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="total_bursitis_der"
                                                        id="total_bursitis_der" value="0" readonly>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="total_erosion_der"
                                                        id="total_erosion_der" value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="total_calc_der"
                                                        id="total_calc_der" value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="total_pwd_der"
                                                        id="total_pwd_der" value="0" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" name="total_der"
                                                        id="total_der" value="0" readonly>
                                                </div>
                                            </td>
                                        </tr>

                                        <!--DERECHA FIN-->

                                        <tr>
                                            <td colspan="10">
                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <label>Hallazgos</label>
                                                    <textarea class="form-control" name="hallazgos_masei"
                                                        id="hallazgos_masei" placeholder=""></textarea>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                                </table>
                                <!--MASEI FIN-->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-2 col-md-2">
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit" id="btnGuardar"><i
                                            class="fa fa-save"></i>
                                        Guardar</button>
                                </div>
                            </div>
                            <div class="col-xs-2 col-md-2">
                                <div class="form-group">
                                    <button class="btn btn-danger" onclick="window.open('gestion', '_self')"
                                        id="btnCancelar"><i class="fa fa-plus-circle"></i> Cancelar</button>
                                </div>

                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Resultados</label>
                                <input style="display: none" type="file" name="resultado_archivo" id="resultado_archivo"
                                    class="form-control">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->
<script type="text/javascript" src="<?=base_url?>views/scripts/resultado/registro.js"></script>
<?php require_once __dir__.'../../layouts/footer.php'; ?>