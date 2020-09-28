const button_d = document.getElementById('desactivar');
const button_a = document.getElementById('activar');

function desactivar(idusuario) {
    bootbox.confirm("¿Está Seguro de desactivar el usuario?", function(result) {
        if (result) {
            fetch('http://localhost/mdt_final/?controller=UsuarioController&action=desactivar&id='+idusuario)
                .then(res=>{
                    location.reload()
                })
                .catch(err=>{alert(err)})
        }
    })
}

function activar(idusuario) {
    bootbox.confirm("¿Está Seguro de activar el usuario?", function(result) {
        if (result) {
            fetch('http://localhost/mdt_final/?controller=UsuarioController&action=activar&id='+idusuario)
                .then(res=>{
                    location.reload()
                    console.log(res)
                })
                .catch(err=>{console.log(err)})
        }
    })
}
