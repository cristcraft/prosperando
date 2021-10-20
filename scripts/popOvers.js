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
function confirmar(id) {
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
                window.location = '../components/delete.php/?id=' + id
            }, 2000);
        } else if (result.isDenied) {
            Swal.fire('No se elimino', '', 'info')
        }
    })
}