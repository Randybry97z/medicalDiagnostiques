//let base_url = "http://3.134.247.207/mdt_final/";
var edad = document.getElementById('edad')
var fecha_nacimiento = document.getElementById('fecha_nacimiento')
var fecha_captura = document.getElementById('fecha_captura')
var fecha_cita = document.getElementById('fecha_cita')
var fecha_confirmacion = document.getElementById('fecha_confirmacion')
var estatus = document.getElementById('estatus')
var motivo_cancelacion = document.getElementById('cancelacion_div')



edad.setAttribute("disabled","true")
fecha_captura.setAttribute("disabled","true")
fecha_confirmacion.setAttribute("disabled","true")

//estatus.addEventListener('change',
function showCancelacion() {
	if (estatus.value == 3){
		motivo_cancelacion.removeAttribute('hidden')
	}else {
		motivo_cancelacion.setAttribute('hidden', true)
	}
}

function cancelar() {
	location.href = base_url+'?controller=InicioController&action=index'
}

fecha_nacimiento.addEventListener('change', function () {
	let today = new Date()
	let nacimiento = new Date(fecha_nacimiento.value)
	var dd = String(today.getDate()).padStart(2, '0')
	var mm = String(today.getMonth() + 1).padStart(2, '0') //January is 0!
	var yyyy = today.getFullYear()
	today = dd + '/' + mm + '/' + yyyy
	let age = parseInt(yyyy - nacimiento.getFullYear())
	edad.value = age
})

fecha_cita.addEventListener('change', function () {
	let today = new Date(fecha_captura.value)
	let cita = new Date(fecha_cita.value)

	let time = Math.abs(cita-today)
	let hours = Math.ceil(time / (1000 * 60 * 60))
	fecha_confirmacion.value = hours + "hrs"

})