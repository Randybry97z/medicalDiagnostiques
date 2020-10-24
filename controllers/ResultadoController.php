<?php
require_once 'models/resultado.php';
require_once 'models/paciente.php';
require_once 'models/programa.php';
class ResultadoController{
  public function index(){
  }

  public function gestion(){
    $resultado = new Resultado();

	if(Utils::isAdmin()||Utils::isCoordinador()||Utils::isCallCenter()){
    $resultados = $resultado->getAll();
    require_once 'views/resultado/gestion.php';
	}else if(Utils::isMedicoAsociado()){
		//if (isset($_GET['idusuario'])) {
		$idusuario = $_GET['idusuario'];
        $resultados = $resultado->getMedicoAsociado($idusuario);
		require_once 'views/resultado/gestion.php';
		//}
	}else if(Utils::isMedicoTratante()){
		//if (isset($_GET['idusuario'])) {
		$idusuario = $_GET['idusuario'];
        $resultados = $resultado->getMedicoTratante($idusuario);
		require_once 'views/resultado/gestion.php';
		//}
	}else{
		header("Location:".base_url."?controller=InicioController&action=index");
	}
  }

  public function registro(){
    require_once 'views/resultado/registro.php';
  }

  public function detalle(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $resultado = new Resultado();
      $resultado->setIdresultado($id);
      $res = $resultado->getOne();

    }
    require_once 'views/resultado/detalle.php';
  }

  public function editar(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $edit=true;

      $resultado = new Resultado();
      $resultado->setIdresultado($id);
      $res = $resultado->getOne();

      header("Location:".base_url.'?controller=ResultadoController&action=detalle&id='.$id);
    }
  }

 public function save(){
  if(isset($_POST)){
      $radio_hiper_der = isset($_POST['radio_hiper_der']) ? $_POST['radio_hiper_der'] : false;
      $radio_hiper_izq = isset($_POST['radio_hiper_izq']) ? $_POST['radio_hiper_izq'] : false;
      $radio_power_der = isset($_POST['radio_power_der']) ? $_POST['radio_power_der'] : false;
      $radio_power_izq = isset($_POST['radio_power_izq']) ? $_POST['radio_power_izq'] : false;
      $ifp2_hiper_izq = isset($_POST['2ifp_hiper_izq']) ? $_POST['2ifp_hiper_izq'] : false;
      $ifp2_hiper_der = isset($_POST['2ifp_hiper_der']) ? $_POST['2ifp_hiper_der'] : false;
      $ifp2_power_izq = isset($_POST['2ifp_power_izq']) ? $_POST['2ifp_power_izq'] : false;
      $ifp2_power_der = isset($_POST['2ifp_power_der']) ? $_POST['2ifp_power_der'] : false;
      $ifp3_hiper_izq = isset($_POST['3ifp_hiper_izq']) ? $_POST['3ifp_hiper_izq'] : false;
      $ifp3_hiper_der = isset($_POST['3ifp_hiper_der']) ? $_POST['3ifp_hiper_der'] : false;
      $ifp3_power_izq = isset($_POST['3ifp_power_izq']) ? $_POST['3ifp_power_izq'] : false;
      $ifp3_power_der = isset($_POST['3ifp_power_der']) ? $_POST['3ifp_power_der'] : false;
      $ifp4_hiper_izq = isset($_POST['4ifp_hiper_izq']) ? $_POST['4ifp_hiper_izq'] : false;
      $ifp4_hiper_der = isset($_POST['4ifp_hiper_der']) ? $_POST['4ifp_hiper_der'] : false;
      $ifp4_power_izq = isset($_POST['4ifp_power_izq']) ? $_POST['4ifp_power_izq'] : false;
      $ifp4_power_der = isset($_POST['4ifp_power_der']) ? $_POST['4ifp_power_der'] : false;
      $ifp5_hiper_izq = isset($_POST['5ifp_hiper_izq']) ? $_POST['5ifp_hiper_izq'] : false;
      $ifp5_hiper_der = isset($_POST['5ifp_hiper_der']) ? $_POST['5ifp_hiper_der'] : false;
      $ifp5_power_izq = isset($_POST['5ifp_power_izq']) ? $_POST['5ifp_power_izq'] : false;
      $ifp5_power_der = isset($_POST['5ifp_power_der']) ? $_POST['5ifp_power_der'] : false;
      $rrl_hiper_izq = isset($_POST['rrl_hiper_izq']) ? $_POST['rrl_hiper_izq'] : false;
      $rrl_hiper_der = isset($_POST['rrl_hiper_der']) ? $_POST['rrl_hiper_der'] : false;
      $rrl_power_izq = isset($_POST['rrl_power_izq']) ? $_POST['rrl_power_izq'] : false;
      $rrl_power_der = isset($_POST['rrl_power_der']) ? $_POST['rrl_power_der'] : false;
      $flexlong_2_derrame_der = isset($_POST['flexlong_2_derrame_der']) ? $_POST['flexlong_2_derrame_der'] : false;
      $flexlong_2_power_der = isset($_POST['flexlong_2_power_der']) ? $_POST['flexlong_2_power_der'] : false;
      $flexlong_2_derrame_izq = isset($_POST['flexlong_2_derrame_izq']) ? $_POST['flexlong_2_derrame_izq'] : false;
      $flexlong_2_power_izq = isset($_POST['flexlong_2_power_izq']) ? $_POST['flexlong_2_power_izq'] : false;
      $flexlong_3_derrame_der = isset($_POST['flexlong_3_derrame_der']) ? $_POST['flexlong_3_derrame_der'] : false;
      $flexlong_3_power_der = isset($_POST['flexlong_3_power_der']) ? $_POST['flexlong_3_power_der'] : false;
      $flexlong_3_derrame_izq = isset($_POST['flexlong_3_derrame_izq']) ? $_POST['flexlong_3_derrame_izq'] : false;
      $flexlong_3_power_izq = isset($_POST['flexlong_3_power_izq']) ? $_POST['flexlong_3_power_izq'] : false;
      $flexlong_4_derrame_der = isset($_POST['flexlong_4_derrame_der']) ? $_POST['flexlong_4_derrame_der'] : false;
      $flexlong_4_power_der = isset($_POST['flexlong_4_power_der']) ? $_POST['flexlong_4_power_der'] : false;
      $flexlong_4_derrame_izq = isset($_POST['flexlong_4_derrame_izq']) ? $_POST['flexlong_4_derrame_izq'] : false;
      $flexlong_4_power_izq = isset($_POST['flexlong_4_power_izq']) ? $_POST['flexlong_4_power_izq'] : false;
      $flexlong_5_derrame_der = isset($_POST['flexlong_5_derrame_der']) ? $_POST['flexlong_5_derrame_der'] : false;
      $flexlong_5_power_der = isset($_POST['flexlong_5_power_der']) ? $_POST['flexlong_5_power_der'] : false;
      $flexlong_5_derrame_izq = isset($_POST['flexlong_5_derrame_izq']) ? $_POST['flexlong_5_derrame_izq'] : false;
      $flexlong_5_power_izq = isset($_POST['flexlong_5_power_izq']) ? $_POST['flexlong_5_power_izq'] : false;
      $extlong_2_derrame_der = isset($_POST['extlong_2_derrame_der']) ? $_POST['extlong_2_derrame_der'] : false;
      $extlong_2_power_der = isset($_POST['extlong_2_power_der']) ? $_POST['extlong_2_power_der'] : false;
      $extlong_2_derrame_izq = isset($_POST['extlong_2_derrame_izq']) ? $_POST['extlong_2_derrame_izq'] : false;
      $extlong_2_power_izq = isset($_POST['extlong_2_power_izq']) ? $_POST['extlong_2_power_izq'] : false;
      $extlong_3_derrame_der = isset($_POST['extlong_3_derrame_der']) ? $_POST['extlong_3_derrame_der'] : false;
      $extlong_3_power_der = isset($_POST['extlong_3_power_der']) ? $_POST['extlong_3_power_der'] : false;
      $extlong_3_derrame_izq = isset($_POST['extlong_3_derrame_izq']) ? $_POST['extlong_3_derrame_izq'] : false;
      $extlong_3_power_izq = isset($_POST['extlong_3_power_izq']) ? $_POST['extlong_3_power_izq'] : false;
      $extlong_4_derrame_der = isset($_POST['extlong_4_derrame_der']) ? $_POST['extlong_4_derrame_der'] : false;
      $extlong_4_power_der = isset($_POST['extlong_4_power_der']) ? $_POST['extlong_4_power_der'] : false;
      $extlong_4_derrame_izq = isset($_POST['extlong_4_derrame_izq']) ? $_POST['extlong_4_derrame_izq'] : false;
      $extlong_4_power_izq = isset($_POST['extlong_4_power_izq']) ? $_POST['extlong_4_power_izq'] : false;
      $extlong_5_derrame_der = isset($_POST['extlong_5_derrame_der']) ? $_POST['extlong_5_derrame_der'] : false;
      $extlong_5_power_der = isset($_POST['extlong_5_power_der']) ? $_POST['extlong_5_power_der'] : false;
      $extlong_5_derrame_izq = isset($_POST['extlong_5_derrame_izq']) ? $_POST['extlong_5_derrame_izq'] : false;
      $extlong_5_power_izq = isset($_POST['extlong_5_power_izq']) ? $_POST['extlong_5_power_izq'] : false;
      $extran_2_derrame_der = isset($_POST['extran_2_derrame_der']) ? $_POST['extran_2_derrame_der'] : false;
      $extran_2_power_der = isset($_POST['extran_2_power_der']) ? $_POST['extran_2_power_der'] : false;

      $extran_2_derrame_izq = isset($_POST['extran_2_derrame_izq']) ? $_POST['extran_2_derrame_izq'] : false;
      $extran_2_power_izq = isset($_POST['extran_2_power_izq']) ? $_POST['extran_2_power_izq'] : false;
      $infraprox_camb_der = isset($_POST['infraprox_camb_der']) ? $_POST['infraprox_camb_der'] : false;
      $infraprox_camb_izq = isset($_POST['infraprox_camb_izq']) ? $_POST['infraprox_camb_izq'] : false;
      $infraprox_engro_der = isset($_POST['infraprox_engro_der']) ? $_POST['infraprox_engro_der'] : false;
      $infraprox_engro_izq = isset($_POST['infraprox_engro_izq']) ? $_POST['infraprox_engro_izq'] : false;
      $infraprox_calci_der = isset($_POST['infraprox_calci_der']) ? $_POST['infraprox_calci_der'] : false;
      $infraprox_calci_izq = isset($_POST['infraprox_calci_izq']) ? $_POST['infraprox_calci_izq'] : false;
      $infraprox_ente_der = isset($_POST['infraprox_ente_der']) ? $_POST['infraprox_ente_der'] : false;
      $infraprox_ente_izq = isset($_POST['infraprox_ente_izq']) ? $_POST['infraprox_ente_izq'] : false;
      $infraprox_power_der = isset($_POST['infraprox_power_der']) ? $_POST['infraprox_power_der'] : false;
      $infraprox_power_izq = isset($_POST['infraprox_power_izq']) ? $_POST['infraprox_power_izq'] : false;
      $infradis_camb_der = isset($_POST['infradis_camb_der']) ? $_POST['infradis_camb_der'] : false;
      $infradis_camb_izq = isset($_POST['infradis_camb_izq']) ? $_POST['infradis_camb_izq'] : false;
      $infradis_engro_der = isset($_POST['infradis_engro_der']) ? $_POST['infradis_engro_der'] : false;
      $infradis_engro_izq = isset($_POST['infradis_engro_izq']) ? $_POST['infradis_engro_izq'] : false;
      $infradis_calci_der = isset($_POST['infradis_calci_der']) ? $_POST['infradis_calci_der'] : false;
      $infradis_calci_izq = isset($_POST['infradis_calci_izq']) ? $_POST['infradis_calci_izq'] : false;
      $infradis_ente_der = isset($_POST['infradis_ente_der']) ? $_POST['infradis_ente_der'] : false;
      $infradis_ente_izq = isset($_POST['infradis_ente_izq']) ? $_POST['infradis_ente_izq'] : false;
      $infradis_power_der = isset($_POST['infradis_power_der']) ? $_POST['infradis_power_der'] : false;
      $infradis_power_izq = isset($_POST['infradis_power_izq']) ? $_POST['infradis_power_izq'] : false;
      $aquileo_camb_der = isset($_POST['aquileo_camb_der']) ? $_POST['aquileo_camb_der'] : false;
      $aquileo_camb_izq = isset($_POST['aquileo_camb_izq']) ? $_POST['aquileo_camb_izq'] : false;
      $aquileo_engro_der = isset($_POST['aquileo_engro_der']) ? $_POST['aquileo_engro_der'] : false;
      $aquileo_engro_izq = isset($_POST['aquileo_engro_izq']) ? $_POST['aquileo_engro_izq'] : false;
      $aquileo_calci_der = isset($_POST['aquileo_calci_der']) ? $_POST['aquileo_calci_der'] : false;
      $aquileo_calci_izq = isset($_POST['aquileo_calci_izq']) ? $_POST['aquileo_calci_izq'] : false;
      $aquileo_ente_der = isset($_POST['aquileo_ente_der']) ? $_POST['aquileo_ente_der'] : false;
      $aquileo_ente_izq = isset($_POST['aquileo_ente_izq']) ? $_POST['aquileo_ente_izq'] : false;
      $aquileo_power_der = isset($_POST['aquileo_power_der']) ? $_POST['aquileo_power_der'] : false;
      $aquileo_power_izq = isset($_POST['aquileo_power_izq']) ? $_POST['aquileo_power_izq'] : false;
      $epilat_camb_der = isset($_POST['epilat_camb_der']) ? $_POST['epilat_camb_der'] : false;
      $epilat_camb_izq = isset($_POST['epilat_camb_izq']) ? $_POST['epilat_camb_izq'] : false;
      $epilat_engro_der = isset($_POST['epilat_engro_der']) ? $_POST['epilat_engro_der'] : false;
      $epilat_engro_izq = isset($_POST['epilat_engro_izq']) ? $_POST['epilat_engro_izq'] : false;
      $epilat_calci_der = isset($_POST['epilat_calci_der']) ? $_POST['epilat_calci_der'] : false;
      $epilat_calci_izq = isset($_POST['epilat_calci_izq']) ? $_POST['epilat_calci_izq'] : false;
      $epilat_ento_der = isset($_POST['epilat_ento_der']) ? $_POST['epilat_ento_der'] : false;
      $epilat_ento_izq = isset($_POST['epilat_ento_izq']) ? $_POST['epilat_ento_izq'] : false;
      $epilat_power_der = isset($_POST['epilat_power_der']) ? $_POST['epilat_power_der'] : false;
      $epilat_power_izq = isset($_POST['epilat_power_izq']) ? $_POST['epilat_power_izq'] : false;
      $conclusion_artritis = isset($_POST['conclusion_artritis']) ? $_POST['conclusion_artritis'] : false;
      $conclusion_tendones = isset($_POST['conclusion_tendones']) ? $_POST['conclusion_tendones'] : false;
      $conclusion_entesis = isset($_POST['conclusion_entesis']) ? $_POST['conclusion_entesis'] : false;
      $conclusion_hallazgos = isset($_POST['conclusion_hallazgos']) ? $_POST['conclusion_hallazgos'] : false;
      $triceps_valor_izq = isset($_POST['triceps_valor_izq']) ? $_POST['triceps_valor_izq'] : false;
      $triceps_espesor_izq = isset($_POST['triceps_espesor_izq']) ? $_POST['triceps_espesor_izq'] : false;
      $triceps_estructura_izq = isset($_POST['triceps_estructura_izq']) ? $_POST['triceps_estructura_izq'] : false;
      $triceps_bursitis_izq = isset($_POST['triceps_bursitis_izq']) ? $_POST['triceps_bursitis_izq'] : 0;
      $triceps_erosion_izq = isset($_POST['triceps_erosion_izq']) ? $_POST['triceps_erosion_izq'] : false;
      $triceps_calc_izq = isset($_POST['triceps_calc_izq']) ? $_POST['triceps_calc_izq'] : false;
      $triceps_pwd_izq = isset($_POST['triceps_pwd_izq']) ? $_POST['triceps_pwd_izq'] : false;
      $cuadriceps_valor_izq = isset($_POST['cuadriceps_valor_izq']) ? $_POST['cuadriceps_valor_izq'] : false;
      $cuadriceps_espesor_izq = isset($_POST['cuadriceps_espesor_izq']) ? $_POST['cuadriceps_espesor_izq'] : false;
      $cuadriceps_estructura_izq = isset($_POST['cuadriceps_estructura_izq']) ? $_POST['cuadriceps_estructura_izq'] : false;
      $cuadriceps_bursitis_izq = isset($_POST['cuadriceps_bursitis_izq']) ? $_POST['cuadriceps_bursitis_izq'] : 0;
      $cuadriceps_erosion_izq = isset($_POST['cuadriceps_erosion_izq']) ? $_POST['cuadriceps_erosion_izq'] : false;
      $cuadriceps_calc_izq = isset($_POST['cuadriceps_calc_izq']) ? $_POST['cuadriceps_calc_izq'] : false;
      $cuadriceps_pwd_izq = isset($_POST['cuadriceps_pwd_izq']) ? $_POST['cuadriceps_pwd_izq'] : false;
      $patelar_prox_valor_izq = isset($_POST['patelar_prox_valor_izq']) ? $_POST['patelar_prox_valor_izq'] : false;
      $patelar_prox_espesor_izq = isset($_POST['patelar_prox_espesor_izq']) ? $_POST['patelar_prox_espesor_izq'] : false;
      $patelar_prox_estructura_izq = isset($_POST['patelar_prox_estructura_izq']) ? $_POST['patelar_prox_estructura_izq'] : false;
      $patelar_prox_bursitis_izq = isset($_POST['patelar_prox_bursitis_izq']) ? $_POST['patelar_prox_bursitis_izq'] : 0;
      $patelar_prox_erosion_izq = isset($_POST['patelar_prox_erosion_izq']) ? $_POST['patelar_prox_erosion_izq'] : false;
      $patelar_prox_calc_izq = isset($_POST['patelar_prox_calc_izq']) ? $_POST['patelar_prox_calc_izq'] : false;
      $patelar_prox_pwd_izq = isset($_POST['patelar_prox_pwd_izq']) ? $_POST['patelar_prox_pwd_izq'] : false;
      $patelar_dist_valor_izq = isset($_POST['patelar_dist_valor_izq']) ? $_POST['patelar_dist_valor_izq'] : false;
      $patelar_dist_espesor_izq = isset($_POST['patelar_dist_espesor_izq']) ? $_POST['patelar_dist_espesor_izq'] : false;
      $patelar_dist_estructura_izq = isset($_POST['patelar_dist_estructura_izq']) ? $_POST['patelar_dist_estructura_izq'] : false;
      $patelar_dist_bursitis_izq = isset($_POST['patelar_dist_bursitis_izq']) ? $_POST['patelar_dist_bursitis_izq'] : 0;
      $patelar_dist_erosion_izq = isset($_POST['patelar_dist_erosion_izq']) ? $_POST['patelar_dist_erosion_izq'] : false;
      $patelar_dist_calc_izq = isset($_POST['patelar_dist_calc_izq']) ? $_POST['patelar_dist_calc_izq'] : false;
      $patelar_dist_pwd_izq = isset($_POST['patelar_dist_pwd_izq']) ? $_POST['patelar_dist_pwd_izq'] : false;
      $aquileo_valor_izq = isset($_POST['aquileo_valor_izq']) ? $_POST['aquileo_valor_izq'] : false;
      $aquileo_espesor_izq = isset($_POST['aquileo_espesor_izq']) ? $_POST['aquileo_espesor_izq'] : false;
      $aquileo_estructura_izq = isset($_POST['aquileo_estructura_izq']) ? $_POST['aquileo_estructura_izq'] : false;
      $aquileo_bursitis_izq = isset($_POST['aquileo_bursitis_izq']) ? $_POST['aquileo_bursitis_izq'] : 0;
      $aquileo_erosion_izq = isset($_POST['aquileo_erosion_izq']) ? $_POST['aquileo_erosion_izq'] : false;
      $aquileo_calc_izq = isset($_POST['aquileo_calc_izq']) ? $_POST['aquileo_calc_izq'] : false;
      $aquileo_pwd_izq = isset($_POST['aquileo_pwd_izq']) ? $_POST['aquileo_pwd_izq'] : false;
      $fascia_plantar_valor_izq = isset($_POST['fascia_plantar_valor_izq']) ? $_POST['fascia_plantar_valor_izq'] : false;
      $fascia_plantar_espesor_izq = isset($_POST['fascia_plantar_espesor_izq']) ? $_POST['fascia_plantar_espesor_izq'] : false;
      $fascia_plantar_estructura_izq = isset($_POST['fascia_plantar_estructura_izq']) ? $_POST['fascia_plantar_estructura_izq'] : false;
      $fascia_plantar_bursitis_izq = isset($_POST['fascia_plantar_bursitis_izq']) ? $_POST['fascia_plantar_bursitis_izq'] : 0;
      $fascia_plantar_erosion_izq = isset($_POST['fascia_plantar_erosion_izq']) ? $_POST['fascia_plantar_erosion_izq'] : false;
      $fascia_plantar_calc_izq = isset($_POST['fascia_plantar_calc_izq']) ? $_POST['fascia_plantar_calc_izq'] : false;
      $fascia_plantar_pwd_izq = isset($_POST['fascia_plantar_pwd_izq']) ? $_POST['fascia_plantar_pwd_izq'] : false;
      $total_espesor_izq = isset($_POST['total_espesor_izq']) ? $_POST['total_espesor_izq'] : false;
      $total_estructura_izq = isset($_POST['total_estructura_izq']) ? $_POST['total_estructura_izq'] : false;
      $total_bursitis_izq = isset($_POST['total_bursitis_izq']) ? $_POST['total_bursitis_izq'] : 0;
      $total_erosion_izq = isset($_POST['total_erosion_izq']) ? $_POST['total_erosion_izq'] : false;
      $total_calc_izq = isset($_POST['total_calc_izq']) ? $_POST['total_calc_izq'] : false;
      $total_pwd_izq = isset($_POST['total_pwd_izq']) ? $_POST['total_pwd_izq'] : false;
      $total_izq = isset($_POST['total_izq']) ? $_POST['total_izq'] : 0;
      $triceps_valor_der = isset($_POST['triceps_valor_der']) ? $_POST['triceps_valor_der'] : false;
      $triceps_espesor_der = isset($_POST['triceps_espesor_der']) ? $_POST['triceps_espesor_der'] : false;
      $triceps_estructura_der = isset($_POST['triceps_estructura_der']) ? $_POST['triceps_estructura_der'] : false;
      $triceps_bursitis_der = isset($_POST['triceps_bursitis_der']) ? $_POST['triceps_bursitis_der'] : 0;
      $triceps_erosion_der = isset($_POST['triceps_erosion_der']) ? $_POST['triceps_erosion_der'] : false;
      $triceps_calc_der = isset($_POST['triceps_calc_der']) ? $_POST['triceps_calc_der'] : false;
      $triceps_pwd_der = isset($_POST['triceps_pwd_der']) ? $_POST['triceps_pwd_der'] : false;
      $cuadriceps_valor_der = isset($_POST['cuadriceps_valor_der']) ? $_POST['cuadriceps_valor_der'] : false;
      $cuadriceps_espesor_der = isset($_POST['cuadriceps_espesor_der']) ? $_POST['cuadriceps_espesor_der'] : false;
      $cuadriceps_estructura_der = isset($_POST['cuadriceps_estructura_der']) ? $_POST['cuadriceps_estructura_der'] : false;
      $cuadriceps_bursitis_der = isset($_POST['cuadriceps_bursitis_der']) ? $_POST['cuadriceps_bursitis_der'] : 0;
      $cuadriceps_erosion_der = isset($_POST['cuadriceps_erosion_der']) ? $_POST['cuadriceps_erosion_der'] : false;
      $cuadriceps_calc_der = isset($_POST['cuadriceps_calc_der']) ? $_POST['cuadriceps_calc_der'] : false;
      $cuadriceps_pwd_der = isset($_POST['cuadriceps_pwd_der']) ? $_POST['cuadriceps_pwd_der'] : false;
      $patelar_prox_valor_der = isset($_POST['patelar_prox_valor_der']) ? $_POST['patelar_prox_valor_der'] : false;
      $patelar_prox_espesor_der = isset($_POST['patelar_prox_espesor_der']) ? $_POST['patelar_prox_espesor_der'] : false;
      $patelar_prox_estructura_der = isset($_POST['patelar_prox_estructura_der']) ? $_POST['patelar_prox_estructura_der'] : false;
      $patelar_prox_bursitis_der = isset($_POST['patelar_prox_bursitis_der']) ? $_POST['patelar_prox_bursitis_der'] : 0;
      $patelar_prox_erosion_der = isset($_POST['patelar_prox_erosion_der']) ? $_POST['patelar_prox_erosion_der'] : false;
      $patelar_prox_calc_der = isset($_POST['patelar_prox_calc_der']) ? $_POST['patelar_prox_calc_der'] : false;
      $patelar_prox_pwd_der = isset($_POST['patelar_prox_pwd_der']) ? $_POST['patelar_prox_pwd_der'] : false;
      $patelar_dist_valor_der = isset($_POST['patelar_dist_valor_der']) ? $_POST['patelar_dist_valor_der'] : false;
      $patelar_dist_espesor_der = isset($_POST['patelar_dist_espesor_der']) ? $_POST['patelar_dist_espesor_der'] : false;
      $patelar_dist_estructura_der = isset($_POST['patelar_dist_estructura_der']) ? $_POST['patelar_dist_estructura_der'] : false;
      $patelar_dist_bursitis_der = isset($_POST['patelar_dist_bursitis_der']) ? $_POST['patelar_dist_bursitis_der'] : 0;
      $patelar_dist_erosion_der = isset($_POST['patelar_dist_erosion_der']) ? $_POST['patelar_dist_erosion_der'] : false;
      $patelar_dist_calc_der = isset($_POST['patelar_dist_calc_der']) ? $_POST['patelar_dist_calc_der'] : false;
      $patelar_dist_pwd_der = isset($_POST['patelar_dist_pwd_der']) ? $_POST['patelar_dist_pwd_der'] : false;
      $aquileo_valor_der = isset($_POST['aquileo_valor_der']) ? $_POST['aquileo_valor_der'] : false;
      $aquileo_espesor_der = isset($_POST['aquileo_espesor_der']) ? $_POST['aquileo_espesor_der'] : false;
      $aquileo_estructura_der = isset($_POST['aquileo_estructura_der']) ? $_POST['aquileo_estructura_der'] : false;
      $aquileo_bursitis_der = isset($_POST['aquileo_bursitis_der']) ? $_POST['aquileo_bursitis_der'] : 0;
      $aquileo_erosion_der = isset($_POST['aquileo_erosion_der']) ? $_POST['aquileo_erosion_der'] : false;
      $aquileo_calc_der = isset($_POST['aquileo_calc_der']) ? $_POST['aquileo_calc_der'] : false;
      $aquileo_pwd_der = isset($_POST['aquileo_pwd_der']) ? $_POST['aquileo_pwd_der'] : false;
      $fascia_plantar_valor_der = isset($_POST['fascia_plantar_valor_der']) ? $_POST['fascia_plantar_valor_der'] : false;
      $fascia_plantar_espesor_der = isset($_POST['fascia_plantar_espesor_der']) ? $_POST['fascia_plantar_espesor_der'] : false;
      $fascia_plantar_estructura_der = isset($_POST['fascia_plantar_estructura_der']) ? $_POST['fascia_plantar_estructura_der'] : false;
      $fascia_plantar_bursitis_der = isset($_POST['fascia_plantar_bursitis_der']) ? $_POST['fascia_plantar_bursitis_der'] : 0;
      $fascia_plantar_erosion_der = isset($_POST['fascia_plantar_erosion_der']) ? $_POST['fascia_plantar_erosion_der'] : false;
      $fascia_plantar_calc_der = isset($_POST['fascia_plantar_calc_der']) ? $_POST['fascia_plantar_calc_der'] : false;
      $fascia_plantar_pwd_der = isset($_POST['fascia_plantar_pwd_der']) ? $_POST['fascia_plantar_pwd_der'] : false;
      $total_espesor_der = isset($_POST['total_espesor_der']) ? $_POST['total_espesor_der'] : false;
      $total_estructura_der = isset($_POST['total_estructura_der']) ? $_POST['total_estructura_der'] : false;
      $total_bursitis_der = isset($_POST['total_bursitis_der']) ? $_POST['total_bursitis_der'] : 0;
      $total_erosion_der = isset($_POST['total_erosion_der']) ? $_POST['total_erosion_der'] : false;
      $total_calc_der = isset($_POST['total_calc_der']) ? $_POST['total_calc_der'] : false;
      $total_pwd_der = isset($_POST['total_pwd_der']) ? $_POST['total_pwd_der'] : false;
      $total_der = isset($_POST['total_der']) ? $_POST['total_der'] : false;
      $hallazgos_masei = isset($_POST['hallazgos_masei']) ? $_POST['hallazgos_masei'] : false;
      $idpaciente = isset($_POST['idpaciente']) ? $_POST['idpaciente'] : false;
      $idprograma = isset($_POST['idprograma']) ? $_POST['idprograma'] : false;

    if($radio_hiper_der>=0){
      $resultado = new Resultado();
      $resultado->setIdpaciente($idpaciente);
      $resultado->setIdprograma($idprograma);
      $resultado->setRadio_hiper_der($radio_hiper_der);
      $resultado->setRadio_hiper_izq($radio_hiper_izq);
      $resultado->setRadio_power_der($radio_power_der);
      $resultado->setRadio_power_izq($radio_power_izq);
      $resultado->setIfp2_hiper_izq($ifp2_hiper_izq);
      $resultado->setIfp2_hiper_der($ifp2_hiper_der);
      $resultado->setIfp2_power_izq($ifp2_power_izq);
      $resultado->setIfp2_power_der($ifp2_power_der);
      $resultado->setIfp3_hiper_izq($ifp3_hiper_izq);
      $resultado->setIfp3_hiper_der($ifp3_hiper_der);
      $resultado->setIfp3_power_izq($ifp3_power_izq);
      $resultado->setIfp3_power_der($ifp3_power_der);
      $resultado->setIfp4_hiper_izq($ifp4_hiper_izq);
      $resultado->setIfp4_hiper_der($ifp4_hiper_der);
      $resultado->setIfp4_power_izq($ifp4_power_izq);
      $resultado->setIfp4_power_der($ifp4_power_der);
      $resultado->setIfp5_hiper_izq($ifp5_hiper_izq);
      $resultado->setIfp5_hiper_der($ifp5_hiper_der);
      $resultado->setIfp5_power_izq($ifp5_power_izq);
      $resultado->setIfp5_power_der($ifp5_power_der);
      $resultado->setRrl_hiper_izq($rrl_hiper_izq);
      $resultado->setRrl_hiper_der($rrl_hiper_der);
      $resultado->setRrl_power_izq($rrl_power_izq);
      $resultado->setRrl_power_der($rrl_power_der);
      $resultado->setFlexlong_2_derrame_der($flexlong_2_derrame_der);
      $resultado->setFlexlong_2_power_der($flexlong_2_power_der);
      $resultado->setFlexlong_2_derrame_izq($flexlong_2_derrame_izq);
      $resultado->setFlexlong_2_power_izq($flexlong_2_power_izq);
      $resultado->setFlexlong_3_derrame_der($flexlong_3_derrame_der);
      $resultado->setFlexlong_3_power_der($flexlong_3_power_der);
      $resultado->setFlexlong_3_derrame_izq($flexlong_3_derrame_izq);
      $resultado->setFlexlong_3_power_izq($flexlong_3_power_izq);
      $resultado->setFlexlong_4_derrame_der($flexlong_4_derrame_der);
      $resultado->setFlexlong_4_power_der($flexlong_4_power_der);
      $resultado->setFlexlong_4_derrame_izq($flexlong_4_derrame_izq);
      $resultado->setFlexlong_4_power_izq($flexlong_4_power_izq);
      $resultado->setFlexlong_5_derrame_der($flexlong_5_derrame_der);
      $resultado->setFlexlong_5_power_der($flexlong_5_power_der);
      $resultado->setFlexlong_5_derrame_izq($flexlong_5_derrame_izq);
      $resultado->setFlexlong_5_power_izq($flexlong_5_power_izq);
      $resultado->setExtlong_2_derrame_der($extlong_2_derrame_der);
      $resultado->setExtlong_2_power_der($extlong_2_power_der);
      $resultado->setExtlong_2_derrame_izq($extlong_2_derrame_izq);
      $resultado->setExtlong_2_power_izq($extlong_2_power_izq);
      $resultado->setExtlong_3_derrame_der($extlong_3_derrame_der);
      $resultado->setExtlong_3_power_der($extlong_3_power_der);
      $resultado->setExtlong_3_derrame_izq($extlong_3_derrame_izq);
      $resultado->setExtlong_3_power_izq($extlong_3_power_izq);
      $resultado->setExtlong_4_derrame_der($extlong_4_derrame_der);
      $resultado->setExtlong_4_power_der($extlong_4_power_der);
      $resultado->setExtlong_4_derrame_izq($extlong_4_derrame_izq);
      $resultado->setExtlong_4_power_izq($extlong_4_power_izq);
      $resultado->setExtlong_5_derrame_der($extlong_5_derrame_der);
      $resultado->setExtlong_5_power_der($extlong_5_power_der);
      $resultado->setExtlong_5_derrame_izq($extlong_5_derrame_izq);
      $resultado->setExtlong_5_power_izq($extlong_5_power_izq);
      $resultado->setExtran_2_derrame_der($extran_2_derrame_der);
      $resultado->setExtran_2_power_der($extran_2_power_der);
      $resultado->setExtran_2_derrame_izq($extran_2_derrame_izq);
      $resultado->setExtran_2_power_izq($extran_2_power_izq);
      $resultado->setInfraprox_camb_der($infraprox_camb_der);
      $resultado->setInfraprox_camb_izq($infraprox_camb_izq);
      $resultado->setInfraprox_engro_der($infraprox_engro_der);
      $resultado->setInfraprox_engro_izq($infraprox_engro_izq);
      $resultado->setInfraprox_calci_der($infraprox_calci_der);
      $resultado->setInfraprox_calci_izq($infraprox_calci_izq);
      $resultado->setInfraprox_ente_der($infraprox_ente_der);
      $resultado->setInfraprox_ente_izq($infraprox_ente_izq);
      $resultado->setInfraprox_power_der($infraprox_power_der);
      $resultado->setInfraprox_power_izq($infraprox_power_izq);
      $resultado->setInfradis_camb_der($infradis_camb_der);
      $resultado->setInfradis_camb_izq($infradis_camb_izq);
      $resultado->setInfradis_engro_der($infradis_engro_der);
      $resultado->setInfradis_engro_izq($infradis_engro_izq);
      $resultado->setInfradis_calci_der($infradis_calci_der);
      $resultado->setInfradis_calci_izq($infradis_calci_izq);
      $resultado->setInfradis_ente_der($infradis_ente_der);
      $resultado->setInfradis_ente_izq($infradis_ente_izq);
      $resultado->setInfradis_power_der($infradis_power_der);
      $resultado->setInfradis_power_izq($infradis_power_izq);
      $resultado->setAquileo_camb_der($aquileo_camb_der);
      $resultado->setAquileo_camb_izq($aquileo_camb_izq);
      $resultado->setAquileo_engro_der($aquileo_engro_der);
      $resultado->setAquileo_engro_izq($aquileo_engro_izq);
      $resultado->setAquileo_calci_der($aquileo_calci_der);
      $resultado->setAquileo_calci_izq($aquileo_calci_izq);
      $resultado->setAquileo_ente_der($aquileo_ente_der);
      $resultado->setAquileo_ente_izq($aquileo_ente_izq);
      $resultado->setAquileo_power_der($aquileo_power_der);
      $resultado->setAquileo_power_izq($aquileo_power_izq);
      $resultado->setEpilat_camb_der($epilat_camb_der);
      $resultado->setEpilat_camb_izq($epilat_camb_izq);
      $resultado->setEpilat_engro_der($epilat_engro_der);
      $resultado->setEpilat_engro_izq($epilat_engro_izq);
      $resultado->setEpilat_calci_der($epilat_calci_der);
      $resultado->setEpilat_calci_izq($epilat_calci_izq);
      $resultado->setEpilat_ento_der($epilat_ento_der);
      $resultado->setEpilat_ento_izq($epilat_ento_izq);
      $resultado->setEpilat_power_der($epilat_power_der);
      $resultado->setEpilat_power_izq($epilat_power_izq);
      $resultado->setConclusion_artritis($conclusion_artritis);
      $resultado->setConclusion_tendones($conclusion_tendones);
      $resultado->setConclusion_entesis($conclusion_entesis);
      $resultado->setConclusion_hallazgos($conclusion_hallazgos);
      $resultado->setTriceps_valor_izq($triceps_valor_izq);
      $resultado->setTriceps_espesor_izq($triceps_espesor_izq);
      $resultado->setTriceps_estructura_izq($triceps_estructura_izq);
      $resultado->setTriceps_bursitis_izq($triceps_bursitis_izq);
      $resultado->setTriceps_erosion_izq($triceps_erosion_izq);
      $resultado->setTriceps_calc_izq($triceps_calc_izq);
      $resultado->setTriceps_pwd_izq($triceps_pwd_izq);
      $resultado->setCuadriceps_valor_izq($cuadriceps_valor_izq);
      $resultado->setCuadriceps_espesor_izq($cuadriceps_espesor_izq);
      $resultado->setCuadriceps_estructura_izq($cuadriceps_estructura_izq);
      $resultado->setCuadriceps_bursitis_izq($cuadriceps_bursitis_izq);
      $resultado->setCuadriceps_erosion_izq($cuadriceps_erosion_izq);
      $resultado->setCuadriceps_calc_izq($cuadriceps_calc_izq);
      $resultado->setCuadriceps_pwd_izq($cuadriceps_pwd_izq);
      $resultado->setPatelar_prox_valor_izq($patelar_prox_valor_izq);
      $resultado->setPatelar_prox_espesor_izq($patelar_prox_espesor_izq);
      $resultado->setPatelar_prox_estructura_izq($patelar_prox_estructura_izq);
      $resultado->setPatelar_prox_bursitis_izq($patelar_prox_bursitis_izq);
      $resultado->setPatelar_prox_erosion_izq($patelar_prox_erosion_izq);
      $resultado->setPatelar_prox_calc_izq($patelar_prox_calc_izq);
      $resultado->setPatelar_prox_pwd_izq($patelar_prox_pwd_izq);
      $resultado->setPatelar_dist_valor_izq($patelar_dist_valor_izq);
      $resultado->setPatelar_dist_espesor_izq($patelar_dist_espesor_izq);
      $resultado->setPatelar_dist_estructura_izq($patelar_dist_estructura_izq);
      $resultado->setPatelar_dist_bursitis_izq($patelar_dist_bursitis_izq);
      $resultado->setPatelar_dist_erosion_izq($patelar_dist_erosion_izq);
      $resultado->setPatelar_dist_calc_izq($patelar_dist_calc_izq);
      $resultado->setPatelar_dist_pwd_izq($patelar_dist_pwd_izq);
      $resultado->setAquileo_valor_izq($aquileo_valor_izq);
      $resultado->setAquileo_espesor_izq($aquileo_espesor_izq);
      $resultado->setAquileo_estructura_izq($aquileo_estructura_izq);
      $resultado->setAquileo_bursitis_izq($aquileo_bursitis_izq);
      $resultado->setAquileo_erosion_izq($aquileo_erosion_izq);
      $resultado->setAquileo_calc_izq($aquileo_calc_izq);
      $resultado->setAquileo_pwd_izq($aquileo_pwd_izq);
      $resultado->setFascia_plantar_valor_izq($fascia_plantar_valor_izq);
      $resultado->setFascia_plantar_espesor_izq($fascia_plantar_espesor_izq);
      $resultado->setFascia_plantar_estructura_izq($fascia_plantar_estructura_izq);
      $resultado->setFascia_plantar_bursitis_izq($fascia_plantar_bursitis_izq);
      $resultado->setFascia_plantar_erosion_izq($fascia_plantar_erosion_izq);
      $resultado->setFascia_plantar_calc_izq($fascia_plantar_calc_izq);
      $resultado->setFascia_plantar_pwd_izq($fascia_plantar_pwd_izq);
      $resultado->setTotal_espesor_izq($total_espesor_izq);
      $resultado->setTotal_estructura_izq($total_estructura_izq);
      $resultado->setTotal_bursitis_izq($total_bursitis_izq);
      $resultado->setTotal_erosion_izq($total_erosion_izq);
      $resultado->setTotal_calc_izq($total_calc_izq);
      $resultado->setTotal_pwd_izq($total_pwd_izq);
      $resultado->setTotal_izq($total_izq);
      $resultado->setTriceps_valor_der($triceps_valor_der);
      $resultado->setTriceps_espesor_der($triceps_espesor_der);
      $resultado->setTriceps_estructura_der($triceps_estructura_der);
      $resultado->setTriceps_bursitis_der($triceps_bursitis_der);
      $resultado->setTriceps_erosion_der($triceps_erosion_der);
      $resultado->setTriceps_calc_der($triceps_calc_der);
      $resultado->setTriceps_pwd_der($triceps_pwd_der);
      $resultado->setCuadriceps_valor_der($cuadriceps_valor_der);
      $resultado->setCuadriceps_espesor_der($cuadriceps_espesor_der);
      $resultado->setCuadriceps_estructura_der($cuadriceps_estructura_der);
      $resultado->setCuadriceps_bursitis_der($cuadriceps_bursitis_der);
      $resultado->setCuadriceps_erosion_der($cuadriceps_erosion_der);
      $resultado->setCuadriceps_calc_der($cuadriceps_calc_der);
      $resultado->setCuadriceps_pwd_der($cuadriceps_pwd_der);
      $resultado->setPatelar_prox_valor_der($patelar_prox_valor_der);
      $resultado->setPatelar_prox_espesor_der($patelar_prox_espesor_der);
      $resultado->setPatelar_prox_estructura_der($patelar_prox_estructura_der);
      $resultado->setPatelar_prox_bursitis_der($patelar_prox_bursitis_der);
      $resultado->setPatelar_prox_erosion_der($patelar_prox_erosion_der);
      $resultado->setPatelar_prox_calc_der($patelar_prox_calc_der);
      $resultado->setPatelar_prox_pwd_der($patelar_prox_pwd_der);
      $resultado->setPatelar_dist_valor_der($patelar_dist_valor_der);
      $resultado->setPatelar_dist_espesor_der($patelar_dist_espesor_der);
      $resultado->setPatelar_dist_estructura_der($patelar_dist_estructura_der);
      $resultado->setPatelar_dist_bursitis_der($patelar_dist_bursitis_der);
      $resultado->setPatelar_dist_erosion_der($patelar_dist_erosion_der);
      $resultado->setPatelar_dist_calc_der($patelar_dist_calc_der);
      $resultado->setPatelar_dist_pwd_der($patelar_dist_pwd_der);
      $resultado->setAquileo_valor_der($aquileo_valor_der);
      $resultado->setAquileo_espesor_der($aquileo_espesor_der);
      $resultado->setAquileo_estructura_der($aquileo_estructura_der);
      $resultado->setAquileo_bursitis_der($aquileo_bursitis_der);
      $resultado->setAquileo_erosion_der($aquileo_erosion_der);
      $resultado->setAquileo_calc_der($aquileo_calc_der);
      $resultado->setAquileo_pwd_der($aquileo_pwd_der);
      $resultado->setFascia_plantar_valor_der($fascia_plantar_valor_der);
      $resultado->setFascia_plantar_espesor_der($fascia_plantar_espesor_der);
      $resultado->setFascia_plantar_estructura_der($fascia_plantar_estructura_der);
      $resultado->setFascia_plantar_bursitis_der($fascia_plantar_bursitis_der);
      $resultado->setFascia_plantar_erosion_der($fascia_plantar_erosion_der);
      $resultado->setFascia_plantar_calc_der($fascia_plantar_calc_der);
      $resultado->setFascia_plantar_pwd_der($fascia_plantar_pwd_der);
      $resultado->setTotal_espesor_der($total_espesor_der);
      $resultado->setTotal_estructura_der($total_estructura_der);
      $resultado->setTotal_bursitis_der($total_bursitis_der);
      $resultado->setTotal_erosion_der($total_erosion_der);
      $resultado->setTotal_calc_der($total_calc_der);
      $resultado->setTotal_pwd_der($total_pwd_der);
      $resultado->setTotal_der($total_der);
      $resultado->setHallazgos_masei($hallazgos_masei);

      // Guardar resultados
      if(isset($_FILES['resultado_archivo'])){
        $file = $_FILES['resultado_archivo'];
        $file_name = $_FILES['resultado_archivo']['name'];
        $mimetype = $_FILES['resultado_archivo']['type'];

        if ($mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype == 'image/png') {

            if (!is_dir('uploads/resultados/imgs')) {
              mkdir('uploads/resultados/imgs', 0777, true);
            }
            move_uploaded_file($file['tmp_name'], 'uploads/resultados/imgs/'.$file_name);
            $resultado->setResultadoarchivo($file_name);
            //echo var_dump($paciente);
            //die();
        }
      }

        if(isset($_GET['id'])){
          $id = $_GET['id'];
          $resultado->setIdresultado($id);
          $save = $resultado->editar();
        }else{
        $save = $resultado->save();
        }

        if ($save) {
          $_SESSION['register'] = "complete";
        }else {
          $_SESSION['register'] = "failed";
        }
      }else{
        $_SESSION['register'] = "failed";
      }
    }else {
      $_SESSION['register'] = "failed";
    }

    header("Location:".base_url.'?controller=ResultadoController&action=gestion');

  } //FIN SAVE


  public function generatePDF(){
    require_once 'plugins/tcpdf_min/tcpdf.php';
         if (isset($_GET['id'])) {
         $id = $_GET['id'];
         $resultado = new Resultado();
         $resultado->setIdresultado($id);
         $res = $resultado->getOne();
         }

   // create new PDF document
   $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
         // set document information
         $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

         // set document information
         $pdf->SetCreator(PDF_CREATOR);
         $pdf->SetAuthor('Nicola Asuni');
         $pdf->SetTitle('Folio: '.$res->folio_paciente);
         $pdf->SetSubject('TCPDF Tutorial');
         $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

         // remove default header/footer
         $pdf->setPrintHeader(false);
         $pdf->setPrintFooter(false);

         // set default monospaced font
         $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

         // set margins
         $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

         // set auto page breaks
         $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

         // set image scale factor
         $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

         // ---------------------------------------------------------

         // set font
         $pdf->SetFont('times', '', 10);

         // add a page
         $pdf->AddPage();

         // set some text to print
         $txt ='
         <style>
         .derecha{
           text-align: right;
         }
         .centrar{
           text-align: center;
         }
         </style>
         <table>
         <tbody>
          <tr>
           <td><img src="public/images/Logo_MDT.jpg" alt="MDT" width="170" height="70"></td>
           <td class="derecha">Folio de reporte: MDT-28</td>
          </tr>
          </tbody>
         </table>
         <h2>Reporte de resultados</h2>
         <hr>
         <table BGCOLOR="#f3f3f3" cellpadding="2" cellspacing="0">
          <tbody>
           <tr>
           <td>Paciente:</td>
           <td>'.$res->nombre_paciente.'</td>
           </tr>
           <tr>
           <td>Folio:</td>
           <td>'.$res->folio_paciente.'</td>
           </tr>
           <tr>
           <td>Número de activación:</td>
           <td>kejrgyu23ig</td>
           </tr>
          </tbody>
         </table>
         <hr>
         ';

         $pdf->writeHTML($txt, true, false, true, false, '');

         if($res->tipo_estudio == 'PSA'){
         $txt ='
         <h2>Reporte de resultados</h2>
         <table style="margin: 0 auto;" cellpadding="2" cellspacing="2">
          <tbody>
           <tr>
            <td></td>
            <td></td>
            <td class="centrar" colspan="2"><h3>Articulaciones</h3></td>
           </tr>
           <tr align="center">
           <td></td>
           <td></td>
           <td style="background-color: #f3f3f3;">Derecha</td>
           <td style="background-color: #f3f3f3;">Izquierda</td>
           </tr>
           <tr>
           <td>Radiosemilunar</td>
           <td>Hipertrofia sinovial</td>

           <td class="centrar">'.($res->radio_hiper_der == "" ? " " : ($res->radio_hiper_der == 0  || $res->radio_hiper_der == 1 ? "Si" : "No")).'</td>
           <td class="centrar">'.($res->radio_hiper_izq == "" ? " " : ($res->radio_hiper_izq == 0  || $res->radio_hiper_izq == 1 ? "Si" : "No")).'</td>
           </tr>
           <tr>
           <td></td>
           <td>Power Doppler</td>
           <td class="centrar">'.($res->radio_power_der == "" ? " " : ($res->radio_power_der == 0 || $res->radio_power_der == 1 ? "Si" : "No")).'</td>
           <td class="centrar">'.($res->radio_power_izq == "" ? " " : ($res->radio_power_izq == 0 || $res->radio_power_izq == 1 ? "Si" : "No")).'</td>
           </tr>
           <tr>
           <td>2IFP</td>
           <td>Hipertrofia sinovial</td>
           <td class="centrar">'.($res->ifp2_hiper_der == "" ? " " : ($res->ifp2_hiper_der == 0 || $res->ifp2_hiper_der == 1 ? "Si" : "No")).'</td>
           <td class="centrar">'.($res->ifp2_hiper_izq == "" ? " " : ($res->ifp2_hiper_izq == 0 || $res->ifp2_hiper_izq == 1 ? "Si" : "No")).'</td>
           </tr>
           <tr>
           <td></td>
           <td>Power Doppler</td>
           <td class="centrar">'.($res->ifp2_power_der == "" ? " " : ($res->ifp2_power_der == 0 || $res->ifp2_power_der == 1 ? "Si" : "No")).'</td>
           <td class="centrar">'.($res->ifp2_power_izq == "" ? " " : ($res->ifp2_power_izq == 0 || $res->ifp2_power_izq == 1 ? "Si" : "No")).'</td>
           </tr>
           <tr>
           <td>3IFP</td>
           <td>Hipertrofia sinovial</td>
           <td class="centrar">'.($res->ifp3_hiper_der == "" ? " " : ($res->ifp3_hiper_der == 0 || $res->ifp3_hiper_der == 1 ? "Si" : "No")).'</td>
           <td class="centrar">'.($res->ifp3_hiper_izq == "" ? " " : ($res->ifp3_hiper_izq == 0 || $res->ifp3_hiper_izq == 1 ? "Si" : "No")).'</td>
           </tr>
           <tr>
           <td></td>
           <td>Power Doppler</td>
           <td class="centrar">'.($res->ifp3_power_der == "" ? " " : ($res->ifp3_power_der == 0 || $res->ifp3_power_der == 1 ? "Si" : "No")).'</td>
           <td class="centrar">'.($res->ifp3_power_izq == "" ? " " : ($res->ifp3_power_izq == 0 || $res->ifp3_power_izq == 1 ? "Si" : "No")).'</td>
           </tr>
           <tr>
           <td>4IFP</td>
           <td>Hipertrofia sinovial</td>
           <td class="centrar">'.($res->ifp4_hiper_der == "" ? " " : ($res->ifp4_hiper_der == 0 || $res->ifp4_hiper_der == 1 ? "Si" : "No")).'</td>
           <td class="centrar">'.($res->ifp4_hiper_izq == "" ? " " : ($res->ifp4_hiper_izq == 0 || $res->ifp4_hiper_izq == 1 ? "Si" : "No")).'</td>
           </tr>
           <tr>
           <td></td>
           <td>Power Doppler</td>
           <td class="centrar">'.($res->ifp4_power_der == "" ? " " : ($res->ifp4_power_der == 0 || $res->ifp4_power_der == 1 ? "Si" : "No")).'</td>
           <td class="centrar">'.($res->ifp4_power_izq == "" ? " " : ($res->ifp4_power_izq == 0 || $res->ifp4_power_izq == 1 ? "Si" : "No")).'</td>
           </tr>
           <tr>
           <td>5IFP</td>
           <td>Hipertrofia sinovial</td>
           <td class="centrar">'.($res->ifp5_hiper_der == "" ? " " : ($res->ifp5_hiper_der == 0 || $res->ifp5_hiper_der == 1 ? "Si" : "No")).'</td>
           <td class="centrar">'.($res->ifp5_hiper_izq == "" ? " " : ($res->ifp5_hiper_izq == 0 || $res->ifp5_hiper_izq == 1 ? "Si" : "No")).'</td>
           </tr>
           <tr>
           <td></td>
           <td>Power Doppler</td>
           <td class="centrar">'.($res->ifp5_power_der == "" ? " " : ($res->ifp5_power_der == 0 || $res->ifp5_power_der == 1 ? "Si" : "No")).'</td>
           <td class="centrar">'.($res->ifp5_power_izq == "" ? " " : ($res->ifp5_power_izq == 0 || $res->ifp5_power_izq == 1 ? "Si" : "No")).'</td>
           </tr>
           <tr>
           <td>Rodilla</td>
           <td>Hipertrofia sinovial</td>
           <td class="centrar">'.($res->rrl_hiper_der == "" ? " " : ($res->rrl_hiper_der == 0 || $res->rrl_hiper_der == 1 ? "Si" : "No")).'</td>
           <td class="centrar">'.($res->rrl_hiper_izq == "" ? " " : ($res->rrl_hiper_izq == 0 || $res->rrl_hiper_izq == 1 ? "Si" : "No")).'</td>
           </tr>
           <tr>
           <td>Receso lateral</td>
           <td>Power Doppler</td>
           <td class="centrar">'.($res->rrl_power_der == "" ? " " : ($res->rrl_power_der == 0 || $res->rrl_power_der == 1 ? "Si" : "No")).'</td>
           <td class="centrar">'.($res->rrl_power_izq == "" ? " " : ($res->rrl_power_izq == 0 || $res->rrl_power_izq == 1 ? "Si" : "No")).'</td>
           </tr>
          </tbody>
         </table>
         <hr>
         <p></p>
         <table style="margin: 0 auto;" cellpadding="2" cellspacing="2">
          <tbody>
          <tr>
            <td></td>
            <td></td>
            <td class="centrar" colspan="2"><h3>Tendones</h3></td>
            <td></td>
           </tr>
           <tr align="center">
           <td></td>
           <td colspan="2" style="background-color: #f3f3f3;">Derecha</td>
           <td colspan="2" style="background-color: #f3f3f3;">Izquierda</td>
           </tr>
           <tr>
           <td>Flexores (longitudinal)</td>
           <td class="centrar">Derrame</td>
           <td class="centrar">Power Doppler</td>
           <td class="centrar">Derrame</td>
           <td class="centrar">Power Doppler</td>
           </tr>
           <tr>
           <td>2 flexor</td>
           <td class="centrar">'.$res->flexlong_2_derrame_der.'</td>
           <td class="centrar">'.$res->flexlong_2_power_der.'</td>
           <td class="centrar">'.$res->flexlong_2_derrame_izq.'</td>
           <td class="centrar">'.$res->flexlong_2_power_izq.'</td>
           </tr>
           <tr>
           <td>3 flexor</td>
           <td class="centrar">'.$res->flexlong_3_derrame_der.'</td>
           <td class="centrar">'.$res->flexlong_3_power_der.'</td>
           <td class="centrar">'.$res->flexlong_3_derrame_izq.'</td>
           <td class="centrar">'.$res->flexlong_3_power_izq.'</td>
           </tr>
           <tr>
           <td>4 flexor</td>
           <td class="centrar">'.$res->flexlong_4_derrame_der.'</td>
           <td class="centrar">'.$res->flexlong_4_power_der.'</td>
           <td class="centrar">'.$res->flexlong_4_derrame_izq.'</td>
           <td class="centrar">'.$res->flexlong_4_power_izq.'</td>
           </tr>
           <tr>
           <td>5 flexor</td>
           <td class="centrar">'.$res->flexlong_5_derrame_der.'</td>
           <td class="centrar">'.$res->flexlong_5_power_der.'</td>
           <td class="centrar">'.$res->flexlong_5_derrame_izq.'</td>
           <td class="centrar">'.$res->flexlong_5_power_izq.'</td>
           </tr>
           <tr>
           <td>Extensores (longitudinal)</td>
           <td class="centrar">Inflamación de peritenon</td>
           <td class="centrar">Power Doppler</td>
           <td class="centrar">Derrame</td>
           <td class="centrar">Power Doppler</td>
           </tr>
           <tr>
           <td>2 flexor</td>
           <td class="centrar">'.$res->extlong_2_derrame_der.'</td>
           <td class="centrar">'.$res->extlong_2_power_der.'</td>
           <td class="centrar">'.$res->extlong_2_derrame_izq.'</td>
           <td class="centrar">'.$res->extlong_2_power_izq.'</td>
           </tr>
           <tr>
           <td>3 flexor</td>
           <td class="centrar">'.$res->extlong_3_derrame_der.'</td>
           <td class="centrar">'.$res->extlong_3_power_der.'</td>
           <td class="centrar">'.$res->extlong_3_derrame_izq.'</td>
           <td class="centrar">'.$res->extlong_3_power_izq.'</td>
           </tr>
           <tr>
           <td>4 flexor</td>
           <td class="centrar">'.$res->extlong_4_derrame_der.'</td>
           <td class="centrar">'.$res->extlong_4_power_der.'</td>
           <td class="centrar">'.$res->extlong_4_derrame_izq.'</td>
           <td class="centrar">'.$res->extlong_4_power_izq.'</td>
           </tr>
          </tbody>
         </table>
         <p>Hallazgos</p>
         <p>'.$res->conclusion_hallazgos.'</p>
         ';
         // print a block of text using Write()
         $pdf->writeHTML($txt, true, false, true, false, '');
        }
         else{
         $pdf->SetFont('times', '', 10);
         //$pdf->AddPage();

         $txt = '
         <style>
         .centrar{
           text-align: center;
         }

         </style>

         <h3 style="text-align:center">MASEI</h3>
         <h4>Izquierda</h4>
         <table>
          <tbody>
           <tr>
           <td></td>
           <td class="centrar">Ref(mm)</td>
           <td class="centrar">Valor</td>
           <td class="centrar">Espesor</td>
           <td class="centrar">Estructura</td>
           <td class="centrar">Bursitis</td>
           <td class="centrar">Erosión</td>
           <td class="centrar">Calificacion</td>
           <td class="centrar">PWD</td>
           </tr>
           <tr>
           <td>Tríceps</td>
           <td class="centrar">'.$res->triceps_valor_izq.'</td>
           <td class="centrar">'.$res->triceps_espesor_izq.'</td>
           <td class="centrar">'.$res->triceps_estructura_izq.'</td>
           <td class="centrar">NA</td>
           <td class="centrar">'.$res->triceps_erosion_izq.'</td>
           <td class="centrar">'.$res->triceps_calc_izq.'</td>
           <td class="centrar">'.$res->triceps_pwd_izq.'</td>
           </tr>
           <tr>
           <td>Cuadríceps</td>
           <td class="centrar">'.$res->cuadriceps_valor_izq.'</td>
           <td class="centrar">'.$res->cuadriceps_espesor_izq.'</td>
           <td class="centrar">'.$res->cuadriceps_estructura_izq.'</td>
           <td class="centrar">NA</td>
           <td class="centrar">'.$res->cuadriceps_erosion_izq.'</td>
           <td class="centrar">'.$res->cuadriceps_calc_izq.'</td>
           <td class="centrar">'.$res->cuadriceps_pwd_izq.'</td>
           </tr>
           <tr>
           <td>Patelar proximal</td>
           <td class="centrar">'.$res->patelar_prox_valor_izq.'</td>
           <td class="centrar">'.$res->patelar_prox_espesor_izq.'</td>
           <td class="centrar">'.$res->patelar_prox_estructura_izq.'</td>
           <td class="centrar">NA</td>
           <td class="centrar">'.$res->patelar_prox_erosion_izq.'</td>
           <td class="centrar">'.$res->patelar_prox_calc_izq.'</td>
           <td class="centrar">'.$res->patelar_prox_pwd_izq.'</td>
           </tr>
           <tr>
           <td>Patelar distal</td>
           <td class="centrar">'.$res->patelar_dist_valor_izq.'</td>
           <td class="centrar">'.$res->patelar_dist_espesor_izq.'</td>
           <td class="centrar">'.$res->patelar_dist_estructura_izq.'</td>
           <td class="centrar">'.$res->patelar_dist_bursitis_izq.'</td>
           <td class="centrar">'.$res->patelar_dist_erosion_izq.'</td>
           <td class="centrar">'.$res->patelar_dist_calc_izq.'</td>
           <td class="centrar">'.$res->patelar_dist_pwd_izq.'</td>
           </tr>
           <tr>
           <td>Aquíleo</td>
           <td class="centrar">'.$res->aquileo_valor_izq.'</td>
           <td class="centrar">'.$res->aquileo_espesor_izq.'</td>
           <td class="centrar">'.$res->aquileo_estructura_izq.'</td>
           <td class="centrar">'.$res->aquileo_bursitis_izq.'</td>
           <td class="centrar">'.$res->aquileo_erosion_izq.'</td>
           <td class="centrar">'.$res->aquileo_calc_izq.'</td>
           <td class="centrar">'.$res->aquileo_pwd_izq.'</td>
           </tr>
           <tr>
           <td>Fascia plantar</td>
           <td class="centrar">'.$res->fascia_plantar_valor_izq.'</td>
           <td class="centrar">'.$res->fascia_plantar_espesor_izq.'</td>
           <td class="centrar">'.$res->fascia_plantar_estructura_izq.'</td>
           <td class="centrar">NA</td>
           <td class="centrar">'.$res->fascia_plantar_erosion_izq.'</td>
           <td class="centrar">'.$res->fascia_plantar_calc_izq.'</td>
           <td class="centrar">'.$res->fascia_plantar_pwd_izq.'</td>
           </tr>
           <tr>
           <td>Score</td>
           <td class="centrar"></td>
           <td class="centrar">'.$res->total_espesor_izq.'</td>
           <td class="centrar">'.$res->total_estructura_izq.'</td>
           <td class="centrar">'.$res->total_bursitis_izq.'</td>
           <td class="centrar">'.$res->total_erosion_izq.'</td>
           <td class="centrar">'.$res->total_calc_izq.'</td>
           <td class="centrar">'.$res->total_pwd_izq.'</td>
           </tr>
           </table>
           <h4>Total: '.$res->total_izq.'</h4>
           <p></p>
           <p></p>
           <h4>Derecha</h4>
           <table>
           <tbody>
            <tr>
            <td></td>
            <td class="centrar">Ref(mm)</td>
            <td class="centrar">Valor</td>
            <td class="centrar">Espesor</td>
            <td class="centrar">Estructura</td>
            <td class="centrar">Bursitis</td>
            <td class="centrar">Erosión</td>
            <td class="centrar">Calificacion</td>
            <td class="centrar">PWD</td>
            </tr>
            <tr>
            <td>Tríceps</td>
            <td class="centrar">'.$res->triceps_valor_der.'</td>
            <td class="centrar">'.$res->triceps_espesor_der.'</td>
            <td class="centrar">'.$res->triceps_estructura_der.'</td>
            <td class="centrar">NA</td>
            <td class="centrar">'.$res->triceps_erosion_der.'</td>
            <td class="centrar">'.$res->triceps_calc_der.'</td>
            <td class="centrar">'.$res->triceps_pwd_der.'</td>
            </tr>
            <tr>
            <td class="centrar">Cuadríceps</td>
            <td class="centrar">'.$res->cuadriceps_valor_der.'</td>
            <td class="centrar">'.$res->cuadriceps_espesor_der.'</td>
            <td class="centrar">'.$res->cuadriceps_estructura_der.'</td>
            <td class="centrar">NA</td>
            <td class="centrar">'.$res->cuadriceps_erosion_der.'</td>
            <td class="centrar">'.$res->cuadriceps_calc_der.'</td>
            <td class="centrar">'.$res->cuadriceps_pwd_der.'</td>
            </tr>
            <tr>
            <td>Patelar proximal</td>
            <td class="centrar">'.$res->patelar_prox_valor_der.'</td>
            <td class="centrar">'.$res->patelar_prox_espesor_der.'</td>
            <td class="centrar">'.$res->patelar_prox_estructura_der.'</td>
            <td class="centrar">NA</td>
            <td class="centrar">'.$res->patelar_prox_erosion_der.'</td>
            <td class="centrar">'.$res->patelar_prox_calc_der.'</td>
            <td class="centrar">'.$res->patelar_prox_pwd_der.'</td>
            </tr>
            <tr>
            <td>Patelar distal</td>
            <td class="centrar">'.$res->patelar_dist_valor_der.'</td>
            <td class="centrar">'.$res->patelar_dist_espesor_der.'</td>
            <td class="centrar">'.$res->patelar_dist_estructura_der.'</td>
            <td class="centrar">'.$res->patelar_dist_bursitis_der.'</td>
            <td class="centrar">'.$res->patelar_dist_erosion_der.'</td>
            <td class="centrar">'.$res->patelar_dist_calc_der.'</td>
            <td class="centrar">'.$res->patelar_dist_pwd_der.'</td>
            </tr>
            <tr>
            <td>Aquíleo</td>
            <td class="centrar">'.$res->aquileo_valor_der.'</td>
            <td class="centrar">'.$res->aquileo_espesor_der.'</td>
            <td class="centrar">'.$res->aquileo_estructura_der.'</td>
            <td class="centrar">'.$res->aquileo_bursitis_der.'</td>
            <td class="centrar">'.$res->aquileo_erosion_der.'</td>
            <td class="centrar">'.$res->aquileo_calc_der.'</td>
            <td class="centrar">'.$res->aquileo_pwd_der.'</td>
            </tr>
            <tr>
            <td>Fascia plantar</td>
            <td class="centrar">'.$res->fascia_plantar_valor_der.'</td>
            <td class="centrar">'.$res->fascia_plantar_espesor_der.'</td>
            <td class="centrar">'.$res->fascia_plantar_estructura_der.'</td>
            <td class="centrar">NA</td>
            <td class="centrar">'.$res->fascia_plantar_erosion_der.'</td>
            <td class="centrar">'.$res->fascia_plantar_calc_der.'</td>
            <td class="centrar">'.$res->fascia_plantar_pwd_der.'</td>
            </tr>
            <tr>
            <td>Score</td>
            <td class="centrar"></td>
            <td class="centrar">'.$res->total_espesor_der.'</td>
            <td class="centrar">'.$res->total_estructura_der.'</td>
            <td class="centrar">'.$res->total_bursitis_der.'</td>
            <td class="centrar">'.$res->total_erosion_der.'</td>
            <td class="centrar">'.$res->total_calc_der.'</td>
            <td class="centrar">'.$res->total_pwd_der.'</td>
            </tr>
            </table>
            <h4>Total: '.$res->total_der.'</h4>
         <p></p>
         <h3>Total: '.($res->total_der+$res->total_izq).'</h3>
         <p>Un total mayor o igual a 18 puntos es equivalente a sospecha de espondiloartritis axial</p>
         <p>Hallazgos</p>
         <p>'.$res->conclusion_hallazgos.'</p>
         <p>'.$res->hallazgos_masei.'
         <p>____UDIUWPQWEOEPQÑ</p>
         ';
         // print a block of text using Write()

        $pdf->writeHTML($txt, true, false, true, false, '');

        }
          if($res->resultado_archivo != ''){
             $txt='
             <style>
             div.test{
              text-align: center;
             }
             </style>
             <div class="test"> <img src="'.base_url.'uploads/resultados/imgs/'.$res->resultado_archivo.'" width="500" height="450"></div>';
             //echo var_dump(base_url.'uploads/resultados/imgs/'.$res->resultado_archivo);
             //die();
        $pdf->writeHTML($txt, true, false, true, false, '');
           }

         // ---------------------------------------------------------

         //Close and output PDF document
         $pdf->Output($res->folio_paciente.'.pdf', 'I');

         //============================================================+
         // END OF FILE
         //============================================================+
         //header("Location:".base_url.'Resultado/gestion');

      }

} //FIN CLASE
?>