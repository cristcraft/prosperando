//=================== SUCURSALES ================================================
function addSucursal(){
    let sucursal = prompt('Escribe el nombre de la sucursal que deseas agregar: ')
    if(sucursal !== null){
        window.location.href = `../addElements/addElements.php/?table=sucursales&accion=add&sucursal=${sucursal}`
    }
}

function editSucursal(id){
    let sucursal = prompt('Escribe el nombre de la sucursal que deseas editar: ')
    if(sucursal !== null){
        window.location.href = `../addElements/addElements.php/?table=sucursales&accion=edit&sucursal=${sucursal}&id=${id}`
    }
}

function deleteSucursal(id, name){
    let confirm1 = confirm(`¿Seguro quieres eliminar ${name}?`)
    if(confirm1){
        window.location.href = `../addElements/addElements.php/?table=sucursales&accion=delete&id=${id}`
    }
}
//===============================================================================

//===================== AREAS ===================================================
function addArea(){
    let area = prompt('Escribe el nombre de la area que deseas agregar: ')
    if(area){
        window.location.href = `../addElements/addElements.php/?table=areas&accion=add&area=${area}`
    }
}

function editAreas(id){
    let area = prompt('Escribe el nombre de la area que deseas editar: ')
    if(area !== null){
        window.location.href = `../addElements/addElements.php/?table=areas&accion=edit&area=${area}&id=${id}`
    }
}

function deleteAreas(id, name){
    let confirm1 = confirm(`¿Seguro quieres eliminar ${name}?`)
    if(confirm1){
        window.location.href = `../addElements/addElements.php/?table=areas&accion=delete&id=${id}`
    }
}

//===============================================================================

//===================== MARCAS ==================================================
function addMarcas(){
    let marca = prompt('Escribe el nombre de la marca que deseas agregar: ')
    if(marca){
        window.location.href = `../addElements/addElements.php/?table=marcas&accion=add&marca=${marca}`
    }
}

function editMarcas(id){
    let marca = prompt('Escribe el nombre de la marca que deseas editar: ')
    if(marca !== null){
        window.location.href = `../addElements/addElements.php/?table=marcas&accion=edit&marca=${marca}&id=${id}`
    }
}

function deleteMarcas(id, name){
    let confirm1 = confirm(`¿Seguro quieres eliminar ${name}?`)
    if(confirm1){
        window.location.href = `../addElements/addElements.php/?table=marcas&accion=delete&id=${id}`
    }
}

//===============================================================================

//===================== PROCESADORES ============================================
function addProcesadores(){
    let procesador = prompt('Escribe el nombre del procesador que deseas agregar: ')
    if(procesador){
        window.location.href = `../addElements/addElements.php/?table=procesadores&accion=add&procesador=${procesador}`
    }
}

function editProcesadores(id){
    let procesador = prompt('Escribe el nombre del a procesador que deseas editar: ')
    if(procesador !== null){
        window.location.href = `../addElements/addElements.php/?table=procesadores&accion=edit&procesador=${procesador}&id=${id}`
    }
}

function deleteProcesadores(id, name){
    let confirm1 = confirm(`¿Seguro quieres eliminar ${name}?`)
    if(confirm1){
        window.location.href = `../addElements/addElements.php/?table=procesadores&accion=delete&id=${id}`
    }
}

//===============================================================================

//===================== TIPO MEMORIAS ============================================
function addTipo_memorias(){
    let tipo_memoria = prompt('Escribe el tipo de memoria que deseas agregar: ')
    if(tipo_memoria){
        window.location.href = `../addElements/addElements.php/?table=tipo_memorias&accion=add&tipo_memoria=${tipo_memoria}`
    }
}

function editTipo_memorias(id){
    let tipo_memoria = prompt('Escribe el tipo de memoria que deseas editar: ')
    if(tipo_memoria !== null){
        window.location.href = `../addElements/addElements.php/?table=tipo_memorias&accion=edit&tipo_memoria=${tipo_memoria}&id=${id}`
    }
}

function deleteTipo_memorias(id, name){
    let confirm1 = confirm(`¿Seguro quieres eliminar ${name}?`)
    if(confirm1){
        window.location.href = `../addElements/addElements.php/?table=tipo_memorias&accion=delete&id=${id}`
    }
}

//===============================================================================

//===================== AREAS TABLETS ===========================================
function addArea_tablet(){
    let area = prompt('Escribe el nombre de la area que deseas agregar: ')
    if(area){
        window.location.href = `../addElements/addElements.php/?table=areas_tablets&accion=add&area=${area}`
    }
}

function editAreas_tablets(id){
    let area = prompt('Escribe el nombre de la area que deseas editar: ')
    if(area !== null){
        window.location.href = `../addElements/addElements.php/?table=areas_tablets&accion=edit&area=${area}&id=${id}`
    }
}

function deleteAreas_tablets(id, name){
    let confirm1 = confirm(`¿Seguro quieres eliminar ${name}?`)
    if(confirm1){
        window.location.href = `../addElements/addElements.php/?table=areas_tablets&accion=delete&id=${id}`
    }
}

//===============================================================================

//===================== MARCAS TABLETS ===========================================
function addMarcas_tablet(){
    let marca = prompt('Escribe el nombre de la marca que deseas agregar: ')
    if(marca){
        window.location.href = `../addElements/addElements.php/?table=marcas_tablets&accion=add&marca=${marca}`
    }
}

function editMarcas_tablets(id){
    let marca = prompt('Escribe el nombre de la marca que deseas editar: ')
    if(marca !== null){
        window.location.href = `../addElements/addElements.php/?table=marcas_tablets&accion=edit&marca=${marca}&id=${id}`
    }
}

function deleteMarcas_tablets(id, name){
    let confirm1 = confirm(`¿Seguro quieres eliminar ${name}?`)
    if(confirm1){
        window.location.href = `../addElements/addElements.php/?table=marcas_tablets&accion=delete&id=${id}`
    }
}

//===============================================================================

//===================== PROCESADORES TABLETS ====================================
function addProcesadores_tablet(){
    let procesador = prompt('Escribe el nombre del procesador que deseas agregar: ')
    if(procesador){
        window.location.href = `../addElements/addElements.php/?table=procesadores_tablets&accion=add&procesador=${procesador}`
    }
}

function editProcesadores_tablets(id){
    let procesador = prompt('Escribe el nombre del a procesador que deseas editar: ')
    if(procesador !== null){
        window.location.href = `../addElements/addElements.php/?table=procesadores_tablets&accion=edit&procesador=${procesador}&id=${id}`
    }
}

function deleteProcesadoress_tablets(id, name){
    let confirm1 = confirm(`¿Seguro quieres eliminar ${name}?`)
    if(confirm1){
        window.location.href = `../addElements/addElements.php/?table=procesadores_tablets&accion=delete&id=${id}`
    }
}

//===============================================================================

//===================== RESOLUCION TABLETS ====================================
function addResolucion_tablets(){
    let resolucion = prompt('Escribe la resolucion que deseas agregar: ')
    if(resolucion){
        window.location.href = `../addElements/addElements.php/?table=resolucion_tablets&accion=add&resolucion=${resolucion}`
    }
}

function editResolucion_tablets(id){
    let resolucion = prompt('Escribe la resolucion que deseas editar: ')
    if(resolucion !== null){
        window.location.href = `../addElements/addElements.php/?table=resolucion_tablets&accion=edit&resolucion=${resolucion}&id=${id}`
    }
}

function deleteResolucion_tablets(id, name){
    let confirm1 = confirm(`¿Seguro quieres eliminar la resolucion ${name}?`)
    if(confirm1){
        window.location.href = `../addElements/addElements.php/?table=resolucion_tablets&accion=delete&id=${id}`
    }
}

//===============================================================================

//===================== OS TABLETS ====================================
function addOs_tablets(){
    let os = prompt('Escribe la version de android que deseas agregar: ')
    if(os){
        window.location.href = `../addElements/addElements.php/?table=os_tablets&accion=add&os=${os}`
    }
}

function editOs_tablets(id){
    let os = prompt('Escribe la version de android que deseas editar: ')
    if(os !== null){
        window.location.href = `../addElements/addElements.php/?table=os_tablets&accion=edit&os=${os}&id=${id}`
    }
}

function deleteOs_tablets(id, name){
    let confirm1 = confirm(`¿Seguro quieres eliminar la version ${name}?`)
    if(confirm1){
        window.location.href = `../addElements/addElements.php/?table=os_tablets&accion=delete&id=${id}`
    }
}

//===============================================================================


