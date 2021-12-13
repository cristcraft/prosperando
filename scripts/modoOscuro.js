let modoOscuro = false;
let body = document.querySelector('#body')
let navbar = document.querySelector('#navbar')
let btnModoOscuro = document.querySelector('#btn-oscuro')
let btnSalir = document.querySelector('#btn-salir')
let tabla = document.querySelector('#equipos')
//texto longitud tabla
let txtLength = document.querySelector('#equipos_length select')
//texto de la paginacion
let txtPag = document.querySelector('#equipos_info')
//buscador
let buscador = document.querySelector('#equipos_filter')
//formulario creacion/edicion
let form = document.querySelector('.form')
//botones de la pagina mantenimiento
let buttons = document.querySelectorAll('.mantenimiento')




//carga el estado (sea true o false) del modo oscuro al iniciar la pagina
document.addEventListener('DOMContentLoaded', ()=>{
    modoOscuro = localStorage.getItem('modoOscuro');
    if(modoOscuro === 'true'){
        onModoOscuro()
        
    }    
})

//guarda el estado del modo oosucro(true o flase)
function guardar(estado){
    localStorage.setItem('modoOscuro', estado)
}

//activa el modo oscuro
function onModoOscuro(){
    //navbar
    pagNavBar()
    
    //pag equipos
    pagEquipos()
    

    //pag Create
    pagCreate()

    //
    pageMantenimietno()
    
}

//camba la barra de navegacion a oscuro o claro 
function pagNavBar(){
    if(navbar.classList.contains('navbar-light')){
        //body
        body.classList.add('bg-dark')

        //navbar
        navbar.classList.remove('navbar-light', 'bg-light')
        navbar.classList.add('navbar-dark', 'bg-dark')
        btnModoOscuro.classList.remove('btn-outline-dark')
        btnModoOscuro.classList.add('btn-outline-light')
        btnSalir.classList.remove('btn-outline-dark')
        btnSalir.classList.add('btn-outline-light')

        modoOscuro = true
        guardar(modoOscuro)
    }else{
        modoOscuro = false
        guardar(modoOscuro)
        //body
        body.classList.remove('bg-dark')
        

        //navbar
        navbar.classList.remove('navbar-dark', 'bg-dark')
        navbar.classList.add('navbar-light', 'bg-light')

        //boton
        btnModoOscuro.classList.remove('btn-outline-light')
        btnModoOscuro.classList.add('btn-outline-dark')
        btnSalir.classList.remove('btn-outline-light')
        btnSalir.classList.add('btn-outline-dark')

        
    }
    
}


//cambia la pagina de equipos a oscuro o claro
function pagEquipos(){
    /*si la el elemento es nulo significa que no esta en esa pagina asi que no se ejecutara
    esta parte del codigo*/
    if(tabla !== null){
        if(modoOscuro){
            //txt
            addTxtBlanco()
        }else{
            //txt
            removeTxtBlanco()
        }
    }
}


//cambia la pagina de create a claro o oscuro
function pagCreate(){
    /*si la el elemento es nulo significa que no esta en esa pagina asi que no se ejecutara
    esta parte del codigo*/
    if(form !== null){
        if(modoOscuro){
            //form
            form.classList.add('text-white', 'form-oscuro')
    
            addTxtBlanco()
        }else{
            //form
            form.classList.remove('text-white', 'form-oscuro')
            removeTxtBlanco()
        }
    }
}




function addTxtBlanco(){
    /*agrega la clse text-white para que el texto se de color blanco*/
    body.classList.add('text-white')
    if(tabla){
        tabla.classList.add('text-white')  
    }

}
function removeTxtBlanco(){
    /*quita la clse text-white para que el texto se de color blanco*/
    body.classList.remove('text-white')
    if(tabla){
        tabla.classList.remove('text-white')
    }
}

function pageMantenimietno(){
    if(body.classList.contains('bg-dark')){
        addTxtBlanco()
        buttons.forEach(button => {
            button.classList.remove('btn-outline-dark')
            button.classList.add('btn-outline-light')
        });
    }else{
        removeTxtBlanco()
        buttons.forEach(button => {
            button.classList.add('btn-outline-dark')
            button.classList.remove('btn-outline-light')
        });
    }
}
