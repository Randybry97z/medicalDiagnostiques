//const base_url = "http://3.134.247.207/mdt_final/";
let btn_elim = document.getElementById("elim");

function deleteUsuarioPermiso(idusuario_permiso){
	bootbox.confirm("¿Está seguro de quitar al usuario del permiso?", function(result) {
        if (result) {
            fetch('localhost/mdt_final/?controller=UsuarioController&action=deletePermiso&id='+idusuario_permiso)
                .then(res=>{
                    location.reload()
                })
                .catch(err=>{alert(err)})
        }
    })
}