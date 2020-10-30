var nombre = document.getElementById('nombre')
var estatus = document.getElementById('estatus')
var correo = document.getElementById('correo')
var telefono = document.getElementById('telefono')
var username = document.getElementById('username')
var contrasena = document.getElementById('contrasena')
var tipo = document.getElementById('tipo')
var cumple = document.getElementById('cumple')
var guardar = document.getElementById('btnGuardar')
var editar = document.getElementById('btnEditar')
var btn_cancelar = document.getElementById('btnCancelar')
var permisos_select = document.getElementById('permisos')
var tipo = document.getElementById('tipo')

nombre.setAttribute("disabled","true")
estatus.setAttribute("disabled","true")
correo.setAttribute("disabled","true")
telefono.setAttribute("disabled","true")
username.setAttribute("disabled","true")
contrasena.setAttribute("disabled","true")
cumple.setAttribute("disabled","true")
permisos_select.setAttribute("disabled", "true")
tipo.setAttribute("disabled", "true")
guardar.style.display = 'none'
btn_cancelar.style.display = 'none'

function edit() {
	nombre.removeAttribute("disabled")
	correo.removeAttribute("disabled")
	telefono.removeAttribute("disabled")
	username.removeAttribute("disabled")
	tipo.removeAttribute("disabled")
	cumple.removeAttribute("disabled")
	permisos_select.removeAttribute("disabled")
	guardar.style.display = 'block'
	editar.style.display = 'none'
	btn_cancelar.style.display = 'block'
}

function cancelar() {
	location.reload()
}

function deleteUsuarioPermiso(idusuario_permiso){
	bootbox.confirm("¿Está seguro de quitar al usuario del permiso?", function(result) {
    if (result) {
      fetch('http://localhost/mdt_final/?controller=UsuarioController&action=deletePermiso&id='+idusuario_permiso)
        .then(res=>{
          location.reload()
        })
        .catch(err=>{alert(err)})
    }
  })
}
