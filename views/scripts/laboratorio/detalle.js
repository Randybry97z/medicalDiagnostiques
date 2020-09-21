//const base_url = "http://3.134.247.207/mdt_final/"
var nombre = document.getElementById('nombre')
var estatus = document.getElementById('estatus')
var contacto = document.getElementById('contacto')
var correo = document.getElementById('correo')
var telefono = document.getElementById('telefono')
var ciudad = document.getElementById('ciudad')
var estado = document.getElementById('estado')
var direccion = document.getElementById('direccion')
var movil = document.getElementById('movil')
var correo_ad = document.getElementById('correo_2')
var estudio = document.getElementById('estudio')
var atencion = document.getElementById('atencion')
var clinica = document.getElementById('clinica')
var razon_social = document.getElementById('razon_social')
var num_cuenta = document.getElementById('num_cuenta')
var convenio = document.getElementById('convenio')
var guardar = document.getElementById('btnGuardar')
var editar = document.getElementById('btnEditar')
var btn_cancelar = document.getElementById('btnCancelar')

nombre.setAttribute("disabled","true")
estatus.setAttribute("disabled","true")
contacto.setAttribute("disabled","true")
correo.setAttribute("disabled","true")
telefono.setAttribute("disabled","true")
ciudad.setAttribute("disabled","true")
estado.setAttribute("disabled", "true")
direccion.setAttribute("disabled", "true")
movil.setAttribute("disabled", "true")
correo_ad.setAttribute("disabled", "true")
estudio.setAttribute("disabled", "true")
atencion.setAttribute("disabled", "true")
clinica.setAttribute("disabled", "true")
razon_social.setAttribute("disabled", "true")
num_cuenta.setAttribute("disabled", "true")
convenio.setAttribute("disabled", "true")
guardar.style.display = 'none'
btn_cancelar.style.display = 'none'


function edit() {
	nombre.removeAttribute("disabled")
	contacto.removeAttribute("disabled")
	correo.removeAttribute("disabled")
	telefono.removeAttribute("disabled")
    ciudad.removeAttribute("disabled")
    estado.removeAttribute("disabled")
    direccion.removeAttribute("disabled")
    movil.removeAttribute("disabled")
    correo_ad.removeAttribute("disabled")
    estudio.removeAttribute("disabled")
    atencion.removeAttribute("disabled")
    clinica.removeAttribute("disabled")
    razon_social.removeAttribute("disabled")
    num_cuenta.removeAttribute("disabled")
    convenio.removeAttribute("disabled")
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
    ciudad.setAttribute("disabled","true")
    estado.setAttribute("disabled","true")
    direccion.setAttribute("disabled", "true")
    movil.setAttribute("disabled", "true")
    correo_ad.setAttribute("disabled", "true")
    estudio.setAttribute("disabled", "true")
    atencion.setAttribute("disabled", "true")
    clinica.setAttribute("disabled", "true")
    razon_social.setAttribute("disabled", "true")
    num_cuenta.setAttribute("disabled", "true")
    convenio.setAttribute("disabled", "true")
	guardar.style.display = 'none'
    editar.style.display = 'block'
	btn_cancelar.style.display = 'none'
}