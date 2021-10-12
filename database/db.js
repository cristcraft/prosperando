const mysql = require('mysql');

const conexion = mysql.createConnection({
    host: 'localhost',
    user: 'admin',
    password: '1234',
    database: 'hoja_vida_equipos'
})

conexion.connect((error)=>{
    if(error){
        console.log('El error de conexion es: ' + error);
        return
    }

    console.log('Se ha conectado a la base de datos')
})

module.exports = conexion;