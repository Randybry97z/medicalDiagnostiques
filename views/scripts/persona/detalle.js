const base_url = "http://localhost/mdt_final/"
var nombre = document.getElementById('nombre')
var estatus = document.getElementById('estatus')
var contacto = document.getElementById('contacto')
var correo = document.getElementById('correo')
var telefono = document.getElementById('telefono')
var tipo = document.getElementById('tipo')
var guardar = document.getElementById('btnGuardar')
var editar = document.getElementById('btnEditar')
var btn_cancelar = document.getElementById('btnCancelar')

nombre.setAttribute("disabled","true")
estatus.setAttribute("disabled","true")
contacto.setAttribute("disabled","true")
correo.setAttribute("disabled","true")
telefono.setAttribute("disabled","true")
tipo.setAttribute("disabled", "true")
guardar.style.display = 'none'
btn_cancelar.style.display = 'none'

function edit() {
	nombre.removeAttribute("disabled")
	contacto.removeAttribute("disabled")
	correo.removeAttribute("disabled")
	telefono.removeAttribute("disabled")
	tipo.removeAttribute("disabled")
	guardar.style.display = 'block'
	editar.style.display = 'none'
	btn_cancelar.style.display = 'block'
}

function cancelar() {
	nombre.setAttribute("disabled","true")
	estatus.setAttribute("disabled","true")
	contacto.setAttribute("disabled","true")
	correo.setAttribute("disabled","true")
	telefono.setAttribute("disabled","true")
	tipo.setAttribute("disabled", "true")
	guardar.style.display = 'none'
	btn_cancelar.style.display = 'none'
}
