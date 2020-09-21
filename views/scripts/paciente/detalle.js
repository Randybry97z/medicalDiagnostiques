//const base_url = "http://3.134.247.207/mdt_final/";

var estudio = document.getElementById('estudio')
var folio_id = document.getElementById('folio_id')
var folio = document.getElementById('folio')
var activacion_farma = document.getElementById('activacion_farma')
var activacion_representante = document.getElementById('activacion_representante')
var nombre = document.getElementById('nombre')
var clinica = document.getElementById('clinica')
var telefono = document.getElementById('telefono')
var movil = document.getElementById('movil')
var estado = document.getElementById('estado')
var ciudad = document.getElementById('ciudad')
var direccion = document.getElementById('direccion')
var sexo = document.getElementById('sexo')
var edad = document.getElementById('edad')
var fecha_nacimiento = document.getElementById('fecha_nacimiento')
var idlaboratorio = document.getElementById('idlaboratorio')
var fecha_captura = document.getElementById('fecha_captura')
var fecha_cita = document.getElementById('fecha_cita')
var hora_cita = document.getElementById('hora_cita')
var tipo_cupon = document.getElementById('tipo_cupon')
var fecha_confirmacion = document.getElementById('fecha_confirmacion')
var idprograma = document.getElementById('idprograma')
var estatus_text = document.getElementById('estatus_text')
var estatus = document.getElementById('estatus')
var motivo_cancelacion = document.getElementById('cancelacion_div')
var medico_tratante = document.getElementById('medico_tratante')
var factura_asociado = document.getElementById('factura_asociado')
var factura_mdt = document.getElementById('factura_mdt')
var pago_factura = document.getElementById('pago_factura')
var fecha_entrega = document.getElementById('fecha_entrega')
var cupon_original = document.getElementById('cupon_original')
var cupon_copia = document.getElementById('cupon_copia')
var consentimiento_original = document.getElementById('consentimiento_original')
var consentimiento_copia = document.getElementById('consentimiento_copia')
var resultado_original = document.getElementById('resultado_original')
var resultado_copia = document.getElementById('resultado_copia')
var div_resultados = document.getElementById('div_resultados')
var resultados_txt = document.getElementById('resultados')
var observaciones = document.getElementById('observaciones')
var fecha_resultados = document.getElementById('fecha_resultados')
var guardar = document.getElementById('btnGuardar')
var editar = document.getElementById('btnEditar')
var enviar = document.getElementById('btnEnviar')
var btn_elimpm = document.getElementById('btnElim')
var btn_cancelar = document.getElementById('btnCancelar')

estudio.setAttribute("disabled","true")
folio_id.setAttribute("disabled","true")
folio.setAttribute("disabled","true")
activacion_farma.setAttribute("disabled","true")
activacion_representante.setAttribute("disabled","true")
nombre.setAttribute("disabled","true")
clinica.setAttribute("disabled","true")
telefono.setAttribute("disabled","true")
movil.setAttribute("disabled","true")
estado.setAttribute("disabled","true")
ciudad.setAttribute("disabled","true")
direccion.setAttribute("disabled","true")
sexo.setAttribute("disabled","true")
edad.setAttribute("disabled","true")
fecha_nacimiento.setAttribute("disabled","true")
idlaboratorio.setAttribute("disabled","true")
fecha_captura.setAttribute("disabled","true")
tipo_cupon.setAttribute("disabled","true")
fecha_confirmacion.setAttribute("disabled","true")
idprograma.setAttribute("disabled","true")
estatus.setAttribute("disabled","true")
motivo_cancelacion.setAttribute("disabled","true")
medico_tratante.setAttribute("disabled","true")
factura_asociado.setAttribute("disabled","true")
factura_mdt.setAttribute("disabled","true")
pago_factura.setAttribute("disabled","true")
fecha_entrega.setAttribute("disabled","true")
cupon_original.setAttribute("disabled","true")
cupon_copia.setAttribute("disabled","true")
consentimiento_original.setAttribute("disabled","true")
consentimiento_copia.setAttribute("disabled","true")
resultado_original.setAttribute("disabled","true")
resultado_copia.setAttribute("disabled","true")
div_resultados.setAttribute("disabled","true")
observaciones.setAttribute("disabled","true")
fecha_cita.setAttribute("disabled","true")
hora_cita.setAttribute("disabled","true")
fecha_resultados.setAttribute("disabled","true")
resultados_txt.style.display = 'none'
guardar.style.display = 'none'
enviar.style.display = 'none'
btn_cancelar.style.display = 'none'
if (btn_elimpm) {
	btn_elimpm.style.display = 'none'
}

function edit() {
	estudio.removeAttribute("disabled")
	folio_id.removeAttribute("disabled")
	folio.removeAttribute("disabled")
	activacion_farma.removeAttribute("disabled")
	activacion_representante.removeAttribute("disabled")
	nombre.removeAttribute("disabled")
	clinica.removeAttribute("disabled")
	telefono.removeAttribute("disabled")
	movil.removeAttribute("disabled")
	estado.removeAttribute("disabled")
	ciudad.removeAttribute("disabled")
	direccion.removeAttribute("disabled")
	sexo.removeAttribute("disabled")
	fecha_nacimiento.removeAttribute("disabled")
	idlaboratorio.removeAttribute("disabled")
	fecha_cita.removeAttribute('disabled')
	tipo_cupon.removeAttribute("disabled")
	fecha_confirmacion.removeAttribute("disabled")
	idprograma.removeAttribute("disabled")
	estatus.removeAttribute("disabled")
	motivo_cancelacion.removeAttribute("disabled")
	medico_tratante.removeAttribute("disabled")
	factura_asociado.removeAttribute("disabled")
	factura_mdt.removeAttribute("disabled")
	pago_factura.removeAttribute("disabled")
	fecha_entrega.removeAttribute("disabled")
	cupon_original.removeAttribute("disabled")
	cupon_copia.removeAttribute("disabled")
	consentimiento_original.removeAttribute("disabled")
	consentimiento_copia.removeAttribute("disabled")
	resultado_original.removeAttribute("disabled")
	resultado_copia.removeAttribute("disabled")
	observaciones.removeAttribute("disabled")
	hora_cita.removeAttribute("disabled")
	fecha_resultados.removeAttribute("disabled")
	resultados_txt.style.display = 'block'
	guardar.style.display = 'block'
	editar.style.display = 'none'
	enviar.style.display = 'none'
	btn_cancelar.style.display = 'block'
	estatus_text.style.display = 'none'
	estatus.style.display = 'block'
	if (btn_elimpm) {
		btn_elimpm.style.display = 'block'
	}
}

function cancelar() {
	estudio.setAttribute("disabled","true")
	folio_id.setAttribute("disabled","true")
	folio.setAttribute("disabled","true")
	activacion_farma.setAttribute("disabled","true")
	activacion_representante.setAttribute("disabled","true")
	nombre.setAttribute("disabled","true")
	clinica.setAttribute("disabled","true")
	telefono.setAttribute("disabled","true")
	movil.setAttribute("disabled","true")
	estado.setAttribute("disabled","true")
	ciudad.setAttribute("disabled","true")
	direccion.setAttribute("disabled","true")
	sexo.setAttribute("disabled","true")
	fecha_nacimiento.setAttribute("disabled","true")
	idlaboratorio.setAttribute("disabled","true")
	tipo_cupon.setAttribute("disabled","true")
	fecha_confirmacion.setAttribute("disabled","true")
	idprograma.setAttribute("disabled","true")
	estatus.setAttribute("disabled","true")
	motivo_cancelacion.setAttribute("disabled","true")
	medico_tratante.setAttribute("disabled","true")
	factura_asociado.setAttribute("disabled","true")
	factura_mdt.setAttribute("disabled","true")
	pago_factura.setAttribute("disabled","true")
	fecha_entrega.setAttribute("disabled","true")
	cupon_original.setAttribute("disabled","true")
	cupon_copia.setAttribute("disabled","true")
	consentimiento_original.setAttribute("disabled","true")
	consentimiento_copia.setAttribute("disabled","true")
	resultado_original.setAttribute("disabled","true")
	resultado_copia.setAttribute("disabled","true")
	div_resultados.setAttribute("disabled","true")
	observaciones.setAttribute("disabled","true")
	fecha_cita.setAttribute("disabled","true")
	hora_cita.setAttribute("disabled","true")
	fecha_resultados.setAttribute("disabled","true")
	resultados_txt.style.display = 'none'
	guardar.style.display = 'none'
	btn_cancelar.style.display = 'none'
	editar.style.display = 'block'
	estatus.style.display = 'none'
	estatus_text.style.display = 'block'
	if (btn_elimpm) {
		btn_elimpm.style.display = 'none'
	}
}

function showCancelacion() {
	if (estatus.value == 3){
		motivo_cancelacion.removeAttribute('hidden')
	}else {
		motivo_cancelacion.setAttribute('hidden', true)
	}
}

fecha_nacimiento.addEventListener('change', function () {
	let today = new Date()
	let nacimiento = new Date(fecha_nacimiento.value)
	var dd = String(today.getDate()).padStart(2, '0')
	var mm = String(today.getMonth() + 1).padStart(2, '0') //January is 0!
	var yyyy = today.getFullYear()

	let age = parseInt(yyyy - nacimiento.getFullYear())
	edad.value = age
})

if (resultados_txt.value != "" || div_resultados != "Sin resultados") {
	enviar.style.display = 'block'
}

fecha_cita.addEventListener('change', function () {
	let today = new Date(fecha_captura.value)
	let cita = new Date(fecha_cita.value)

	let time = Math.abs(cita-today)
	let hours = Math.ceil(time / (1000 * 60 * 60))
	fecha_confirmacion.value = hours + "hrs"

})