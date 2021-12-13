//=================== SUCURSALES ================================================
function addSucursal(){
    let sucursal = prompt('Escribe el nombre de la sucursal que deseas agregar: ')
    if(sucursal !== null){
        window.location.href = `../addElements/addElements.php/?table=sucursales&accion=add&sucursal=${sucursal}`
    }
}

function editSucursal(id, old){
    let sucursal = prompt('Escribe el nombre de la sucursal que deseas editar: ')
    if(sucursal !== null){
        window.location.href = `../addElements/addElements.php/?table=sucursales&accion=edit&sucursal=${sucursal}&id=${id}&old=${old}`
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

function editAreas(id,old){
    let area = prompt('Escribe el nombre de la area que deseas editar: ')
    if(area !== null){
        window.location.href = `../addElements/addElements.php/?table=areas&accion=edit&area=${area}&id=${id}&old=${old}`
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

function editMarcas(id, old){
    let marca = prompt('Escribe el nombre de la marca que deseas editar: ')
    if(marca !== null){
        window.location.href = `../addElements/addElements.php/?table=marcas&accion=edit&marca=${marca}&id=${id}&old=${old}`
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

function editProcesadores(id,old){
    let procesador = prompt('Escribe el nombre del a procesador que deseas editar: ')
    if(procesador !== null){
        window.location.href = `../addElements/addElements.php/?table=procesadores&accion=edit&procesador=${procesador}&id=${id}&old=${old}`
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

function editTipo_memorias(id,old){
    let tipo_memoria = prompt('Escribe el tipo de memoria que deseas editar: ')
    if(tipo_memoria !== null){
        window.location.href = `../addElements/addElements.php/?table=tipo_memorias&accion=edit&tipo_memoria=${tipo_memoria}&id=${id}&old=${old}`
    }
}

function deleteTipo_memorias(id, name){
    let confirm1 = confirm(`¿Seguro quieres eliminar ${name}?`)
    if(confirm1){
        window.location.href = `../addElements/addElements.php/?table=tipo_memorias&accion=delete&id=${id}`
    }
}

//===============================================================================

//=====================MARCAS DISCO DURO ========================================
function addMarca_disco_duro(){
    let marca_disco_duro = prompt('Escribe la marca del disco duro que deseas agregar: ')
    if(marca_disco_duro){
        window.location.href = `../addElements/addElements.php/?table=marcas_disco_duro&accion=add&marca_disco_duro=${marca_disco_duro}`
    }
}

function editMarca_disco_duro(id,old){
    let marca_disco_duro = prompt('Escribe la marca del disco duro que deseas editar: ')
    if(marca_disco_duro !== null){
        window.location.href = `../addElements/addElements.php/?table=marcas_disco_duro&accion=edit&marca_disco_duro=${marca_disco_duro}&id=${id}&old=${old}`
    }
}

function deleteMarca_disco_duro(id, name){
    let confirm1 = confirm(`¿Seguro quieres eliminar la marca ${name}?`)
    if(confirm1){
        window.location.href = `../addElements/addElements.php/?table=marcas_disco_duro&accion=delete&id=${id}`
    }
}
//===============================================================================

//=====================TIPO DISCO DURO ========================================
function addTipos_disco(){
    let tipos_disco = prompt('Escribe la marca del disco duro que deseas agregar: ')
    if(tipos_disco){
        window.location.href = `../addElements/addElements.php/?table=tipos_disco&accion=add&tipo_disco=${tipos_disco}`
    }
}

function editTipos_disco(id,old){
    let tipos_disco = prompt('Escribe la marca del disco duro que deseas editar: ')
    if(tipos_disco !== null){
        window.location.href = `../addElements/addElements.php/?table=tipos_disco&accion=edit&tipo_disco=${tipos_disco}&id=${id}&old=${old}`
    }
}

function deleteTipos_disco(id, name){
    let confirm1 = confirm(`¿Seguro quieres eliminar la marca ${name}?`)
    if(confirm1){
        window.location.href = `../addElements/addElements.php/?table=tipos_disco&accion=delete&id=${id}`
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

function editAreas_tablets(id, old){
    let area = prompt('Escribe el nombre de la area que deseas editar: ')
    if(area !== null){
        window.location.href = `../addElements/addElements.php/?table=areas_tablets&accion=edit&area=${area}&id=${id}&old=${old}`
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

function editMarcas_tablets(id, old){
    let marca = prompt('Escribe el nombre de la marca que deseas editar: ')
    if(marca !== null){
        window.location.href = `../addElements/addElements.php/?table=marcas_tablets&accion=edit&marca=${marca}&id=${id}&old=${old}`
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

function editProcesadores_tablets(id,old){
    let procesador = prompt('Escribe el nombre del a procesador que deseas editar: ')
    if(procesador !== null){
        window.location.href = `../addElements/addElements.php/?table=procesadores_tablets&accion=edit&procesador=${procesador}&id=${id}&old=${old}`
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

function editResolucion_tablets(id,old){
    let resolucion = prompt('Escribe la resolucion que deseas editar: ')
    if(resolucion !== null){
        window.location.href = `../addElements/addElements.php/?table=resolucion_tablets&accion=edit&resolucion=${resolucion}&id=${id}&old=${old}`
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

function editOs_tablets(id,old){
    let os = prompt('Escribe la version de android que deseas editar: ')
    if(os !== null){
        window.location.href = `../addElements/addElements.php/?table=os_tablets&accion=edit&os=${os}&id=${id}&old=${old}`
    }
}

function deleteOs_tablets(id, name){
    let confirm1 = confirm(`¿Seguro quieres eliminar la version ${name}?`)
    if(confirm1){
        window.location.href = `../addElements/addElements.php/?table=os_tablets&accion=delete&id=${id}`
    }
}

//===============================================================================

//===================== AREAS IMPRESORAS ====================================
function addAreas_impresoras(){
    let area = prompt('Escribe el area deseas agregar: ')
    if(area){
        window.location.href = `../addElements/addElements.php/?table=areas_impresoras&accion=add&area=${area}`
    }
}

function editAreas_impresoras(id,old){
    let area = prompt('Escribe el area que deseas editar: ')
    if(area !== null){
        window.location.href = `../addElements/addElements.php/?table=areas_impresoras&accion=edit&area=${area}&id=${id}&old=${old}`
    }
}

function deleteAreas_impresoras(id, name){
    let confirm1 = confirm(`¿Seguro quieres eliminar el area ${name}?`)
    if(confirm1){
        window.location.href = `../addElements/addElements.php/?table=areas_impresoras&accion=delete&id=${id}`
    }
}

//===============================================================================

//===================== AREAS IMPRESORAS ====================================
function addTipo_impresoras(){
    let impresora = prompt('Escribe el tipo de impresora deseas agregar: ')
    if(impresora){
        window.location.href = `../addElements/addElements.php/?table=tipo_impresoras&accion=add&tipo=${impresora}`
    }
}

function editTipo_impresoras(id,old){
    let impresora = prompt('Escribe la impresora que deseas editar: ')
    if(impresora !== null){
        window.location.href = `../addElements/addElements.php/?table=tipo_impresoras&accion=edit&tipo=${impresora}&id=${id}&old=${old}`
    }
}

function deleteTipo_impresoras(id, name){
    let confirm1 = confirm(`¿Seguro quieres eliminar la impresora ${name}?`)
    if(confirm1){
        window.location.href = `../addElements/addElements.php/?table=tipo_impresoras&accion=delete&id=${id}`
    }
}

//===============================================================================

//===================== MARCAS IMPRESORAS ==================================================
function addMarcas_impresoras(){
    let marca = prompt('Escribe el nombre de la marca que deseas agregar: ')
    if(marca){
        window.location.href = `../addElements/addElements.php/?table=marcas_impresoras&accion=add&marca=${marca}`
    }
}

function editMarcas_impresoras(id, old){
    let marca = prompt('Escribe el nombre de la marca que deseas editar: ')
    if(marca !== null){
        window.location.href = `../addElements/addElements.php/?table=marcas_impresoras&accion=edit&marca=${marca}&id=${id}&old=${old}`
    }
}

function deleteMarcas_impresoras(id, name){
    let confirm1 = confirm(`¿Seguro quieres eliminar ${name}?`)
    if(confirm1){
        window.location.href = `../addElements/addElements.php/?table=marcas_impresoras&accion=delete&id=${id}`
    }
}

//===============================================================================

//===================== TIPO MEMORIAS ============================================
function addTipo_papel(){
    let tipo_papel = prompt('Escribe el tipo de papel que deseas agregar: ')
    if(tipo_papel){
        window.location.href = `../addElements/addElements.php/?table=tipo_papel&accion=add&tipo_papel=${tipo_papel}`
    }
}

function editTipo_papel(id,old){
    let tipo_papel = prompt('Escribe el tipo de papel que deseas editar: ')
    if(tipo_papel !== null){
        window.location.href = `../addElements/addElements.php/?table=tipo_papel&accion=edit&tipo_papel=${tipo_papel}&id=${id}&old=${old}`
    }
}

function deleteTipo_papel(id, name){
    let confirm1 = confirm(`¿Seguro quieres eliminar ${name}?`)
    if(confirm1){
        window.location.href = `../addElements/addElements.php/?table=tipo_papel&accion=delete&id=${id}`
    }
}

//===============================================================================



