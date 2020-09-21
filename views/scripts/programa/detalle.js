//const base_url = "http://3.134.247.207/mdt_final/"
var nombre = document.getElementById('nombre')
var estatus = document.getElementById('estatus')
var observaciones = document.getElementById('observaciones')
var fecha_creacion = document.getElementById('fecha_creacion')
var guardar = document.getElementById('btnGuardar')
var editar = document.getElementById('btnEditar')
var btn_cancelar = document.getElementById('btnCancelar')


nombre.setAttribute("disabled","true")
estatus.setAttribute("disabled","true")
observaciones.setAttribute("disabled","true")
fecha_creacion.setAttribute("disabled","true")
guardar.style.display = 'none'
btn_cancelar.style.display = 'none'

function edit() {
	nombre.removeAttribute("disabled")
	estatus.removeAttribute("disabled")
	observaciones.removeAttribute("disabled")
	guardar.style.display = 'block'
	editar.style.display = 'none'
	btn_cancelar.style.display = 'block'
}

function cancelar() {
	location.href = base_url+'?controller=ProgramaController&action=gestion'
}