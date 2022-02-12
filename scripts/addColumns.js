

function editar(campo) {
    let nuevoNombre = prompt(
        '¿Que nombre le deseas colocar? \n   Recuerda que no debe te tener espacios por ejemplo: \n ❌ tipo memorias \n ✔️ tipo_memorias'
        );

    if (nuevoNombre != null) {
        window.location.href =
            `../../components/addElements/add_columns.php?accion=editar&viejoNombre=${campo}&nuevoNombre=${nuevoNombre}`;
    } else {
        alert('No se realizaron cambios')
    }
}

function eliminar(campo) {
    let opcion = prompt(
        `¿Seguro quieres eliminar el campo ${campo}? \n   Recuerda que no se puede revertir esta acción: \n ❌ 1. No \n ✔️ 2. Si`
        );

    if (opcion != null) {
        if (opcion == '1') {
            alert('No se realizo ningun cambio')
        } else if (opcion == '2') {
            window.location.href = `../../components/addElements/add_columns.php?accion=eliminar&viejoNombre=${campo}`;
        } else {
            alert('Elige una opcion valida')
            eliminar(campo)
        }
    } else {
        alert('No se realizaron cambios')
    }
}

function agregar() {
    let nombre = prompt('¿Escribe el nombre del campo que deseas agregar');

    if (nombre != null) {
        let tipo = elegirTipo()

        window.location.href =
            `../../components/addElements/add_columns.php?accion=agregar&nombre=${nombre}&tipo=${tipo}`
    } else {
        alert('No se realizaron cambios')
    }
}

function elegirTipo() {
    let tipo;
    let longitud;
    let opciones = prompt('Elige el tipo de dato que deseas agregar \n 0. Salir \n 1. INT \n 2.Varchar');

    if (opciones == 0) {
        alert('No se realizo ningun cambio')
    } else if (opciones == 1) {
        longitud = prompt('Elige de que longitud deseas que sea el campo \n 0. Volver \n 1. int(11) \n 2. int(60')

        if (longitud == 0) {
            elegirTipo()
        } else if (longitud == 1) {
            tipo = 'int(11)'
            return tipo
        } else if (longitud == 2) {
            tipo = 'int(60)'
            return tipo
        } else {
            alert('Elige una opcion valida')
        }
    } else if (opciones == 2) {
        longitud = prompt(
            'Elige de que longitud deseas que sea el campo \n 0. Volver \n 1. varchar(100) \n 2. varchar(60) \n 3. varchar(50) \n 4. varchar(20) \n 5. varchar(11) \n 6. varchar(10) \n 7. varchar(5) '
            )

        if (longitud == 0) {
            elegirTipo()
        } else if (longitud == 1) {
            tipo = 'varchar(100)'
            return tipo
        } else if (longitud == 2) {
            tipo = 'varchar(60)'
            return tipo
        } else if (longitud == 3) {
            tipo = 'varchar(50)'
            return tipo
        } else if (longitud == 4) {
            tipo = ' varchar(20)'
            return tipo
        } else if (longitud == 5) {
            tipo = 'varchar(11)'
            return tipo
        } else if (longitud == 6) {
            tipo = 'varchar(10)'
            return tipo
        } else if (longitud == 7) {
            tipo = 'varchar(5)'
            return tipo
        } else {
            alert('Elige una opcion valida')
        }
    }
}