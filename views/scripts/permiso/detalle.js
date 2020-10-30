
let btn_elim = document.getElementById("elim");

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