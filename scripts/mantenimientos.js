let correctivo = document.querySelector('#mantenimientoCorrectivo')
let preventivo = document.querySelector('#mantenimientoPreventivo')

function mostrar(opcion){
    switch (opcion) {
        case 'correctivo':
            verificarClase(correctivo)
            break;
        
        case 'preventivo':
            verificarClase(preventivo)
        break;

        case 'todo':
            verificarClase('todo')
        break;
    
        default:
            break;
    }
}

function verificarClase(opcion){
    if(opcion == 'todo'){
        correctivo.classList.contains('d-none')?remove(correctivo):add(correctivo)
        preventivo.classList.contains('d-none')?remove(preventivo):add(preventivo)
    }else{
        opcion.classList.contains('d-none')?remove(opcion):add(opcion)
    }
    
}

function remove(opcion){
    opcion.classList.remove('d-none')
}

function add(opcion){
    opcion.classList.add('d-none')
}





