let changeState;
//cargar popovers de editar y crear
document.addEventListener('DOMContentLoaded', sync())


function change(){
    localStorage.setItem('change', true)
    
}
//sincronizar el local storage  
function sync() {
    changeState = localStorage.getItem('change')
    if(changeState === 'true') {
        localStorage.setItem('change', false)
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Cambios realizados',
            showConfirmButton: false,
            timer: 2000
        })
    }
}

//confirma la eliminacion
function confirmar(id, page) {
    Swal.fire({
        title: '¿Quiueres eliminar esta persona con el id: ' + id + '?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'confirmar',
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            Swal.fire('Eliminado Exitosamente!', '', 'success')
            setTimeout(() => {
                if(page === 'equipos'){
                    window.location.href = "../../components/equipos/delete.php/?id=" + id
                }else if(page === 'tablets'){
                    window.location.href = "../../components/tablets/delete.php/?id=" + id
                }else{
                    alert('<-- Error -->')
                }
            }, 2000);
        } else if (result.isDenied) {
            Swal.fire('No se elimino', '', 'info')
        }
    })
}