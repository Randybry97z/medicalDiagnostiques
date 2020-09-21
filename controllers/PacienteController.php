<?php

require_once 'models/paciente.php';
require_once 'models/persona.php';

class PacienteController{
  public function index(){

  }

  public function registro(){
    require_once 'views/paciente/registro.php';
  }

  public function editar(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $edit=true;

      $paciente = new Paciente();
      $paciente->setId($id);
      $pac = $paciente->getOne();

      header("Location:".base_url.'?controller=PacienteController&action=detalle&id='.$id);
    }
  }

  public function programa(){
    if (isset($_GET['idprograma']) && isset($_GET['idcliente'])) {
      $idprograma = $_GET['idprograma'];
      $idcliente = $_GET['idcliente'];

      $paciente = new Paciente();
      $pacientes = $paciente->getPrograma($idprograma,$idcliente);
    }
    require_once 'views/paciente/gestion.php';
  }

  public function programaCancelados(){
    if (isset($_GET['idprograma']) && isset($_GET['idcliente'])) {
      $idprograma = $_GET['idprograma'];
      $idcliente = $_GET['idcliente'];

      $paciente = new Paciente();
      $pacientes = $paciente->getCanceladosPrograma($idprograma,$idcliente);
    }
    require_once 'views/paciente/cancelados.php';
  }

  public function detalle(){
    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $paciente = new Paciente();
      $paciente->setId($id);
      $pac = $paciente->getOne();

    }
    require_once 'views/paciente/detalle.php';
  }

  public function save(){
    if(isset($_POST)){
      $creado_por = isset($_POST['creado_por']) ? $_POST['creado_por'] : false;
      $estudio = isset($_POST['estudio']) ? $_POST['estudio'] : false;
      $folio_id = isset($_POST['folio_id']) ? $_POST['folio_id'] : false;
      $folio = isset($_POST['folio']) ? $_POST['folio'] : false;
      $activacion_farma = isset($_POST['activacion_farma']) ? $_POST['activacion_farma'] : false;
      $activacion_representante = isset($_POST['activacion_representante']) ? $_POST['activacion_representante'] : false;
      $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
      $clinica = isset($_POST['clinica']) ? $_POST['clinica'] : false;
      $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
      $movil = isset($_POST['movil']) ? $_POST['movil'] : false;
      $estado = isset($_POST['estado']) ? $_POST['estado'] : false;
      $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : false;
      $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
      $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : false;
      $fecha_nacimiento = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : false;
      $tipo_estudio = isset($_POST['tipo_estudio']) ? $_POST['tipo_estudio'] : false;

      //Calcula edad del paciente
      list($ano,$mes,$dia) = explode("-",$fecha_nacimiento);
      $ano_diferencia  = date("Y") - $ano;
      $mes_diferencia = date("m") - $mes;
      $dia_diferencia   = date("d") - $dia;
      if ($dia_diferencia < 0 || $mes_diferencia < 0)
        $ano_diferencia--;
      $edad = $ano_diferencia;

      $idlaboratorio = isset($_POST['idlaboratorio']) ? $_POST['idlaboratorio'] : false;
      //$fecha_captura = isset($_POST['fecha_captura']) ? $_POST['fecha_captura'] : false;

      $fecha_cita = isset($_POST['fecha_cita']) ? $_POST['fecha_cita'] : false;
      $tipo_cupon = isset($_POST['tipo_cupon']) ? $_POST['tipo_cupon'] : false;
      $fecha_confirmacion = isset($_POST['fecha_confirmacion']) ? $_POST['fecha_confirmacion'] : false;
      $estatus = isset($_POST['estatus']) ? $_POST['estatus'] : false;
      $motivo_cancelacion = isset($_POST['motivo_cancelacion']) ? $_POST['motivo_cancelacion'] : false;
      $medico_tratante = isset($_POST['medico_tratante']) ? $_POST['medico_tratante'] : false;
      $factura_asociado = isset($_POST['factura_asociado']) ? $_POST['factura_asociado'] : false;
      $factura_mdt = isset($_POST['factura_mdt']) ? $_POST['factura_mdt'] : false;
      $pago_factura = isset($_POST['pago_factura']) ? $_POST['pago_factura'] : false;
      $fecha_entrega = isset($_POST['fecha_entrega']) ? $_POST['fecha_entrega'] : false;
      $observaciones = isset($_POST['observaciones']) ? $_POST['observaciones'] : false;
      $idprograma = isset($_POST['idprograma']) ? $_POST['idprograma'] : false;
      $cupon_original = isset($_POST['cupon_original']) ? 1 : 0;
      $cupon_copia = isset($_POST['cupon_copia']) ? 1 : 0;
      $consentimiento_original = isset($_POST['consentimiento_original']) ? 1 : 0;
      $consentimiento_copia = isset($_POST['consentimiento_copia']) ? 1 : 0;
      $resultado_original = isset($_POST['resultado_original']) ? 1 : 0;
      $resultado_copia = isset($_POST['resultado_copia']) ? 1 : 0;
      $hora_cita = isset($_POST['hora_cita']) ? $_POST['hora_cita'] : false;
      $fecha_resultados = isset($_POST['fecha_resultados']) ? $_POST['fecha_resultados'] : false;

      // Formulate the Difference between two dates
      $today = date('Y-m-d');
      $cita = date($fecha_cita);
      $hour = abs(strtotime($cita) - strtotime($today))/(60*60).'hrs';

      if($idlaboratorio && $nombre && $idprograma && $estudio){
        //$idlaboratorio && $nombre && $sexo && $edad && $telefono && $estado && $estudio && $medico_tratante
      $paciente = new Paciente();
      $paciente->setCreadoPor($creado_por);
      $paciente->setEstudio($estudio);
      $paciente->setFolioID($folio_id);
      $paciente->setFolio($folio);
      $paciente->setActivacionFarma($activacion_farma);
      $paciente->setActivacionRepresentante($activacion_representante);
      $paciente->setNombre($nombre);
      $paciente->setClinica($clinica);
      $paciente->setTelefono($telefono);
      $paciente->setMovil($movil);
      $paciente->setEstado($estado);
      $paciente->setCiudad($ciudad);
      $paciente->setDireccion($direccion);
      $paciente->setSexo($sexo);
      $paciente->setEdad($edad);
      $paciente->setFechaNacimiento($fecha_nacimiento);
      $paciente->setIdLaboratorio($idlaboratorio);
      $paciente->setFechaCita($fecha_cita);
      $paciente->setTipoCupon($tipo_cupon);
      $paciente->setFechaConfirmacion($hour);
      $paciente->setEstatus($estatus);
      $paciente->setCancelacion($motivo_cancelacion);
      $paciente->setMedicoTratante($medico_tratante);
      $paciente->setFacturaAsociado($factura_asociado);
      $paciente->setFacturaMDT($factura_mdt);
      $paciente->setPagoFactura($pago_factura);
      $paciente->setFechaEntrega($fecha_entrega);
      $paciente->setObservaciones($observaciones);
      $paciente->setIdPrograma($idprograma);
      $paciente->setCuponOriginal($cupon_original);
      $paciente->setCuponCopia($cupon_copia);
      $paciente->setConsentimientoOriginal($consentimiento_original);
      $paciente->setConsentimientoCopia($consentimiento_copia);
      $paciente->setResultadoOriginal($resultado_original);
      $paciente->setResultadoCopia($resultado_copia);
      $paciente->setTipoestudio($tipo_estudio);
      $paciente->setHoraCita($hora_cita);
      $paciente->setFechaResultados($fecha_resultados);
      // Guardar resultados
      if(isset($_FILES['resultados'])){
        $file = $_FILES['resultados'];
        $file_name = $_FILES['resultados']['name'];
        $mimetype = $_FILES['resultados']['type'];

        if ($mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif' || $mimetype == 'application/pdf') {

            if (!is_dir('uploads/resultados')) {
              mkdir('uploads/resultados', 0777, true);
            }
            move_uploaded_file($file['tmp_name'], 'uploads/resultados/'.$file_name);
            $paciente->setResultados($file_name);
        }
      }

      if(isset($_GET['id'])){
          $id = $_GET['id'];
          $paciente->setId($id);
        $save = $paciente->editar();
      }else{
        $save = $paciente->save();
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
    header("Location:".base_url.'?controller=PacienteController&action=programa&idprograma='.$idprograma."&idcliente=".$estudio);
  }

} //FIN CLASE

?>
