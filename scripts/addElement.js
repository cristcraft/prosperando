function addSucursal(){
    let sucursal = prompt('Escribe el nombre de la sucursal que deseas agregar: ')
    console.log(sucursal)
    window.location.href = `../addElements/addElements.php/?table=sucursales&accion=edit&sucursal=${sucursal}`
}

function editSucursal(id){
    let sucursal = prompt('Escribe el nombre de la sucursal que deseas agregar: ')
    console.log(sucursal)
    window.location.href = `../addElements/addElements.php/?table=sucursales&accion=edit&sucursal=${sucursal}&id=${id}`
}