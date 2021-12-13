let changeState;
let allSelected = []
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
    }else if(changeState === 'error'){
        localStorage.setItem('change', false)
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'No se realizaron cambios',
            showConfirmButton: false,
            timer: 2000
        })
    }
}

//confirma la eliminacion
function confirmar(id, page) {
    Swal.fire({
        title: '¿Quiueres eliminar el Codigo: ' + id + '?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'confirmar',
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            Swal.fire('Eliminado Exitosamente!', '', 'success')
            setTimeout(() => {
                if(page === 'equipos'){
                    window.location.href = "../../components/equipos/delete.php/?codigo_administrativo=" + id
                }else if(page === 'tablets'){
                    window.location.href = "../../components/tablets/delete.php/?id=" + id
                }else if(page === 'impresoras'){
                    window.location.href = "../../components/impresoras/delete.php/?id=" + id
                }else if(page === 'switches'){
                    window.location.href = "../../components/switches/delete.php/?id=" + id
                }else if(page === 'servidores'){
                    window.location.href = "../../components/servidores/delete.php/?id=" + id
                }else if(page === 'mantenimientosEquipos'){
                    window.location.href = "../../../components/mantenimientos/equipos/delete.php/?id=" + id
                }else if(page === 'mantenimientosImpresoras'){
                    window.location.href = "../../../components/mantenimientos/impresoras/delete.php/?id=" + id
                }else{
                    alert('<-- Error -->')
                }
            }, 2000);
        } else if (result.isDenied) {
            Swal.fire('No se elimino', '', 'info')
        }
    })
}

//seleccionar y pintar la columna seleccionada
document.addEventListener('DOMContentLoaded', ()=>{
    let selected = JSON.parse(localStorage.getItem('selected'))
    
    for (let i = 0; i < selected.length; i++) {
        if(selected[i].state === 'selected'){
            select(selected[i].id)
        }  
        
    }  
})
function select(id){
    let column = document.querySelector(`#tr${id}`)

    if(column.classList.contains('selected')){
        column.classList.remove('selected')
        localStorage.setItem('selected', '')
        for (let i = 0; i < allSelected.length; i++) {
            if(allSelected[i].id === id){
                allSelected.splice(i, 1)
            }
        }
        save()
    }else{
        column.classList.add('selected')
        allSelected.push({'id': id, 'state': 'selected'})
        save()
    }
    console.log(allSelected)
}

function save(){
    localStorage.setItem('selected', JSON.stringify(allSelected))
}


