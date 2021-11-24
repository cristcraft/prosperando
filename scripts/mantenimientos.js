let ambos = document.querySelector('#mantenimientoAmbos')
let correctivo = document.querySelector('#mantenimientoCorrectivo')
let preventivo = document.querySelector('#mantenimientoPreventivo')
let bntCrear = document.querySelector('#crear')
let formMante = document.querySelector('#form-mante')
let divFormButtons = document.querySelector('.form-buttons')
let divButtons = document.querySelector('.buttons')
let mantenimientos = document.querySelector('#mantenimientos')

function mostrar(opcion){
    switch (opcion) {
        case 'ambos':
            verificarClase(ambos)
            break;

        case 'correctivo':
            verificarClase(correctivo)
            break;
        
        case 'preventivo':
            verificarClase(preventivo)
        break;

        case 'mostrar':
            verificarClase(mantenimientos)
            break;

        case 'todo':
            verificarClase('todo')
        break;

        case 'crear':
            verificarClase('todo')
        break;
    
        default:
            break;
    }
}

function verificarClase(opcion){
    if(opcion === 'todo'){

        if(ambos !== null){
            ambos.classList.remove('d-none')
            ambos.classList.add('d-none')

            correctivo.classList.remove('d-none')
            correctivo.classList.add('d-none')

            preventivo.classList.remove('d-none')
            preventivo.classList.add('d-none')
            
            mostrarCards()
        }else{
            mantenimientos.classList.remove('d-none')
            mantenimientos.classList.add('d-none')
            
            mostrarCards()
        }

    }else{
        opcion.classList.contains('d-none')?remove(opcion):add(opcion)
    }
    
}

function remove(opcion){
    opcion.classList.remove('d-none')

    mostrarCards()
}

function add(opcion){
    opcion.classList.add('d-none')

    mostrarCards()
}

function mostrarCards(){
    if(correctivo !== null){
        if(divFormButtons.classList.contains('onlyButtons') && correctivo.classList.contains('d-none') && preventivo.classList.contains('d-none') && ambos.classList.contains('d-none')){
            //acomodar los botones
            acomodarBotones('ocultar')
        }else{
            //acomodar botones
        acomodarBotones('mostrar')
        }
    }else if( mantenimientos !== null){
        if(divFormButtons.classList.contains('onlyButtons') && mantenimientos.classList.contains('d-none')){
            //acomodar los botones
            acomodarBotones('ocultar')
        }else{
            //acomodar botones
            acomodarBotones('mostrar')
        }
    }
}

function acomodarBotones(accion){
    if(accion === 'ocultar'){
        //mostrar el formulario
        formMante.classList.remove('d-none')

        //se oculta el boton crear
        bntCrear.classList.add('d-none')
    
        //agrega la clase onlyButtons que esta en css, que hace que el div solo ocupe el 20%
        divFormButtons.classList.remove('onlyButtons')

        divButtons.classList.remove('flex-column')
        divButtons.classList.remove('buttonsFixed')
    }else if(accion === 'mostrar'){
        //ocultar el formulario
        formMante.classList.add('d-none')

        //se muestra el boton crear
        bntCrear.classList.remove('d-none')

        //agrega la clase onlyButtons que esta en css, que hace que el div solo ocupe el 20%
        divFormButtons.classList.add('onlyButtons')

        divButtons.classList.add('flex-column')
        divButtons.classList.add('buttonsFixed')
    }
}






