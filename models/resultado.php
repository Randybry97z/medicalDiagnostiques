<?php

class Resultado{
  private $idresultado;
  private $idpaciente;
  private $idprograma;
  private $radio_hiper_der;
  private $radio_hiper_izq;
  private $radio_power_der;
  private $radio_power_izq;
  private $ifp2_hiper_izq;
  private $ifp2_hiper_der;
  private $ifp2_power_izq;
  private $ifp2_power_der;
  private $ifp3_hiper_izq;
  private $ifp3_hiper_der;
  private $ifp3_power_izq;
  private $ifp3_power_der;
  private $ifp4_hiper_izq;
  private $ifp4_hiper_der;
  private $ifp4_power_izq;
  private $ifp4_power_der;
  private $ifp5_hiper_izq;
  private $ifp5_hiper_der;
  private $ifp5_power_izq;
  private $ifp5_power_der;
  private $rrl_hiper_izq;
  private $rrl_hiper_der;
  private $rrl_power_izq;
  private $rrl_power_der;
  private $flexlong_2_derrame_der;
  private $flexlong_2_power_der;
  private $flexlong_2_derrame_izq;
  private $flexlong_2_power_izq;
  private $flexlong_3_derrame_der;
  private $flexlong_3_power_der;
  private $flexlong_3_derrame_izq;
  private $flexlong_3_power_izq;
  private $flexlong_4_derrame_der;
  private $flexlong_4_power_der;
  private $flexlong_4_derrame_izq;	
  private $flexlong_4_power_izq;
  private $flexlong_5_derrame_der;
  private $flexlong_5_power_der;
  private $flexlong_5_derrame_izq;
  private $flexlong_5_power_izq;
  private $extlong_2_derrame_der;	
  private $extlong_2_power_der;	
  private $extlong_2_derrame_izq;
  private $extlong_2_power_izq;
  private $extlong_3_derrame_der;
  private $extlong_3_power_der;
  private $extlong_3_derrame_izq;
  private $extlong_3_power_izq;
  private $extlong_4_derrame_der;
  private $extlong_4_power_der;
  private $extlong_4_derrame_izq;
  private $extlong_4_power_izq;
  private $extlong_5_derrame_der;
  private $extlong_5_power_der;
  private $extlong_5_derrame_izq;
  private $extlong_5_power_izq;
  private $extran_2_derrame_der;
  private $extran_2_power_der;

  private $extran_2_derrame_izq;
  private $extran_2_power_izq;
  private $infraprox_camb_der;
  private $infraprox_camb_izq;
  private $infraprox_engro_der;
  private $infraprox_engro_izq;
  private $infraprox_calci_der;
  private $infraprox_calci_izq;
  private $infraprox_ente_der;
  private $infraprox_ente_izq;
  private $infraprox_power_der;
  private $infraprox_power_izq;
  private $infradis_camb_der;
  private $infradis_camb_izq;
  private $infradis_engro_der;
  private $infradis_engro_izq;
  private $infradis_calci_der;
  private $infradis_calci_izq;
  private $infradis_ente_der;
  private $infradis_ente_izq;
  private $infradis_power_der;
  private $infradis_power_izq;
  private $aquileo_camb_der;
  private $aquileo_camb_izq;
  private $aquileo_engro_der;
  private $aquileo_engro_izq;
  private $aquileo_calci_der;
  private $aquileo_calci_izq;
  private $aquileo_ente_der;
  private $aquileo_ente_izq;
  private $aquileo_power_der;
  private $aquileo_power_izq;
  private $epilat_camb_der;
  private $epilat_camb_izq;
  private $epilat_engro_der;
  private $epilat_engro_izq;
  private $epilat_calci_der;
  private $epilat_calci_izq;
  private $epilat_ento_der;
  private $epilat_ento_izq;
  private $epilat_power_der;
  private $epilat_power_izq;
  private $conclusion_artritis;
  private $conclusion_tendones;
  private $conclusion_entesis;
  private $conclusion_hallazgos;
  private $triceps_valor_izq;
  private $triceps_espesor_izq;
  private $triceps_estructura_izq;
  private $triceps_bursitis_izq;
  private $triceps_erosion_izq;
  private $triceps_calc_izq;
  private $triceps_pwd_izq;
  private $cuadriceps_valor_izq;
  private $cuadriceps_espesor_izq;
  private $cuadriceps_estructura_izq;
  private $cuadriceps_bursitis_izq;
  private $cuadriceps_erosion_izq;
  private $cuadriceps_calc_izq;
  private $cuadriceps_pwd_izq;
  private $patelar_prox_valor_izq;
  private $patelar_prox_espesor_izq;
  private $patelar_prox_estructura_izq;
  private $patelar_prox_bursitis_izq;
  private $patelar_prox_erosion_izq;
  private $patelar_prox_calc_izq;
  private $patelar_prox_pwd_izq;
  private $patelar_dist_valor_izq;
  private $patelar_dist_espesor_izq;
  private $patelar_dist_estructura_izq;
  private $patelar_dist_bursitis_izq;
  private $patelar_dist_erosion_izq;
  private $patelar_dist_calc_izq;
  private $patelar_dist_pwd_izq;
  private $aquileo_valor_izq;
  private $aquileo_espesor_izq;
  private $aquileo_estructura_izq;
  private $aquileo_bursitis_izq;
  private $aquileo_erosion_izq;
  private $aquileo_calc_izq;
  private $aquileo_pwd_izq;
  private $fascia_plantar_valor_izq;
  private $fascia_plantar_espesor_izq;
  private $fascia_plantar_estructura_izq;
  private $fascia_plantar_bursitis_izq;
  private $fascia_plantar_erosion_izq;
  private $fascia_plantar_calc_izq;
  private $fascia_plantar_pwd_izq;
  private $total_espesor_izq;
  private $total_estructura_izq;
  private $total_bursitis_izq;
  private $total_erosion_izq;
  private $total_calc_izq;
  private $total_pwd_izq;
  private $total_izq;
  private $triceps_valor_der;
  private $triceps_espesor_der;
  private $triceps_estructura_der;
  private $triceps_bursitis_der;
  private $triceps_erosion_der;
  private $triceps_calc_der;
  private $triceps_pwd_der;
  private $cuadriceps_valor_der;
  private $cuadriceps_espesor_der;
  private $cuadriceps_estructura_der;
  private $cuadriceps_bursitis_der;
  private $cuadriceps_erosion_der;
  private $cuadriceps_calc_der;
  private $cuadriceps_pwd_der;
  private $patelar_prox_valor_der;
  private $patelar_prox_espesor_der;
  private $patelar_prox_estructura_der;
  private $patelar_prox_bursitis_der;
  private $patelar_prox_erosion_der;
  private $patelar_prox_calc_der;
  private $patelar_prox_pwd_der;
  private $patelar_dist_valor_der;
  private $patelar_dist_espesor_der;
  private $patelar_dist_estructura_der;
  private $patelar_dist_bursitis_der;
  private $patelar_dist_erosion_der;
  private $patelar_dist_calc_der;
  private $patelar_dist_pwd_der;
  private $aquileo_valor_der;
  private $aquileo_espesor_der;
  private $aquileo_estructura_der;
  private $aquileo_bursitis_der;
  private $aquileo_erosion_der;
  private $aquileo_calc_der;
  private $aquileo_pwd_der;
  private $fascia_plantar_valor_der;
  private $fascia_plantar_espesor_der;
  private $fascia_plantar_estructura_der;
  private $fascia_plantar_bursitis_der;
  private $fascia_plantar_erosion_der;
  private $fascia_plantar_calc_der;
  private $fascia_plantar_pwd_der;
  private $total_espesor_der;
  private $total_estructura_der;
  private $total_bursitis_der;
  private $total_erosion_der;
  private $total_calc_der;
  private $total_pwd_der;
  private $total_der;
  private $hallazgos_masei;
  private $resultado_archivo;
  

  public function __construct(){
    $this->db = Database::connect();
  }

  function getRadio_hiper_der() {
    return $this->radio_hiper_der;
}

function getRadio_hiper_izq() {
    return $this->radio_hiper_izq;
}

function getRadio_power_der() {
    return $this->radio_power_der;
}

function getRadio_power_izq() {
    return $this->radio_power_izq;
}

function getIfp2_hiper_izq() {
    return $this->ifp2_hiper_izq;
}

function getIfp2_hiper_der() {
    return $this->ifp2_hiper_der;
}

function getIfp2_power_izq() {
    return $this->ifp2_power_izq;
}

function getIfp2_power_der() {
    return $this->ifp2_power_der;
}

function getIfp3_hiper_izq() {
    return $this->ifp3_hiper_izq;
}

function getIfp3_hiper_der() {
    return $this->ifp3_hiper_der;
}

function getIfp3_power_izq() {
    return $this->ifp3_power_izq;
}

function getIfp3_power_der() {
    return $this->ifp3_power_der;
}

function getIfp4_hiper_izq() {
    return $this->ifp4_hiper_izq;
}

function getIfp4_hiper_der() {
    return $this->ifp4_hiper_der;
}

function getIfp4_power_izq() {
    return $this->ifp4_power_izq;
}

function getIfp4_power_der() {
    return $this->ifp4_power_der;
}

function getIfp5_hiper_izq() {
    return $this->ifp5_hiper_izq;
}

function getIfp5_hiper_der() {
    return $this->ifp5_hiper_der;
}

function getIfp5_power_izq() {
    return $this->ifp5_power_izq;
}

function getIfp5_power_der() {
    return $this->ifp5_power_der;
}

function getRrl_hiper_izq() {
    return $this->rrl_hiper_izq;
}

function getRrl_hiper_der() {
    return $this->rrl_hiper_der;
}

function getRrl_power_izq() {
    return $this->rrl_power_izq;
}

function getRrl_power_der() {
    return $this->rrl_power_der;
}

function getFlexlong_2_derrame_der() {
    return $this->flexlong_2_derrame_der;
}

function getFlexlong_2_power_der() {
    return $this->flexlong_2_power_der;
}

function getFlexlong_2_derrame_izq() {
    return $this->flexlong_2_derrame_izq;
}

function getFlexlong_2_power_izq() {
    return $this->flexlong_2_power_izq;
}

function getFlexlong_3_derrame_der() {
    return $this->flexlong_3_derrame_der;
}

function getFlexlong_3_power_der() {
    return $this->flexlong_3_power_der;
}

function getFlexlong_3_derrame_izq() {
    return $this->flexlong_3_derrame_izq;
}

function getFlexlong_3_power_izq() {
    return $this->flexlong_3_power_izq;
}

function getFlexlong_4_derrame_der() {
    return $this->flexlong_4_derrame_der;
}

function getFlexlong_4_power_der() {
    return $this->flexlong_4_power_der;
}

function getFlexlong_4_derrame_izq() {
    return $this->flexlong_4_derrame_izq;
}

function getFlexlong_4_power_izq() {
    return $this->flexlong_4_power_izq;
}

function getFlexlong_5_derrame_der() {
    return $this->flexlong_5_derrame_der;
}

function getFlexlong_5_power_der() {
    return $this->flexlong_5_power_der;
}

function getFlexlong_5_derrame_izq() {
    return $this->flexlong_5_derrame_izq;
}

function getFlexlong_5_power_izq() {
    return $this->flexlong_5_power_izq;
}

function getExtlong_2_derrame_der() {
    return $this->extlong_2_derrame_der;
}

function getExtlong_2_power_der() {
    return $this->extlong_2_power_der;
}

function getExtlong_2_derrame_izq() {
    return $this->extlong_2_derrame_izq;
}

function getExtlong_2_power_izq() {
    return $this->extlong_2_power_izq;
}

function getExtlong_3_derrame_der() {
    return $this->extlong_3_derrame_der;
}

function getExtlong_3_power_der() {
    return $this->extlong_3_power_der;
}

function getExtlong_3_derrame_izq() {
    return $this->extlong_3_derrame_izq;
}

function getExtlong_3_power_izq() {
    return $this->extlong_3_power_izq;
}

function getExtlong_4_derrame_der() {
    return $this->extlong_4_derrame_der;
}

function getExtlong_4_power_der() {
    return $this->extlong_4_power_der;
}

function getExtlong_4_derrame_izq() {
    return $this->extlong_4_derrame_izq;
}

function getExtlong_4_power_izq() {
    return $this->extlong_4_power_izq;
}

function getExtlong_5_derrame_der() {
    return $this->extlong_5_derrame_der;
}

function getExtlong_5_power_der() {
    return $this->extlong_5_power_der;
}

function getExtlong_5_derrame_izq() {
    return $this->extlong_5_derrame_izq;
}

function getExtlong_5_power_izq() {
    return $this->extlong_5_power_izq;
}

function getExtran_2_derrame_der() {
    return $this->extran_2_derrame_der;
}

function getExtran_2_power_der() {
    return $this->extran_2_power_der;
}

function getExtran_2_derrame_izq() {
    return $this->extran_2_derrame_izq;
}

function getExtran_2_power_izq() {
    return $this->extran_2_power_izq;
}

function getInfraprox_camb_der() {
    return $this->infraprox_camb_der;
}

function getInfraprox_camb_izq() {
    return $this->infraprox_camb_izq;
}

function getInfraprox_engro_der() {
    return $this->infraprox_engro_der;
}

function getInfraprox_engro_izq() {
    return $this->infraprox_engro_izq;
}

function getInfraprox_calci_der() {
    return $this->infraprox_calci_der;
}

function getInfraprox_calci_izq() {
    return $this->infraprox_calci_izq;
}

function getInfraprox_ente_der() {
    return $this->infraprox_ente_der;
}

function getInfraprox_ente_izq() {
    return $this->infraprox_ente_izq;
}

function getInfraprox_power_der() {
    return $this->infraprox_power_der;
}

function getInfraprox_power_izq() {
    return $this->infraprox_power_izq;
}

function getInfradis_camb_der() {
    return $this->infradis_camb_der;
}

function getInfradis_camb_izq() {
    return $this->infradis_camb_izq;
}

function getInfradis_engro_der() {
    return $this->infradis_engro_der;
}

function getInfradis_engro_izq() {
    return $this->infradis_engro_izq;
}

function getInfradis_calci_der() {
    return $this->infradis_calci_der;
}

function getInfradis_calci_izq() {
    return $this->infradis_calci_izq;
}

function getInfradis_ente_der() {
    return $this->infradis_ente_der;
}

function getInfradis_ente_izq() {
    return $this->infradis_ente_izq;
}

function getInfradis_power_der() {
    return $this->infradis_power_der;
}

function getInfradis_power_izq() {
    return $this->infradis_power_izq;
}

function getAquileo_camb_der() {
    return $this->aquileo_camb_der;
}

function getAquileo_camb_izq() {
    return $this->aquileo_camb_izq;
}

function getAquileo_engro_der() {
    return $this->aquileo_engro_der;
}

function getAquileo_engro_izq() {
    return $this->aquileo_engro_izq;
}

function getAquileo_calci_der() {
    return $this->aquileo_calci_der;
}

function getAquileo_calci_izq() {
    return $this->aquileo_calci_izq;
}

function getAquileo_ente_der() {
    return $this->aquileo_ente_der;
}

function getAquileo_ente_izq() {
    return $this->aquileo_ente_izq;
}

function getAquileo_power_der() {
    return $this->aquileo_power_der;
}

function getAquileo_power_izq() {
    return $this->aquileo_power_izq;
}

function getEpilat_camb_der() {
    return $this->epilat_camb_der;
}

function getEpilat_camb_izq() {
    return $this->epilat_camb_izq;
}

function getEpilat_engro_der() {
    return $this->epilat_engro_der;
}

function getEpilat_engro_izq() {
    return $this->epilat_engro_izq;
}

function getEpilat_calci_der() {
    return $this->epilat_calci_der;
}

function getEpilat_calci_izq() {
    return $this->epilat_calci_izq;
}

function getEpilat_ento_der() {
    return $this->epilat_ento_der;
}

function getEpilat_ento_izq() {
    return $this->epilat_ento_izq;
}

function getEpilat_power_der() {
    return $this->epilat_power_der;
}

function getEpilat_power_izq() {
    return $this->epilat_power_izq;
}

function getConclusion_artritis() {
    return $this->conclusion_artritis;
}

function getConclusion_tendones() {
    return $this->conclusion_tendones;
}

function getConclusion_entesis() {
    return $this->conclusion_entesis;
}

function getConclusion_hallazgos() {
    return $this->conclusion_hallazgos;
}

function getTriceps_valor_izq() {
    return $this->triceps_valor_izq;
}

function getTriceps_espesor_izq() {
    return $this->triceps_espesor_izq;
}

function getTriceps_estructura_izq() {
    return $this->triceps_estructura_izq;
}

function getTriceps_bursitis_izq() {
    return $this->triceps_bursitis_izq;
}

function getTriceps_erosion_izq() {
    return $this->triceps_erosion_izq;
}

function getTriceps_calc_izq() {
    return $this->triceps_calc_izq;
}

function getTriceps_pwd_izq() {
    return $this->triceps_pwd_izq;
}

function getCuadriceps_valor_izq() {
    return $this->cuadriceps_valor_izq;
}

function getCuadriceps_espesor_izq() {
    return $this->cuadriceps_espesor_izq;
}

function getCuadriceps_estructura_izq() {
    return $this->cuadriceps_estructura_izq;
}

function getCuadriceps_bursitis_izq() {
    return $this->cuadriceps_bursitis_izq;
}

function getCuadriceps_erosion_izq() {
    return $this->cuadriceps_erosion_izq;
}

function getCuadriceps_calc_izq() {
    return $this->cuadriceps_calc_izq;
}

function getCuadriceps_pwd_izq() {
    return $this->cuadriceps_pwd_izq;
}

function getPatelar_prox_valor_izq() {
    return $this->patelar_prox_valor_izq;
}

function getPatelar_prox_espesor_izq() {
    return $this->patelar_prox_espesor_izq;
}

function getPatelar_prox_estructura_izq() {
    return $this->patelar_prox_estructura_izq;
}

function getPatelar_prox_bursitis_izq() {
    return $this->patelar_prox_bursitis_izq;
}

function getPatelar_prox_erosion_izq() {
    return $this->patelar_prox_erosion_izq;
}

function getPatelar_prox_calc_izq() {
    return $this->patelar_prox_calc_izq;
}

function getPatelar_prox_pwd_izq() {
    return $this->patelar_prox_pwd_izq;
}

function getPatelar_dist_valor_izq() {
    return $this->patelar_dist_valor_izq;
}

function getPatelar_dist_espesor_izq() {
    return $this->patelar_dist_espesor_izq;
}

function getPatelar_dist_estructura_izq() {
    return $this->patelar_dist_estructura_izq;
}

function getPatelar_dist_bursitis_izq() {
    return $this->patelar_dist_bursitis_izq;
}

function getPatelar_dist_erosion_izq() {
    return $this->patelar_dist_erosion_izq;
}

function getPatelar_dist_calc_izq() {
    return $this->patelar_dist_calc_izq;
}

function getPatelar_dist_pwd_izq() {
    return $this->patelar_dist_pwd_izq;
}

function getAquileo_valor_izq() {
    return $this->aquileo_valor_izq;
}

function getAquileo_espesor_izq() {
    return $this->aquileo_espesor_izq;
}

function getAquileo_estructura_izq() {
    return $this->aquileo_estructura_izq;
}

function getAquileo_bursitis_izq() {
    return $this->aquileo_bursitis_izq;
}

function getAquileo_erosion_izq() {
    return $this->aquileo_erosion_izq;
}

function getAquileo_calc_izq() {
    return $this->aquileo_calc_izq;
}

function getAquileo_pwd_izq() {
    return $this->aquileo_pwd_izq;
}

function getFascia_plantar_valor_izq() {
    return $this->fascia_plantar_valor_izq;
}

function getFascia_plantar_espesor_izq() {
    return $this->fascia_plantar_espesor_izq;
}

function getFascia_plantar_estructura_izq() {
    return $this->fascia_plantar_estructura_izq;
}

function getFascia_plantar_bursitis_izq() {
    return $this->fascia_plantar_bursitis_izq;
}

function getFascia_plantar_erosion_izq() {
    return $this->fascia_plantar_erosion_izq;
}

function getFascia_plantar_calc_izq() {
    return $this->fascia_plantar_calc_izq;
}

function getFascia_plantar_pwd_izq() {
    return $this->fascia_plantar_pwd_izq;
}

function getTotal_espesor_izq() {
    return $this->total_espesor_izq;
}

function getTotal_estructura_izq() {
    return $this->total_estructura_izq;
}

function getTotal_bursitis_izq() {
    return $this->total_bursitis_izq;
}

function getTotal_erosion_izq() {
    return $this->total_erosion_izq;
}

function getTotal_calc_izq() {
    return $this->total_calc_izq;
}

function getTotal_pwd_izq() {
    return $this->total_pwd_izq;
}

function getTotal_izq() {
    return $this->total_izq;
}

function getTriceps_valor_der() {
    return $this->triceps_valor_der;
}

function getTriceps_espesor_der() {
    return $this->triceps_espesor_der;
}

function getTriceps_estructura_der() {
    return $this->triceps_estructura_der;
}

function getTriceps_bursitis_der() {
    return $this->triceps_bursitis_der;
}

function getTriceps_erosion_der() {
    return $this->triceps_erosion_der;
}

function getTriceps_calc_der() {
    return $this->triceps_calc_der;
}

function getTriceps_pwd_der() {
    return $this->triceps_pwd_der;
}

function getCuadriceps_valor_der() {
    return $this->cuadriceps_valor_der;
}

function getCuadriceps_espesor_der() {
    return $this->cuadriceps_espesor_der;
}

function getCuadriceps_estructura_der() {
    return $this->cuadriceps_estructura_der;
}

function getCuadriceps_bursitis_der() {
    return $this->cuadriceps_bursitis_der;
}

function getCuadriceps_erosion_der() {
    return $this->cuadriceps_erosion_der;
}

function getCuadriceps_calc_der() {
    return $this->cuadriceps_calc_der;
}

function getCuadriceps_pwd_der() {
    return $this->cuadriceps_pwd_der;
}

function getPatelar_prox_valor_der() {
    return $this->patelar_prox_valor_der;
}

function getPatelar_prox_espesor_der() {
    return $this->patelar_prox_espesor_der;
}

function getPatelar_prox_estructura_der() {
    return $this->patelar_prox_estructura_der;
}

function getPatelar_prox_bursitis_der() {
    return $this->patelar_prox_bursitis_der;
}

function getPatelar_prox_erosion_der() {
    return $this->patelar_prox_erosion_der;
}

function getPatelar_prox_calc_der() {
    return $this->patelar_prox_calc_der;
}

function getPatelar_prox_pwd_der() {
    return $this->patelar_prox_pwd_der;
}

function getPatelar_dist_valor_der() {
    return $this->patelar_dist_valor_der;
}

function getPatelar_dist_espesor_der() {
    return $this->patelar_dist_espesor_der;
}

function getPatelar_dist_estructura_der() {
    return $this->patelar_dist_estructura_der;
}

function getPatelar_dist_bursitis_der() {
    return $this->patelar_dist_bursitis_der;
}

function getPatelar_dist_erosion_der() {
    return $this->patelar_dist_erosion_der;
}

function getPatelar_dist_calc_der() {
    return $this->patelar_dist_calc_der;
}

function getPatelar_dist_pwd_der() {
    return $this->patelar_dist_pwd_der;
}

function getAquileo_valor_der() {
    return $this->aquileo_valor_der;
}

function getAquileo_espesor_der() {
    return $this->aquileo_espesor_der;
}

function getAquileo_estructura_der() {
    return $this->aquileo_estructura_der;
}

function getAquileo_bursitis_der() {
    return $this->aquileo_bursitis_der;
}

function getAquileo_erosion_der() {
    return $this->aquileo_erosion_der;
}

function getAquileo_calc_der() {
    return $this->aquileo_calc_der;
}

function getAquileo_pwd_der() {
    return $this->aquileo_pwd_der;
}

function getFascia_plantar_valor_der() {
    return $this->fascia_plantar_valor_der;
}

function getFascia_plantar_espesor_der() {
    return $this->fascia_plantar_espesor_der;
}

function getFascia_plantar_estructura_der() {
    return $this->fascia_plantar_estructura_der;
}

function getFascia_plantar_bursitis_der() {
    return $this->fascia_plantar_bursitis_der;
}

function getFascia_plantar_erosion_der() {
    return $this->fascia_plantar_erosion_der;
}

function getFascia_plantar_calc_der() {
    return $this->fascia_plantar_calc_der;
}

function getFascia_plantar_pwd_der() {
    return $this->fascia_plantar_pwd_der;
}

function getTotal_espesor_der() {
    return $this->total_espesor_der;
}

function getTotal_estructura_der() {
    return $this->total_estructura_der;
}

function getTotal_bursitis_der() {
    return $this->total_bursitis_der;
}

function getTotal_erosion_der() {
    return $this->total_erosion_der;
}

function getTotal_calc_der() {
    return $this->total_calc_der;
}

function getTotal_pwd_der() {
    return $this->total_pwd_der;
}

function getTotal_der() {
    return $this->total_der;
}

function getHallazgos_masei() {
    return $this->hallazgos_masei;
}

function getIdresultado() {
    return $this->idresultado;
}

function getIdprograma() {
    return $this->idprograma;
}


function getIdpaciente() {
    return $this->idpaciente;
}


function setRadio_hiper_der($radio_hiper_der) {
    $this->radio_hiper_der = $radio_hiper_der;
}

function setRadio_hiper_izq($radio_hiper_izq) {
    $this->radio_hiper_izq = $radio_hiper_izq;
}

function setRadio_power_der($radio_power_der) {
    $this->radio_power_der = $radio_power_der;
}

function setRadio_power_izq($radio_power_izq) {
    $this->radio_power_izq = $radio_power_izq;
}

function setIfp2_hiper_izq($ifp2_hiper_izq) {
    $this->ifp2_hiper_izq = $ifp2_hiper_izq;
}

function setIfp2_hiper_der($ifp2_hiper_der) {
    $this->ifp2_hiper_der = $ifp2_hiper_der;
}

function setIfp2_power_izq($ifp2_power_izq) {
    $this->ifp2_power_izq = $ifp2_power_izq;
}

function setIfp2_power_der($ifp2_power_der) {
    $this->ifp2_power_der = $ifp2_power_der;
}

function setIfp3_hiper_izq($ifp3_hiper_izq) {
    $this->ifp3_hiper_izq = $ifp3_hiper_izq;
}

function setIfp3_hiper_der($ifp3_hiper_der) {
    $this->ifp3_hiper_der = $ifp3_hiper_der;
}

function setIfp3_power_izq($ifp3_power_izq) {
    $this->ifp3_power_izq = $ifp3_power_izq;
}

function setIfp3_power_der($ifp3_power_der) {
    $this->ifp3_power_der = $ifp3_power_der;
}

function setIfp4_hiper_izq($ifp4_hiper_izq) {
    $this->ifp4_hiper_izq = $ifp4_hiper_izq;
}

function setIfp4_hiper_der($ifp4_hiper_der) {
    $this->ifp4_hiper_der = $ifp4_hiper_der;
}

function setIfp4_power_izq($ifp4_power_izq) {
    $this->ifp4_power_izq = $ifp4_power_izq;
}

function setIfp4_power_der($ifp4_power_der) {
    $this->ifp4_power_der = $ifp4_power_der;
}

function setIfp5_hiper_izq($ifp5_hiper_izq) {
    $this->ifp5_hiper_izq = $ifp5_hiper_izq;
}

function setIfp5_hiper_der($ifp5_hiper_der) {
    $this->ifp5_hiper_der = $ifp5_hiper_der;
}

function setIfp5_power_izq($ifp5_power_izq) {
    $this->ifp5_power_izq = $ifp5_power_izq;
}

function setIfp5_power_der($ifp5_power_der) {
    $this->ifp5_power_der = $ifp5_power_der;
}

function setRrl_hiper_izq($rrl_hiper_izq) {
    $this->rrl_hiper_izq = $rrl_hiper_izq;
}

function setRrl_hiper_der($rrl_hiper_der) {
    $this->rrl_hiper_der = $rrl_hiper_der;
}

function setRrl_power_izq($rrl_power_izq) {
    $this->rrl_power_izq = $rrl_power_izq;
}

function setRrl_power_der($rrl_power_der) {
    $this->rrl_power_der = $rrl_power_der;
}

function setFlexlong_2_derrame_der($flexlong_2_derrame_der) {
    $this->flexlong_2_derrame_der = $flexlong_2_derrame_der;
}

function setFlexlong_2_power_der($flexlong_2_power_der) {
    $this->flexlong_2_power_der = $flexlong_2_power_der;
}

function setFlexlong_2_derrame_izq($flexlong_2_derrame_izq) {
    $this->flexlong_2_derrame_izq = $flexlong_2_derrame_izq;
}

function setFlexlong_2_power_izq($flexlong_2_power_izq) {
    $this->flexlong_2_power_izq = $flexlong_2_power_izq;
}

function setFlexlong_3_derrame_der($flexlong_3_derrame_der) {
    $this->flexlong_3_derrame_der = $flexlong_3_derrame_der;
}

function setFlexlong_3_power_der($flexlong_3_power_der) {
    $this->flexlong_3_power_der = $flexlong_3_power_der;
}

function setFlexlong_3_derrame_izq($flexlong_3_derrame_izq) {
    $this->flexlong_3_derrame_izq = $flexlong_3_derrame_izq;
}

function setFlexlong_3_power_izq($flexlong_3_power_izq) {
    $this->flexlong_3_power_izq = $flexlong_3_power_izq;
}

function setFlexlong_4_derrame_der($flexlong_4_derrame_der) {
    $this->flexlong_4_derrame_der = $flexlong_4_derrame_der;
}

function setFlexlong_4_power_der($flexlong_4_power_der) {
    $this->flexlong_4_power_der = $flexlong_4_power_der;
}

function setFlexlong_4_derrame_izq($flexlong_4_derrame_izq) {
    $this->flexlong_4_derrame_izq = $flexlong_4_derrame_izq;
}

function setFlexlong_4_power_izq($flexlong_4_power_izq) {
    $this->flexlong_4_power_izq = $flexlong_4_power_izq;
}

function setFlexlong_5_derrame_der($flexlong_5_derrame_der) {
    $this->flexlong_5_derrame_der = $flexlong_5_derrame_der;
}

function setFlexlong_5_power_der($flexlong_5_power_der) {
    $this->flexlong_5_power_der = $flexlong_5_power_der;
}

function setFlexlong_5_derrame_izq($flexlong_5_derrame_izq) {
    $this->flexlong_5_derrame_izq = $flexlong_5_derrame_izq;
}

function setFlexlong_5_power_izq($flexlong_5_power_izq) {
    $this->flexlong_5_power_izq = $flexlong_5_power_izq;
}

function setExtlong_2_derrame_der($extlong_2_derrame_der) {
    $this->extlong_2_derrame_der = $extlong_2_derrame_der;
}

function setExtlong_2_power_der($extlong_2_power_der) {
    $this->extlong_2_power_der = $extlong_2_power_der;
}

function setExtlong_2_derrame_izq($extlong_2_derrame_izq) {
    $this->extlong_2_derrame_izq = $extlong_2_derrame_izq;
}

function setExtlong_2_power_izq($extlong_2_power_izq) {
    $this->extlong_2_power_izq = $extlong_2_power_izq;
}

function setExtlong_3_derrame_der($extlong_3_derrame_der) {
    $this->extlong_3_derrame_der = $extlong_3_derrame_der;
}

function setExtlong_3_power_der($extlong_3_power_der) {
    $this->extlong_3_power_der = $extlong_3_power_der;
}

function setExtlong_3_derrame_izq($extlong_3_derrame_izq) {
    $this->extlong_3_derrame_izq = $extlong_3_derrame_izq;
}

function setExtlong_3_power_izq($extlong_3_power_izq) {
    $this->extlong_3_power_izq = $extlong_3_power_izq;
}

function setExtlong_4_derrame_der($extlong_4_derrame_der) {
    $this->extlong_4_derrame_der = $extlong_4_derrame_der;
}

function setExtlong_4_power_der($extlong_4_power_der) {
    $this->extlong_4_power_der = $extlong_4_power_der;
}

function setExtlong_4_derrame_izq($extlong_4_derrame_izq) {
    $this->extlong_4_derrame_izq = $extlong_4_derrame_izq;
}

function setExtlong_4_power_izq($extlong_4_power_izq) {
    $this->extlong_4_power_izq = $extlong_4_power_izq;
}

function setExtlong_5_derrame_der($extlong_5_derrame_der) {
    $this->extlong_5_derrame_der = $extlong_5_derrame_der;
}

function setExtlong_5_power_der($extlong_5_power_der) {
    $this->extlong_5_power_der = $extlong_5_power_der;
}

function setExtlong_5_derrame_izq($extlong_5_derrame_izq) {
    $this->extlong_5_derrame_izq = $extlong_5_derrame_izq;
}

function setExtlong_5_power_izq($extlong_5_power_izq) {
    $this->extlong_5_power_izq = $extlong_5_power_izq;
}

function setExtran_2_derrame_der($extran_2_derrame_der) {
    $this->extran_2_derrame_der = $extran_2_derrame_der;
}

function setExtran_2_power_der($extran_2_power_der) {
    $this->extran_2_power_der = $extran_2_power_der;
}

function setExtran_2_derrame_izq($extran_2_derrame_izq) {
    $this->extran_2_derrame_izq = $extran_2_derrame_izq;
}

function setExtran_2_power_izq($extran_2_power_izq) {
    $this->extran_2_power_izq = $extran_2_power_izq;
}

function setInfraprox_camb_der($infraprox_camb_der) {
    $this->infraprox_camb_der = $infraprox_camb_der;
}

function setInfraprox_camb_izq($infraprox_camb_izq) {
    $this->infraprox_camb_izq = $infraprox_camb_izq;
}

function setInfraprox_engro_der($infraprox_engro_der) {
    $this->infraprox_engro_der = $infraprox_engro_der;
}

function setInfraprox_engro_izq($infraprox_engro_izq) {
    $this->infraprox_engro_izq = $infraprox_engro_izq;
}

function setInfraprox_calci_der($infraprox_calci_der) {
    $this->infraprox_calci_der = $infraprox_calci_der;
}

function setInfraprox_calci_izq($infraprox_calci_izq) {
    $this->infraprox_calci_izq = $infraprox_calci_izq;
}

function setInfraprox_ente_der($infraprox_ente_der) {
    $this->infraprox_ente_der = $infraprox_ente_der;
}

function setInfraprox_ente_izq($infraprox_ente_izq) {
    $this->infraprox_ente_izq = $infraprox_ente_izq;
}

function setInfraprox_power_der($infraprox_power_der) {
    $this->infraprox_power_der = $infraprox_power_der;
}

function setInfraprox_power_izq($infraprox_power_izq) {
    $this->infraprox_power_izq = $infraprox_power_izq;
}

function setInfradis_camb_der($infradis_camb_der) {
    $this->infradis_camb_der = $infradis_camb_der;
}

function setInfradis_camb_izq($infradis_camb_izq) {
    $this->infradis_camb_izq = $infradis_camb_izq;
}

function setInfradis_engro_der($infradis_engro_der) {
    $this->infradis_engro_der = $infradis_engro_der;
}

function setInfradis_engro_izq($infradis_engro_izq) {
    $this->infradis_engro_izq = $infradis_engro_izq;
}

function setInfradis_calci_der($infradis_calci_der) {
    $this->infradis_calci_der = $infradis_calci_der;
}

function setInfradis_calci_izq($infradis_calci_izq) {
    $this->infradis_calci_izq = $infradis_calci_izq;
}

function setInfradis_ente_der($infradis_ente_der) {
    $this->infradis_ente_der = $infradis_ente_der;
}

function setInfradis_ente_izq($infradis_ente_izq) {
    $this->infradis_ente_izq = $infradis_ente_izq;
}

function setInfradis_power_der($infradis_power_der) {
    $this->infradis_power_der = $infradis_power_der;
}

function setInfradis_power_izq($infradis_power_izq) {
    $this->infradis_power_izq = $infradis_power_izq;
}

function setAquileo_camb_der($aquileo_camb_der) {
    $this->aquileo_camb_der = $aquileo_camb_der;
}

function setAquileo_camb_izq($aquileo_camb_izq) {
    $this->aquileo_camb_izq = $aquileo_camb_izq;
}

function setAquileo_engro_der($aquileo_engro_der) {
    $this->aquileo_engro_der = $aquileo_engro_der;
}

function setAquileo_engro_izq($aquileo_engro_izq) {
    $this->aquileo_engro_izq = $aquileo_engro_izq;
}

function setAquileo_calci_der($aquileo_calci_der) {
    $this->aquileo_calci_der = $aquileo_calci_der;
}

function setAquileo_calci_izq($aquileo_calci_izq) {
    $this->aquileo_calci_izq = $aquileo_calci_izq;
}

function setAquileo_ente_der($aquileo_ente_der) {
    $this->aquileo_ente_der = $aquileo_ente_der;
}

function setAquileo_ente_izq($aquileo_ente_izq) {
    $this->aquileo_ente_izq = $aquileo_ente_izq;
}

function setAquileo_power_der($aquileo_power_der) {
    $this->aquileo_power_der = $aquileo_power_der;
}

function setAquileo_power_izq($aquileo_power_izq) {
    $this->aquileo_power_izq = $aquileo_power_izq;
}

function setEpilat_camb_der($epilat_camb_der) {
    $this->epilat_camb_der = $epilat_camb_der;
}

function setEpilat_camb_izq($epilat_camb_izq) {
    $this->epilat_camb_izq = $epilat_camb_izq;
}

function setEpilat_engro_der($epilat_engro_der) {
    $this->epilat_engro_der = $epilat_engro_der;
}

function setEpilat_engro_izq($epilat_engro_izq) {
    $this->epilat_engro_izq = $epilat_engro_izq;
}

function setEpilat_calci_der($epilat_calci_der) {
    $this->epilat_calci_der = $epilat_calci_der;
}

function setEpilat_calci_izq($epilat_calci_izq) {
    $this->epilat_calci_izq = $epilat_calci_izq;
}

function setEpilat_ento_der($epilat_ento_der) {
    $this->epilat_ento_der = $epilat_ento_der;
}

function setEpilat_ento_izq($epilat_ento_izq) {
    $this->epilat_ento_izq = $epilat_ento_izq;
}

function setEpilat_power_der($epilat_power_der) {
    $this->epilat_power_der = $epilat_power_der;
}

function setEpilat_power_izq($epilat_power_izq) {
    $this->epilat_power_izq = $epilat_power_izq;
}

function setConclusion_artritis($conclusion_artritis) {
    $this->conclusion_artritis = $conclusion_artritis;
}

function setConclusion_tendones($conclusion_tendones) {
    $this->conclusion_tendones = $conclusion_tendones;
}

function setConclusion_entesis($conclusion_entesis) {
    $this->conclusion_entesis = $conclusion_entesis;
}

function setConclusion_hallazgos($conclusion_hallazgos) {
    $this->conclusion_hallazgos = $conclusion_hallazgos;
}

function setTriceps_valor_izq($triceps_valor_izq) {
    $this->triceps_valor_izq = $triceps_valor_izq;
}

function setTriceps_espesor_izq($triceps_espesor_izq) {
    $this->triceps_espesor_izq = $triceps_espesor_izq;
}

function setTriceps_estructura_izq($triceps_estructura_izq) {
    $this->triceps_estructura_izq = $triceps_estructura_izq;
}

function setTriceps_bursitis_izq($triceps_bursitis_izq) {
    $this->triceps_bursitis_izq = $triceps_bursitis_izq;
}

function setTriceps_erosion_izq($triceps_erosion_izq) {
    $this->triceps_erosion_izq = $triceps_erosion_izq;
}

function setTriceps_calc_izq($triceps_calc_izq) {
    $this->triceps_calc_izq = $triceps_calc_izq;
}

function setTriceps_pwd_izq($triceps_pwd_izq) {
    $this->triceps_pwd_izq = $triceps_pwd_izq;
}

function setCuadriceps_valor_izq($cuadriceps_valor_izq) {
    $this->cuadriceps_valor_izq = $cuadriceps_valor_izq;
}

function setCuadriceps_espesor_izq($cuadriceps_espesor_izq) {
    $this->cuadriceps_espesor_izq = $cuadriceps_espesor_izq;
}

function setCuadriceps_estructura_izq($cuadriceps_estructura_izq) {
    $this->cuadriceps_estructura_izq = $cuadriceps_estructura_izq;
}

function setCuadriceps_bursitis_izq($cuadriceps_bursitis_izq) {
    $this->cuadriceps_bursitis_izq = $cuadriceps_bursitis_izq;
}

function setCuadriceps_erosion_izq($cuadriceps_erosion_izq) {
    $this->cuadriceps_erosion_izq = $cuadriceps_erosion_izq;
}

function setCuadriceps_calc_izq($cuadriceps_calc_izq) {
    $this->cuadriceps_calc_izq = $cuadriceps_calc_izq;
}

function setCuadriceps_pwd_izq($cuadriceps_pwd_izq) {
    $this->cuadriceps_pwd_izq = $cuadriceps_pwd_izq;
}

function setPatelar_prox_valor_izq($patelar_prox_valor_izq) {
    $this->patelar_prox_valor_izq = $patelar_prox_valor_izq;
}

function setPatelar_prox_espesor_izq($patelar_prox_espesor_izq) {
    $this->patelar_prox_espesor_izq = $patelar_prox_espesor_izq;
}

function setPatelar_prox_estructura_izq($patelar_prox_estructura_izq) {
    $this->patelar_prox_estructura_izq = $patelar_prox_estructura_izq;
}

function setPatelar_prox_bursitis_izq($patelar_prox_bursitis_izq) {
    $this->patelar_prox_bursitis_izq = $patelar_prox_bursitis_izq;
}

function setPatelar_prox_erosion_izq($patelar_prox_erosion_izq) {
    $this->patelar_prox_erosion_izq = $patelar_prox_erosion_izq;
}

function setPatelar_prox_calc_izq($patelar_prox_calc_izq) {
    $this->patelar_prox_calc_izq = $patelar_prox_calc_izq;
}

function setPatelar_prox_pwd_izq($patelar_prox_pwd_izq) {
    $this->patelar_prox_pwd_izq = $patelar_prox_pwd_izq;
}

function setPatelar_dist_valor_izq($patelar_dist_valor_izq) {
    $this->patelar_dist_valor_izq = $patelar_dist_valor_izq;
}

function setPatelar_dist_espesor_izq($patelar_dist_espesor_izq) {
    $this->patelar_dist_espesor_izq = $patelar_dist_espesor_izq;
}

function setPatelar_dist_estructura_izq($patelar_dist_estructura_izq) {
    $this->patelar_dist_estructura_izq = $patelar_dist_estructura_izq;
}

function setPatelar_dist_bursitis_izq($patelar_dist_bursitis_izq) {
    $this->patelar_dist_bursitis_izq = $patelar_dist_bursitis_izq;
}

function setPatelar_dist_erosion_izq($patelar_dist_erosion_izq) {
    $this->patelar_dist_erosion_izq = $patelar_dist_erosion_izq;
}

function setPatelar_dist_calc_izq($patelar_dist_calc_izq) {
    $this->patelar_dist_calc_izq = $patelar_dist_calc_izq;
}

function setPatelar_dist_pwd_izq($patelar_dist_pwd_izq) {
    $this->patelar_dist_pwd_izq = $patelar_dist_pwd_izq;
}

function setAquileo_valor_izq($aquileo_valor_izq) {
    $this->aquileo_valor_izq = $aquileo_valor_izq;
}

function setAquileo_espesor_izq($aquileo_espesor_izq) {
    $this->aquileo_espesor_izq = $aquileo_espesor_izq;
}

function setAquileo_estructura_izq($aquileo_estructura_izq) {
    $this->aquileo_estructura_izq = $aquileo_estructura_izq;
}

function setAquileo_bursitis_izq($aquileo_bursitis_izq) {
    $this->aquileo_bursitis_izq = $aquileo_bursitis_izq;
}

function setAquileo_erosion_izq($aquileo_erosion_izq) {
    $this->aquileo_erosion_izq = $aquileo_erosion_izq;
}

function setAquileo_calc_izq($aquileo_calc_izq) {
    $this->aquileo_calc_izq = $aquileo_calc_izq;
}

function setAquileo_pwd_izq($aquileo_pwd_izq) {
    $this->aquileo_pwd_izq = $aquileo_pwd_izq;
}

function setFascia_plantar_valor_izq($fascia_plantar_valor_izq) {
    $this->fascia_plantar_valor_izq = $fascia_plantar_valor_izq;
}

function setFascia_plantar_espesor_izq($fascia_plantar_espesor_izq) {
    $this->fascia_plantar_espesor_izq = $fascia_plantar_espesor_izq;
}

function setFascia_plantar_estructura_izq($fascia_plantar_estructura_izq) {
    $this->fascia_plantar_estructura_izq = $fascia_plantar_estructura_izq;
}

function setFascia_plantar_bursitis_izq($fascia_plantar_bursitis_izq) {
    $this->fascia_plantar_bursitis_izq = $fascia_plantar_bursitis_izq;
}

function setFascia_plantar_erosion_izq($fascia_plantar_erosion_izq) {
    $this->fascia_plantar_erosion_izq = $fascia_plantar_erosion_izq;
}

function setFascia_plantar_calc_izq($fascia_plantar_calc_izq) {
    $this->fascia_plantar_calc_izq = $fascia_plantar_calc_izq;
}

function setFascia_plantar_pwd_izq($fascia_plantar_pwd_izq) {
    $this->fascia_plantar_pwd_izq = $fascia_plantar_pwd_izq;
}

function setTotal_espesor_izq($total_espesor_izq) {
    $this->total_espesor_izq = $total_espesor_izq;
}

function setTotal_estructura_izq($total_estructura_izq) {
    $this->total_estructura_izq = $total_estructura_izq;
}

function setTotal_bursitis_izq($total_bursitis_izq) {
    $this->total_bursitis_izq = $total_bursitis_izq;
}

function setTotal_erosion_izq($total_erosion_izq) {
    $this->total_erosion_izq = $total_erosion_izq;
}

function setTotal_calc_izq($total_calc_izq) {
    $this->total_calc_izq = $total_calc_izq;
}

function setTotal_pwd_izq($total_pwd_izq) {
    $this->total_pwd_izq = $total_pwd_izq;
}

function setTotal_izq($total_izq) {
    $this->total_izq = $total_izq;
}

function setTriceps_valor_der($triceps_valor_der) {
    $this->triceps_valor_der = $triceps_valor_der;
}

function setTriceps_espesor_der($triceps_espesor_der) {
    $this->triceps_espesor_der = $triceps_espesor_der;
}

function setTriceps_estructura_der($triceps_estructura_der) {
    $this->triceps_estructura_der = $triceps_estructura_der;
}

function setTriceps_bursitis_der($triceps_bursitis_der) {
    $this->triceps_bursitis_der = $triceps_bursitis_der;
}

function setTriceps_erosion_der($triceps_erosion_der) {
    $this->triceps_erosion_der = $triceps_erosion_der;
}

function setTriceps_calc_der($triceps_calc_der) {
    $this->triceps_calc_der = $triceps_calc_der;
}

function setTriceps_pwd_der($triceps_pwd_der) {
    $this->triceps_pwd_der = $triceps_pwd_der;
}

function setCuadriceps_valor_der($cuadriceps_valor_der) {
    $this->cuadriceps_valor_der = $cuadriceps_valor_der;
}

function setCuadriceps_espesor_der($cuadriceps_espesor_der) {
    $this->cuadriceps_espesor_der = $cuadriceps_espesor_der;
}

function setCuadriceps_estructura_der($cuadriceps_estructura_der) {
    $this->cuadriceps_estructura_der = $cuadriceps_estructura_der;
}

function setCuadriceps_bursitis_der($cuadriceps_bursitis_der) {
    $this->cuadriceps_bursitis_der = $cuadriceps_bursitis_der;
}

function setCuadriceps_erosion_der($cuadriceps_erosion_der) {
    $this->cuadriceps_erosion_der = $cuadriceps_erosion_der;
}

function setCuadriceps_calc_der($cuadriceps_calc_der) {
    $this->cuadriceps_calc_der = $cuadriceps_calc_der;
}

function setCuadriceps_pwd_der($cuadriceps_pwd_der) {
    $this->cuadriceps_pwd_der = $cuadriceps_pwd_der;
}

function setPatelar_prox_valor_der($patelar_prox_valor_der) {
    $this->patelar_prox_valor_der = $patelar_prox_valor_der;
}

function setPatelar_prox_espesor_der($patelar_prox_espesor_der) {
    $this->patelar_prox_espesor_der = $patelar_prox_espesor_der;
}

function setPatelar_prox_estructura_der($patelar_prox_estructura_der) {
    $this->patelar_prox_estructura_der = $patelar_prox_estructura_der;
}

function setPatelar_prox_bursitis_der($patelar_prox_bursitis_der) {
    $this->patelar_prox_bursitis_der = $patelar_prox_bursitis_der;
}

function setPatelar_prox_erosion_der($patelar_prox_erosion_der) {
    $this->patelar_prox_erosion_der = $patelar_prox_erosion_der;
}

function setPatelar_prox_calc_der($patelar_prox_calc_der) {
    $this->patelar_prox_calc_der = $patelar_prox_calc_der;
}

function setPatelar_prox_pwd_der($patelar_prox_pwd_der) {
    $this->patelar_prox_pwd_der = $patelar_prox_pwd_der;
}

function setPatelar_dist_valor_der($patelar_dist_valor_der) {
    $this->patelar_dist_valor_der = $patelar_dist_valor_der;
}

function setPatelar_dist_espesor_der($patelar_dist_espesor_der) {
    $this->patelar_dist_espesor_der = $patelar_dist_espesor_der;
}

function setPatelar_dist_estructura_der($patelar_dist_estructura_der) {
    $this->patelar_dist_estructura_der = $patelar_dist_estructura_der;
}

function setPatelar_dist_bursitis_der($patelar_dist_bursitis_der) {
    $this->patelar_dist_bursitis_der = $patelar_dist_bursitis_der;
}

function setPatelar_dist_erosion_der($patelar_dist_erosion_der) {
    $this->patelar_dist_erosion_der = $patelar_dist_erosion_der;
}

function setPatelar_dist_calc_der($patelar_dist_calc_der) {
    $this->patelar_dist_calc_der = $patelar_dist_calc_der;
}

function setPatelar_dist_pwd_der($patelar_dist_pwd_der) {
    $this->patelar_dist_pwd_der = $patelar_dist_pwd_der;
}

function setAquileo_valor_der($aquileo_valor_der) {
    $this->aquileo_valor_der = $aquileo_valor_der;
}

function setAquileo_espesor_der($aquileo_espesor_der) {
    $this->aquileo_espesor_der = $aquileo_espesor_der;
}

function setAquileo_estructura_der($aquileo_estructura_der) {
    $this->aquileo_estructura_der = $aquileo_estructura_der;
}

function setAquileo_bursitis_der($aquileo_bursitis_der) {
    $this->aquileo_bursitis_der = $aquileo_bursitis_der;
}

function setAquileo_erosion_der($aquileo_erosion_der) {
    $this->aquileo_erosion_der = $aquileo_erosion_der;
}

function setAquileo_calc_der($aquileo_calc_der) {
    $this->aquileo_calc_der = $aquileo_calc_der;
}

function setAquileo_pwd_der($aquileo_pwd_der) {
    $this->aquileo_pwd_der = $aquileo_pwd_der;
}

function setFascia_plantar_valor_der($fascia_plantar_valor_der) {
    $this->fascia_plantar_valor_der = $fascia_plantar_valor_der;
}

function setFascia_plantar_espesor_der($fascia_plantar_espesor_der) {
    $this->fascia_plantar_espesor_der = $fascia_plantar_espesor_der;
}

function setFascia_plantar_estructura_der($fascia_plantar_estructura_der) {
    $this->fascia_plantar_estructura_der = $fascia_plantar_estructura_der;
}

function setFascia_plantar_bursitis_der($fascia_plantar_bursitis_der) {
    $this->fascia_plantar_bursitis_der = $fascia_plantar_bursitis_der;
}

function setFascia_plantar_erosion_der($fascia_plantar_erosion_der) {
    $this->fascia_plantar_erosion_der = $fascia_plantar_erosion_der;
}

function setFascia_plantar_calc_der($fascia_plantar_calc_der) {
    $this->fascia_plantar_calc_der = $fascia_plantar_calc_der;
}

function setFascia_plantar_pwd_der($fascia_plantar_pwd_der) {
    $this->fascia_plantar_pwd_der = $fascia_plantar_pwd_der;
}

function setTotal_espesor_der($total_espesor_der) {
    $this->total_espesor_der = $total_espesor_der;
}

function setTotal_estructura_der($total_estructura_der) {
    $this->total_estructura_der = $total_estructura_der;
}

function setTotal_bursitis_der($total_bursitis_der) {
    $this->total_bursitis_der = $total_bursitis_der;
}

function setTotal_erosion_der($total_erosion_der) {
    $this->total_erosion_der = $total_erosion_der;
}

function setTotal_calc_der($total_calc_der) {
    $this->total_calc_der = $total_calc_der;
}

function setTotal_pwd_der($total_pwd_der) {
    $this->total_pwd_der = $total_pwd_der;
}

function setTotal_der($total_der) {
    $this->total_der = $total_der;
}

function setHallazgos_masei($hallazgos_masei) {
    $this->hallazgos_masei = $hallazgos_masei;
}

function setIdresultado($idresultado) {
    $this->idresultado = $idresultado;
}

function setIdpaciente($idpaciente) {
    $this->idpaciente = $idpaciente;
}

function setIdprograma($idprograma) {
    $this->idprograma = $idprograma;
}

public function getResultadoarchivo(){
    return $this->resultado_archivo;
  }

  public function setResultadoarchivo($resultado_archivo){
    $this->resultado_archivo = $resultado_archivo;
  }



  public function save(){
    $sql = "INSERT INTO resultados VALUES (NULL,{$this->getIdpaciente()},{$this->getIdprograma()},'{$this->getRadio_hiper_der()}','{$this->getRadio_hiper_izq()}','{$this->getRadio_power_der()}','{$this->getRadio_power_izq()}','{$this->getIfp2_hiper_izq()}','{$this->getIfp2_hiper_der()}','{$this->getIfp2_power_izq()}','{$this->getIfp2_power_der()}','{$this->getIfp3_hiper_izq()}','{$this->getIfp3_hiper_der()}','{$this->getIfp3_power_izq()}','{$this->getIfp3_power_der()}','{$this->getIfp4_hiper_izq()}','{$this->getIfp4_hiper_der()}','{$this->getIfp4_power_izq()}','{$this->getIfp4_power_der()}','{$this->getIfp5_hiper_izq()}','{$this->getIfp5_hiper_der()}','{$this->getIfp5_power_izq()}','{$this->getIfp5_power_der()}','{$this->getRrl_hiper_izq()}','{$this->getRrl_hiper_der()}','{$this->getRrl_power_izq()}','{$this->getRrl_power_der()}','{$this->getFlexlong_2_derrame_der()}','{$this->getFlexlong_2_power_der()}','{$this->getFlexlong_2_derrame_izq()}','{$this->getFlexlong_2_power_izq()}','{$this->getFlexlong_3_derrame_der()}','{$this->getFlexlong_3_power_der()}','{$this->getFlexlong_3_derrame_izq()}','{$this->getFlexlong_3_power_izq()}','{$this->getFlexlong_4_derrame_der()}','{$this->getFlexlong_4_power_der()}','{$this->getFlexlong_4_derrame_izq()}','{$this->getFlexlong_4_power_izq()}','{$this->getFlexlong_5_derrame_der()}','{$this->getFLexlong_5_power_der()}','{$this->getFlexlong_5_derrame_izq()}','{$this->getFlexlong_5_power_izq()}','{$this->getExtlong_2_derrame_der()}','{$this->getExtlong_2_power_der()}','{$this->getExtlong_2_derrame_izq()}','{$this->getExtlong_2_power_izq()}','{$this->getExtlong_3_derrame_der()}','{$this->getExtlong_3_power_der()}','{$this->getExtlong_3_derrame_izq()}','{$this->getExtlong_3_power_izq()}','{$this->getExtlong_4_derrame_der()}','{$this->getExtlong_4_power_der()}','{$this->getExtlong_4_derrame_izq()}','{$this->getExtlong_4_power_izq()}','{$this->getExtlong_5_derrame_der()}','{$this->getExtlong_5_power_der()}','{$this->getExtlong_5_derrame_izq()}','{$this->getExtlong_5_power_izq()}','{$this->getExtran_2_derrame_der()}','{$this->getExtran_2_power_der()}','{$this->getExtran_2_derrame_izq()}','{$this->getExtran_2_power_izq()}','{$this->getInfraprox_camb_der()}','{$this->getInfraprox_camb_izq()}','{$this->getInfraprox_engro_der()}','{$this->getInfraprox_engro_izq()}','{$this->getInfraprox_calci_der()}','{$this->getInfraprox_calci_izq()}','{$this->getInfraprox_ente_der()}','{$this->getInfraprox_ente_izq()}','{$this->getInfraprox_power_der()}','{$this->getInfraprox_power_izq()}','{$this->getInfradis_camb_der()}','{$this->getInfradis_camb_izq()}','{$this->getInfradis_engro_der()}','{$this->getInfradis_engro_izq()}','{$this->getInfradis_calci_der()}','{$this->getInfradis_calci_izq()}','{$this->getInfradis_ente_der()}','{$this->getInfradis_ente_izq()}','{$this->getInfradis_power_der()}','{$this->getInfradis_power_izq()}','{$this->getAquileo_camb_der()}','{$this->getAquileo_camb_izq()}','{$this->getAquileo_engro_der()}','{$this->getAquileo_engro_izq()}','{$this->getAquileo_calci_der()}','{$this->getAquileo_calci_izq()}','{$this->getAquileo_ente_der()}','{$this->getAquileo_ente_izq()}','{$this->getAquileo_power_der()}','{$this->getAquileo_power_izq()}','{$this->getEpilat_camb_der()}','{$this->getEpilat_camb_izq()}','{$this->getEpilat_engro_der()}','{$this->getEpilat_engro_izq()}','{$this->getEpilat_calci_der()}','{$this->getEpilat_calci_izq()}','{$this->getEpilat_ento_der()}','{$this->getEpilat_ento_izq()}','{$this->getEpilat_power_der()}','{$this->getEpilat_power_izq()}','{$this->getConclusion_artritis()}','{$this->getConclusion_tendones()}','{$this->getConclusion_entesis()}','{$this->getConclusion_hallazgos()}',{$this->getTriceps_valor_izq()},{$this->getTriceps_espesor_izq()},{$this->getTriceps_estructura_izq()},{$this->getTriceps_bursitis_izq()},{$this->getTriceps_erosion_izq()},{$this->getTriceps_calc_izq()},{$this->getTriceps_pwd_izq()},{$this->getCuadriceps_valor_izq()},{$this->getCuadriceps_espesor_izq()},{$this->getCuadriceps_estructura_izq()},{$this->getCuadriceps_bursitis_izq()},{$this->getCuadriceps_erosion_izq()},{$this->getCuadriceps_calc_izq()},{$this->getCuadriceps_pwd_izq()},{$this->getPatelar_prox_valor_izq()},{$this->getPatelar_prox_espesor_izq()},{$this->getPatelar_prox_estructura_izq()},{$this->getPatelar_prox_bursitis_izq()},{$this->getPatelar_prox_erosion_izq()},{$this->getPatelar_prox_calc_izq()},{$this->getPatelar_prox_pwd_izq()},{$this->getPatelar_dist_valor_izq()},{$this->getPatelar_dist_espesor_izq()},{$this->getPatelar_dist_estructura_izq()},{$this->getPatelar_dist_bursitis_izq()},{$this->getPatelar_dist_erosion_izq()},{$this->getPatelar_dist_calc_izq()},{$this->getPatelar_dist_pwd_izq()},{$this->getAquileo_valor_izq()},{$this->getAquileo_espesor_izq()},{$this->getAquileo_estructura_izq()},{$this->getAquileo_bursitis_izq()},{$this->getAquileo_erosion_izq()},{$this->getAquileo_calc_izq()},{$this->getAquileo_pwd_izq()},{$this->getFascia_plantar_valor_izq()},{$this->getFascia_plantar_espesor_izq()},{$this->getFascia_plantar_estructura_izq()},{$this->getFascia_plantar_bursitis_izq()},{$this->getFascia_plantar_erosion_izq()},{$this->getFascia_plantar_calc_izq()},{$this->getFascia_plantar_pwd_izq()},{$this->getTotal_espesor_izq()},{$this->getTotal_estructura_izq()},{$this->getTotal_bursitis_izq()},{$this->getTotal_erosion_izq()},{$this->getTotal_calc_izq()},{$this->getTotal_pwd_izq()},{$this->getTotal_izq()},{$this->getTriceps_valor_der()},{$this->getTriceps_espesor_der()},{$this->getTriceps_estructura_der()},{$this->getTriceps_bursitis_der()},{$this->getTriceps_erosion_der()},{$this->getTriceps_calc_der()},{$this->getTriceps_pwd_der()},{$this->getCuadriceps_valor_der()},{$this->getCuadriceps_espesor_der()},{$this->getCuadriceps_estructura_der()},{$this->getCuadriceps_bursitis_der()},{$this->getCuadriceps_erosion_der()},{$this->getCuadriceps_calc_der()},{$this->getCuadriceps_pwd_der()},{$this->getPatelar_prox_valor_der()},{$this->getPatelar_prox_espesor_der()},{$this->getPatelar_prox_estructura_der()},{$this->getPatelar_prox_bursitis_der()},{$this->getPatelar_prox_erosion_der()},{$this->getPatelar_prox_calc_der()},{$this->getPatelar_prox_pwd_der()},{$this->getPatelar_dist_valor_der()},{$this->getPatelar_dist_espesor_der()},{$this->getPatelar_dist_estructura_der()},{$this->getPatelar_dist_bursitis_der()},{$this->getPatelar_dist_erosion_der()},{$this->getPatelar_dist_calc_der()},{$this->getPatelar_dist_pwd_der()},{$this->getAquileo_valor_der()},{$this->getAquileo_espesor_der()},{$this->getAquileo_estructura_der()},{$this->getAquileo_bursitis_der()},{$this->getAquileo_erosion_der()},{$this->getAquileo_calc_der()},{$this->getAquileo_pwd_der()},{$this->getFascia_plantar_valor_der()},{$this->getFascia_plantar_espesor_der()},{$this->getFascia_plantar_estructura_der()},{$this->getFascia_plantar_bursitis_der()},{$this->getFascia_plantar_erosion_der()},{$this->getFascia_plantar_calc_der()},{$this->getFascia_plantar_pwd_der()},{$this->getTotal_espesor_der()},{$this->getTotal_estructura_der()},{$this->getTotal_bursitis_der()},{$this->getTotal_erosion_der()},{$this->getTotal_calc_der()},{$this->getTotal_pwd_der()},{$this->getTotal_der()},'{$this->getHallazgos_masei()}',Null)";
    //echo var_dump($sql);
    //die();
    $save = $this->db->query($sql);
    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function editar(){
      $sql = "UPDATE resultados SET idresultado = {$this->getIdresultado()}, idpaciente = {$this->getIdpaciente()}, idprograma = {$this->getIdprograma()}, radio_hiper_der = '{$this->getRadio_hiper_der()}', radio_hiper_izq = '{$this->getRadio_hiper_izq()}', radio_power_der = '{$this->getRadio_power_der()}', radio_power_izq = '{$this->getRadio_power_izq()}', ifp2_hiper_izq = '{$this->getIfp2_hiper_izq()}', ifp2_hiper_der = '{$this->getIfp2_hiper_der()}', ifp2_power_izq = '{$this->getIfp2_power_izq()}', ifp2_power_der = '{$this->getIfp2_power_der()}', ifp3_hiper_izq = '{$this->getIfp3_hiper_izq()}', ifp3_hiper_der = '{$this->getIfp3_hiper_der()}', ifp3_power_izq = '{$this->getIfp3_power_izq()}', ifp3_power_der = '{$this->getIfp3_power_der()}', ifp4_hiper_izq = '{$this->getIfp4_hiper_izq()}', ifp4_hiper_der = '{$this->getIfp4_hiper_der()}', ifp4_power_izq = '{$this->getIfp4_power_izq()}', ifp4_power_der = '{$this->getIfp4_power_der()}', ifp5_hiper_izq = '{$this->getIfp5_hiper_izq()}', ifp5_hiper_der = '{$this->getIfp5_hiper_der()}', ifp5_power_izq = '{$this->getIfp5_power_izq()}', ifp5_power_der = '{$this->getIfp5_power_der()}', rrl_hiper_izq = '{$this->getRrl_hiper_izq()}', rrl_hiper_der = '{$this->getRrl_hiper_der()}', rrl_power_izq = '{$this->getRrl_power_izq()}', rrl_power_der = '{$this->getRrl_power_der()}', flexlong_2_derrame_der = '{$this->getFlexlong_2_derrame_der()}', flexlong_2_power_der = '{$this->getFlexlong_2_power_der()}', flexlong_2_derrame_izq = '{$this->getFlexlong_2_derrame_izq()}', flexlong_2_power_izq = '{$this->getFlexlong_2_power_izq()}', flexlong_3_derrame_der = '{$this->getFlexlong_3_derrame_der()}', flexlong_3_power_der = '{$this->getFlexlong_3_power_der()}', flexlong_3_derrame_izq = '{$this->getFlexlong_3_derrame_izq()}', flexlong_3_power_izq = '{$this->getFlexlong_3_power_izq()}', flexlong_4_derrame_der = '{$this->getFlexlong_4_derrame_der()}', flexlong_4_power_der = '{$this->getFlexlong_4_power_der()}', flexlong_4_derrame_izq = '{$this->getFlexlong_4_derrame_izq()}', flexlong_4_power_izq = '{$this->getFlexlong_4_power_izq()}', flexlong_5_derrame_der = '{$this->getFlexlong_5_derrame_der()}', flexlong_5_power_der = '{$this->getFlexlong_5_power_der()}', flexlong_5_derrame_izq = '{$this->getFlexlong_5_derrame_izq()}', flexlong_5_power_izq = '{$this->getFlexlong_5_power_izq()}', extlong_2_derrame_izq = '{$this->getExtlong_2_derrame_izq()}', extlong_2_power_izq = '{$this->getExtlong_2_power_izq()}', extlong_2_derrame_der = '{$this->getExtlong_2_derrame_der()}', extlong_2_power_der = '{$this->getExtlong_2_power_der()}', extlong_3_derrame_izq = '{$this->getExtlong_3_derrame_izq()}', extlong_3_power_izq = '{$this->getExtlong_3_power_izq()}', extlong_3_derrame_der = '{$this->getExtlong_3_derrame_der()}', extlong_3_power_der = '{$this->getExtlong_3_power_der()}', extlong_4_derrame_izq = '{$this->getExtlong_4_derrame_izq()}', extlong_4_power_izq = '{$this->getExtlong_4_power_izq()}', extlong_4_derrame_der = '{$this->getExtlong_4_derrame_der()}', extlong_4_power_der = '{$this->getExtlong_4_power_der()}', extlong_5_derrame_der = '{$this->getExtlong_5_derrame_der()}',  extlong_5_power_der = '{$this->getExtlong_5_power_der()}', extlong_5_derrame_izq = '{$this->getExtlong_5_derrame_izq()}',  extlong_5_power_izq = '{$this->getExtlong_5_power_izq()}', extran_2_derrame_der = '{$this->getExtran_2_derrame_der()}', extran_2_power_der = '{$this->getExtran_2_power_der()}', extran_2_derrame_izq = '{$this->getExtran_2_derrame_izq()}', extran_2_power_izq = '{$this->getExtran_2_power_izq()}',  infraprox_camb_der = '{$this->getInfraprox_camb_der()}', infraprox_camb_izq = '{$this->getInfraprox_camb_izq()}', infraprox_engro_der = '{$this->getInfraprox_engro_der()}', infraprox_engro_izq = '{$this->getInfraprox_engro_izq()}', infraprox_calci_der = '{$this->getInfraprox_calci_der()}', infraprox_calci_izq = '{$this->getInfraprox_calci_izq()}', infraprox_ente_der = '{$this->getInfraprox_ente_der()}', infraprox_ente_izq = '{$this->getInfraprox_ente_izq()}', infraprox_power_der = '{$this->getInfraprox_power_der()}', infraprox_power_izq = '{$this->getInfraprox_power_izq()}', infradis_camb_der = '{$this->getInfradis_camb_der()}', infradis_camb_izq = '{$this->getInfradis_camb_izq()}', infradis_engro_der = '{$this->getInfradis_engro_der()}', infradis_engro_izq = '{$this->getInfradis_engro_izq()}', infradis_calci_der = '{$this->getInfradis_calci_der()}', infradis_calci_izq = '{$this->getInfradis_calci_izq()}', infradis_ente_der = '{$this->getInfradis_ente_der()}', infradis_ente_izq = '{$this->getInfradis_ente_izq()}', infradis_power_der = '{$this->getInfradis_power_der()}', infradis_power_izq = '{$this->getInfradis_power_izq()}', aquileo_camb_der = '{$this->getAquileo_camb_der()}', aquileo_camb_izq = '{$this->getAquileo_camb_izq()}', aquileo_engro_der = '{$this->getAquileo_engro_der()}', aquileo_engro_izq = '{$this->getAquileo_engro_izq()}', aquileo_calci_der = '{$this->getAquileo_calci_der()}', aquileo_calci_izq = '{$this->getAquileo_calci_izq()}', aquileo_ente_der = '{$this->getAquileo_ente_der()}', aquileo_ente_izq = '{$this->getAquileo_ente_izq()}', aquileo_power_der = '{$this->getAquileo_power_der()}', aquileo_power_izq = '{$this->getAquileo_power_izq()}', epilat_camb_der = '{$this->getEpilat_camb_der()}', epilat_camb_izq = '{$this->getEpilat_camb_izq()}', epilat_engro_der = '{$this->getEpilat_engro_der()}', epilat_engro_izq = '{$this->getEpilat_engro_izq()}', epilat_calci_der = '{$this->getEpilat_calci_der()}', epilat_calci_izq = '{$this->getEpilat_calci_izq()}', epilat_ento_der = '{$this->getEpilat_ento_der()}', epilat_ento_izq = '{$this->getEpilat_ento_izq()}', epilat_power_der = '{$this->getEpilat_power_der()}', epilat_power_izq = '{$this->getEpilat_power_izq()}', conclusion_artritis = '{$this->getConclusion_artritis()}', conclusion_tendones  = '{$this->getConclusion_tendones()}', conclusion_entesis = '{$this->getConclusion_entesis()}', conclusion_hallazgos = '{$this->getConclusion_hallazgos()}', 
      triceps_valor_izq = {$this->getTriceps_valor_izq()}, triceps_espesor_izq = {$this->getTriceps_espesor_izq()}, triceps_estructura_izq = {$this->getTriceps_estructura_izq()}, triceps_bursitis_izq = {$this->getTriceps_bursitis_izq()}, triceps_erosion_izq = {$this->getTriceps_erosion_izq()}, triceps_calc_izq = {$this->getTriceps_calc_izq()}, triceps_pwd_izq = {$this->getTriceps_pwd_izq()}, cuadriceps_valor_izq = {$this->getCuadriceps_valor_izq()}, cuadriceps_espesor_izq = {$this->getCuadriceps_espesor_izq()}, cuadriceps_estructura_izq = {$this->getCuadriceps_estructura_izq()}, cuadriceps_bursitis_izq = {$this->getCuadriceps_bursitis_izq()}, cuadriceps_erosion_izq = {$this->getCuadriceps_erosion_izq()}, cuadriceps_calc_izq = {$this->getCuadriceps_calc_izq()}, cuadriceps_pwd_izq = {$this->getCuadriceps_pwd_izq()}, patelar_prox_valor_izq = {$this->getPatelar_prox_valor_izq()}, patelar_prox_espesor_izq = {$this->getPatelar_prox_espesor_izq()}, patelar_prox_estructura_izq = {$this->getPatelar_prox_estructura_izq()}, patelar_prox_bursitis_izq = {$this->getPatelar_prox_bursitis_izq()}, patelar_prox_erosion_izq = {$this->getPatelar_prox_erosion_izq()}, patelar_prox_calc_izq = {$this->getPatelar_prox_calc_izq()}, patelar_prox_pwd_izq = {$this->getPatelar_prox_pwd_izq()}, patelar_dist_valor_izq = {$this->getPatelar_dist_valor_izq()}, patelar_dist_espesor_izq = {$this->getPatelar_dist_espesor_izq()}, patelar_dist_estructura_izq = {$this->getPatelar_dist_estructura_izq()}, patelar_dist_bursitis_izq = {$this->getPatelar_dist_bursitis_izq()}, patelar_dist_erosion_izq = {$this->getPatelar_dist_erosion_izq()}, patelar_dist_calc_izq = {$this->getPatelar_dist_calc_izq()}, patelar_dist_pwd_izq = {$this->getPatelar_dist_pwd_izq()}, aquileo_valor_izq = {$this->getAquileo_valor_izq()}, aquileo_espesor_izq = {$this->getAquileo_espesor_izq()}, aquileo_estructura_izq = {$this->getAquileo_estructura_izq()}, aquileo_bursitis_izq = {$this->getAquileo_bursitis_izq()}, aquileo_erosion_izq = {$this->getAquileo_erosion_izq()}, aquileo_calc_izq = {$this->getAquileo_calc_izq()}, aquileo_pwd_izq = {$this->getAquileo_pwd_izq()}, fascia_plantar_valor_izq = {$this->getFascia_plantar_valor_izq()}, fascia_plantar_espesor_izq = {$this->getFascia_plantar_espesor_izq()}, fascia_plantar_estructura_izq = {$this->getFascia_plantar_estructura_izq()}, fascia_plantar_bursitis_izq = {$this->getFascia_plantar_bursitis_izq()}, fascia_plantar_erosion_izq = {$this->getFascia_plantar_erosion_izq()}, fascia_plantar_calc_izq = {$this->getFascia_plantar_calc_izq()}, fascia_plantar_pwd_izq = {$this->getFascia_plantar_pwd_izq()}, total_espesor_izq = {$this->getTotal_espesor_izq()}, total_estructura_izq = {$this->getTotal_estructura_izq()}, total_bursitis_izq = {$this->getTotal_bursitis_izq()}, total_erosion_izq = {$this->getTotal_erosion_izq()}, total_calc_izq = {$this->getTotal_calc_izq()}, total_pwd_izq = {$this->getTotal_pwd_izq()}, total_izq = {$this->getTotal_izq()}, 
      triceps_valor_der = {$this->getTriceps_valor_der()}, triceps_espesor_der = {$this->getTriceps_espesor_der()}, triceps_estructura_der = {$this->getTriceps_estructura_der()}, triceps_bursitis_der = {$this->getTriceps_bursitis_der()}, triceps_erosion_der = {$this->getTriceps_erosion_der()}, triceps_calc_der = {$this->getTriceps_calc_der()}, triceps_pwd_der = {$this->getTriceps_pwd_der()}, cuadriceps_valor_der = {$this->getCuadriceps_valor_der()}, cuadriceps_espesor_der = {$this->getCuadriceps_espesor_der()}, cuadriceps_estructura_der = {$this->getCuadriceps_estructura_der()}, cuadriceps_bursitis_der = {$this->getCuadriceps_bursitis_der()}, cuadriceps_erosion_der = {$this->getCuadriceps_erosion_der()}, cuadriceps_calc_der = {$this->getCuadriceps_calc_der()}, cuadriceps_pwd_der = {$this->getCuadriceps_pwd_der()}, patelar_prox_valor_der = {$this->getPatelar_prox_valor_der()}, patelar_prox_espesor_der = {$this->getPatelar_prox_espesor_der()}, patelar_prox_estructura_der = {$this->getPatelar_prox_estructura_der()}, patelar_prox_bursitis_der = {$this->getPatelar_prox_bursitis_der()}, patelar_prox_erosion_der = {$this->getPatelar_prox_erosion_der()}, patelar_prox_calc_der = {$this->getPatelar_prox_calc_der()}, patelar_prox_pwd_der = {$this->getPatelar_prox_pwd_der()}, patelar_dist_valor_der = {$this->getPatelar_dist_valor_der()}, patelar_dist_espesor_der = {$this->getPatelar_dist_espesor_der()}, patelar_dist_estructura_der = {$this->getPatelar_dist_estructura_der()}, patelar_dist_bursitis_der = {$this->getPatelar_dist_bursitis_der()}, patelar_dist_erosion_der = {$this->getPatelar_dist_erosion_der()}, patelar_dist_calc_der = {$this->getPatelar_dist_calc_der()}, patelar_dist_pwd_der = {$this->getPatelar_dist_pwd_der()}, aquileo_valor_der = {$this->getAquileo_valor_der()}, aquileo_espesor_der = {$this->getAquileo_espesor_der()}, aquileo_estructura_der = {$this->getAquileo_estructura_der()}, aquileo_bursitis_der = {$this->getAquileo_bursitis_der()}, aquileo_erosion_der = {$this->getAquileo_erosion_der()}, aquileo_calc_der = {$this->getAquileo_calc_der()}, aquileo_pwd_der = {$this->getAquileo_pwd_der()}, fascia_plantar_valor_der = {$this->getFascia_plantar_valor_der()}, fascia_plantar_espesor_der = {$this->getFascia_plantar_espesor_der()}, fascia_plantar_estructura_der = {$this->getFascia_plantar_estructura_der()}, fascia_plantar_bursitis_der = {$this->getFascia_plantar_bursitis_der()}, fascia_plantar_erosion_der = {$this->getFascia_plantar_erosion_der()}, fascia_plantar_calc_der = {$this->getFascia_plantar_calc_der()}, fascia_plantar_pwd_der = {$this->getFascia_plantar_pwd_der()}, total_espesor_der = {$this->getTotal_espesor_der()}, total_estructura_der = {$this->getTotal_estructura_der()}, total_bursitis_der = {$this->getTotal_bursitis_der()}, total_erosion_der = {$this->getTotal_erosion_der()}, total_calc_der = {$this->getTotal_calc_der()}, total_pwd_der = {$this->getTotal_pwd_der()}, total_der = {$this->getTotal_der()}, hallazgos_masei = '{$this->getHallazgos_masei()}',
      resultado_archivo = '{$this->getResultadoarchivo()}' WHERE idresultado={$this->idresultado} ;" ;
    //echo var_dump($sql);
    //die();
    $save = $this->db->query($sql);
    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function login(){
    $result = false;
    $username = $this->username;
    $password = $this->contrasena;
    //Comprobar si existe el usuario
    $sql = "SELECT * FROM usuario WHERE username = '$username' AND estatus = 1";
    $login = $this->db->query($sql);

    if ($login && $login->num_rows == 1) {
      $usuario = $login->fetch_object();

      //Verificar contraseña
      $verify = password_verify($password, $usuario->contrasena);


      if ($verify) {
        $result = $usuario;
      }
    }
    return $result;
  }

  public function getAll(){
    //$resultados = $this->db->query("SELECT * FROM resultados ORDER BY idresultado DESC");
    $resultados = $this->db->query("SELECT res.idresultado, pac.nombre AS nombre_paciente, pro.nombre AS nombre_programa,
    pac.tipo_estudio AS tipo_estudio,
	pac.folio_id AS folio_id,
    med.nombre AS nombre_medico, 
	p.nombre AS nombre_estudio,
	meda.nombre AS nombre_medico_tratante,
	pac.creado_por AS creado_por
    FROM resultados res 
    INNER JOIN pacientes pac ON pac.idpaciente = res.idpaciente
    INNER JOIN programas pro ON pro.idprograma = pac.idprograma
    INNER JOIN usuario med ON med.idusuario = pac.medico_tratante
    INNER JOIN persona p ON p.idpersona = pac.estudio
    INNER JOIN usuario meda ON meda.idusuario = pac.medico_asociado");
	
        return $resultados;
  }
  
  public function getOne(){
    $resultado = $this->db->query("SELECT res.*, 
    pac.nombre AS nombre_paciente, pac.edad AS edad_paciente, pac.folio_id AS folio_paciente, pac.tipo_estudio AS tipo_estudio,
    pac.activacion_farma AS activacion_farma,
	pro.nombre AS nombre_programa,
    med.nombre AS nombre_medico, p.nombre AS nombre_estudio,
	med.nombre AS nombre_medico_tratante,
	meda.nombre AS nombre_medico_asociado,
	pac.creado_por AS creado_por
    FROM resultados res 
    INNER JOIN pacientes pac ON pac.idpaciente = res.idpaciente
    INNER JOIN programas pro ON pro.idprograma = pac.idprograma
    INNER JOIN usuario med ON med.idusuario = pac.medico_tratante
    INNER JOIN usuario meda ON meda.idusuario = pac.medico_asociado
    INNER JOIN persona p ON p.idpersona = pac.estudio WHERE idresultado= {$this->getIdresultado()}");
    return $resultado->fetch_object();
  }
  
  public function getMedicoTratante($idmedico){
    //$resultados = $this->db->query("SELECT * FROM resultados ORDER BY idresultado DESC");
    $resultados = $this->db->query("SELECT res.idresultado, pac.nombre AS nombre_paciente, pro.nombre AS nombre_programa,
    pac.tipo_estudio AS tipo_estudio,
	pac.creado_por AS creado_por,
    med.nombre AS nombre_medico, p.nombre AS nombre_estudio,
	meda.nombre AS nombre_medico_tratante
    FROM resultados res 
    INNER JOIN pacientes pac ON pac.idpaciente = res.idpaciente
    INNER JOIN programas pro ON pro.idprograma = pac.idprograma
    INNER JOIN usuario med ON med.idusuario = pac.medico_tratante
    INNER JOIN usuario meda ON meda.idusuario = pac.medico_asociado
    INNER JOIN persona p ON p.idpersona = pac.estudio WHERE med.idusuario = $idmedico or meda.idusuario = $idmedico");
        return $resultados;
  }
  public function getMedicoAsociado($idmedico){
    //$resultados = $this->db->query("SELECT * FROM resultados ORDER BY idresultado DESC");
    $resultados = $this->db->query("SELECT res.idresultado, pac.nombre AS nombre_paciente, pro.nombre AS nombre_programa,
    pac.tipo_estudio AS tipo_estudio,
	pac.creado_por AS creado_por,
    med.nombre AS nombre_medico, p.nombre AS nombre_estudio,
	meda.nombre AS nombre_medico_tratante
    FROM resultados res 
    INNER JOIN pacientes pac ON pac.idpaciente = res.idpaciente
    INNER JOIN programas pro ON pro.idprograma = pac.idprograma
    INNER JOIN usuario med ON med.idusuario = pac.medico_tratante
    INNER JOIN usuario meda ON meda.idusuario = pac.medico_asociado
    INNER JOIN persona p ON p.idpersona = pac.estudio WHERE med.idusuario = $idmedico or meda.idusuario = $idmedico");
        return $resultados;
  }
  public function getCallCenter($idcallcenter){
    //$resultados = $this->db->query("SELECT * FROM resultados ORDER BY idresultado DESC");
    $resultados = $this->db->query("SELECT res.idresultado, pac.nombre AS nombre_paciente, pro.nombre AS nombre_programa,
    pac.tipo_estudio AS tipo_estudio,
	pac.creado_por AS creado_por,
    med.nombre AS nombre_medico, p.nombre AS nombre_estudio,
	meda.nombre AS nombre_medico_tratante
    FROM resultados res 
    INNER JOIN pacientes pac ON pac.idpaciente = res.idpaciente
    INNER JOIN programas pro ON pro.idprograma = pac.idprograma
    INNER JOIN usuario med ON med.idusuario = pac.medico_tratante
    INNER JOIN usuario meda ON meda.idusuario = pac.medico_asociado
    INNER JOIN persona p ON p.idpersona = pac.estudio WHERE pac.creado_por = $idcallcenter ");
        return $resultados;
  }

}

?>