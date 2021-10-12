const conexion = require('../database/db');

exports.save = (req, res)=>{
    const sucursal = req.body.sucursal;
    const area = req.body.area;
    const lugar_trabajo = req.body.lugar_trabajo;
    const funcionario_responsable = req.body.funcionario_responsable;
    const nombre_equipo = req.body.nombre_equipo;
    const novedades = req.body.novedades;
    const tipo_equipo = req.body.tipo_equipo;
    const marca = req.body.marca;
    const modelo = req.body.modelo;
    const serial = req.body.serial;
    const fecha_fabricacion = req.body.fecha_fabricacion;
    const procesador = req.body.procesador;
    const generacion_procesador =req.body.generacion_procesador;
    const nucleos = req.body.nucleos;
    const velocidad_mz = req.body.velocidad_mz;
    const ram_gb = req.body.ram_gb;
    const tipo_memoria = req.body.tipo_memoria;
    const adaptador_multimedia = req.body.adaptador_multimedia;
    const adaptador_video = req.body.adaptador_video;
    const marca_disco_duro = req.body.marca_disco_duro;
    const capacidad_disco = req.body.capacidad_disco;
    const tipo_disco = req.body.tipo_disco;
    const red_ethernet = req.body.red_ethernet;
    const ip = req.body.ip;
    const mac_ethernet = req.body.mac_ethernet;
    const red_wifi = req.body.red_wifi;
    const mac = req.body.mac;
    
    conexion.query('INSERT INTO equipos SET ?', {sucursal: sucursal,
        area:area,
        lugar_de_trabajo:lugar_trabajo,
        tipo_equipo:tipo_equipo,
        funcionario_responsable:funcionario_responsable,
        nombre_equipo:nombre_equipo,
        novedades:novedades,
        marca:marca,
        modelo:modelo,
        serial:serial,
        fecha_fabricacion:fecha_fabricacion,
        procesador:procesador,
        generacion_procesador:generacion_procesador,
        nucleos:nucleos,
        velocidad_mz:velocidad_mz,
        ram_gb:ram_gb,
        tipo_memoria:tipo_memoria,
        adaptador_multimedia:adaptador_multimedia,
        adaptador_video:adaptador_video,
        marca_disco_duro:marca_disco_duro,
        capacidad_disco:capacidad_disco,
        tipo_disco:tipo_disco,
        red_ethernet:red_ethernet,
        ip:ip,
        mac_ethernet:mac_ethernet,
        red_wifi:red_wifi,
        mac:mac
        }, (error,results)=>{
        if(error){
            console.log(error)
        }else{
            res.redirect('/equipos');
        }
    })
    console.log(`${sucursal} ${area} ${funcionario_responsable} ${nombre_equipo}`)
}

exports.update =(req, res)=>{
    const id = req.body.id; 
    const sucursal = req.body.sucursal;
    const area = req.body.area;
    const lugar_trabajo = req.body.lugar_trabajo;
    const funcionario_responsable = req.body.funcionario_responsable;
    const nombre_equipo = req.body.nombre_equipo;
    const novedades = req.body.novedades;
    const tipo_equipo = req.body.tipo_equipo;
    const marca = req.body.marca;
    const modelo = req.body.modelo;
    const serial = req.body.serial;
    const fecha_fabricacion = req.body.fecha_fabricacion;
    const procesador = req.body.procesador;
    const generacion_procesador = req.body.generacion_procesador;
    const nucleos = req.body.nucleos;
    const velocidad_mz = req.body.velocidad_mz;
    const ram_gb = req.body.ram_gb;
    const tipo_memoria = req.body.tipo_memoria;
    const adaptador_multimedia = req.body.adaptador_multimedia;
    const adaptador_video = req.body.adaptador_video;
    const marca_disco_duro = req.body.marca_disco_duro;
    const capacidad_disco = req.body.capacidad_disco;
    const tipo_disco = req.body.tipo_disco;
    const red_ethernet = req.body.red_ethernet;
    const ip = req.body.ip;
    const mac_ethernet = req.body.mac_ethernet;
    const red_wifi = req.body.red_wifi;
    const mac = req.body.mac;
    
    conexion.query('UPDATE equipos SET ? WHERE id = ?',  [{
        sucursal: sucursal,
        area:area,
        lugar_de_trabajo:lugar_trabajo,
        tipo_equipo:tipo_equipo,
        funcionario_responsable:funcionario_responsable,
        nombre_equipo:nombre_equipo,
        novedades:novedades,
        marca:marca,
        modelo:modelo,
        serial:serial,
        fecha_fabricacion:fecha_fabricacion,
        procesador:procesador,
        generacion_procesador:generacion_procesador,
        nucleos:nucleos,
        velocidad_mz:velocidad_mz,
        ram_gb:ram_gb,
        tipo_memoria:tipo_memoria,
        adaptador_multimedia:adaptador_multimedia,
        adaptador_video:adaptador_video,
        marca_disco_duro:marca_disco_duro,
        capacidad_disco:capacidad_disco,
        tipo_disco:tipo_disco,
        red_ethernet:red_ethernet,
        ip:ip,
        mac_ethernet:mac_ethernet,
        red_wifi:red_wifi,
        mac:mac
        }, id], (error,results)=>{
        if(error){
            console.log(error)
        }else{
            res.redirect('/equipos');
        }
    })
}