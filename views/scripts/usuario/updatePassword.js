const base_url = "http://3.134.247.207/mdt_final/";
var btnCancelar = document.getElementById("btnCancelar")

function cancelar() {
	location.href = base_url+'?controller=UsuarioController&action=gestion'
}