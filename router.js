const express = require('express');
const router = express.Router();

const conexion = require('./database/db')

router.get('/', (req, res)=>{
    res.render('index')
});

//ruta para mostrar los equipos
router.get('/equipos', (req, res)=>{

    conexion.query('SELECT  * FROM equipos', (error, results)=>{
        if(error){
            throw error;
        }else{
            res.render('equipos', {results:results})
        }
    })
});

//ruta para crear
router.get('/create', (req, res)=>{
    //CONEXION CON LA TABLA AREAS
    let areas
    console.log(areas)
    conexion.query('SELECT *FROM areas', (error, results)=>{
        if(error){
            throw error;
        }else{
            areas = results
        }
    })

    //CONEXION CON LA TABLA LUGAR_TRABAJO
    let lugar_trabajo
    conexion.query('SELECT  * FROM lugar_trabajo', (error, results)=>{
        if(error){
            throw error;
        }else{
            lugar_trabajo = results
        }
    })

    //CONEXION CON LA TABLA TIPO_EQUIPO
    let tipo_equipo
    conexion.query('SELECT * FROM tipo_equipo', (error, results)=>{
        if(error){
            throw error;
        }else{
            tipo_equipo = results
        }
    })

    //CONEXION CON LA TABLA MARCAS
    let marcas
    conexion.query('SELECT * FROM marcas', (error, results)=>{
        if(error){
            throw error;
        }else{
            marcas = results
        }
    })

    //CONEXION CON LA TABLA PROCESADORES
    let procesadores
    conexion.query('SELECT * FROM procesadores', (error, results)=>{
        if(error){
            throw error;
        }else{
            procesadores = results
        }
    })
    
    //CONEXION CON LA TABLA TIPO_MEMORIAS
    let tipo_memorias
    conexion.query('SELECT * FROM tipo_memorias', (error, results)=>{
        if(error){
            throw error;
        }else{
            tipo_memorias = results
        }
    })

    //CONEXION CON LA TABLA MARCAS_DISCO_DURO
    let marcas_disco_duro
    conexion.query('SELECT * FROM marcas_disco_duro', (error, results)=>{
        if(error){
            throw error
        }else{
            marcas_disco_duro = results
        }
    })

    //CONEXION CON LA TABLA TIPOS_DISCO
    let tipos_disco
    conexion.query('SELECT * FROM tipos_disco', (error, results)=>{
        if(error){
            throw error;
        }else{
            tipos_disco = results
        }
    })

    conexion.query('SELECT * FROM sucursales', (error, results)=>{
        if(error){
            throw error;
        }else{
            res.render('create', {
                sucursales:results,
                areas, 
                lugar_trabajo, 
                tipo_equipo,
                marcas, 
                procesadores,
                tipo_memorias,
                marcas_disco_duro,
                tipos_disco
            })
            console.log(lugar_trabajo)
        }
    })
});

//ruta para editar
router.get('/edit/:id', (req, res)=>{
    const id = req.params.id;
    const sucursal = req.params.sucursal
    let sucursales
    let areas

    //conexion con la tabla areas
    conexion.query('SELECT *FROM areas', (error, results)=>{
        if(error){
            throw error;
        }else{
            areas = results
        }
    })

    //conexion con la tabla lugar_trabajo
    let lugar_trabajo
    conexion.query('SELECT * FROM lugar_trabajo', (error, results)=>{
        if(error){
            throw error;
        }else{
            lugar_trabajo = results
        }
    })
    
    //conexion con la tabala sucursales, para poderlas mostrar
    conexion.query('SELECT * FROM sucursales', (error, results)=>{
        if(error){
            throw error;
        }else{
            sucursales = results
        }
    })

    //conexion con la tabla tipo_equipo
    let tipo_equipo
    conexion.query('SELECT * FROM tipo_equipo', (error, results)=>{
        if(error){
            throw error;
        }else{
            tipo_equipo = results
        }
    })

    //conexion con la tabla marcas
    let marcas
    conexion.query('SELECT * FROM marcas', (error, results)=>{
        if(error){
            throw error;
        }else{
            marcas = results
        }
    })

    //conexion con la tabla procesadores
    let procesadores
    conexion.query('SELECT * FROM procesadores', (error, results)=>{
        if(error){
            throw error;
        }else{
            procesadores = results
        }
    })

    //conexion con la tabla tipo_memorias
    let tipo_memorias
    conexion.query('SELECT * FROM tipo_memorias', (error, results)=>{
        if(error){
            throw error;
        }else{
            tipo_memorias = results
        }
    })
    
    //conexion con la tabla marca_disco_duro
    let marcas_disco_duro
    conexion.query('SELECT * FROM marcas_disco_duro', (error, results)=>{
        if(error){
            throw error
        }else{
            marcas_disco_duro = results
        }
    })
    
    //conexion con la tabla tipos_disco
    let tipos_disco
    conexion.query('SELECT * FROM tipos_disco', (error, results)=>{
        if(error){
            throw error;
        }else{
            tipos_disco = results
        }
    })
    
    conexion.query('SELECT * FROM equipos WHERE id=?',[id], (error, results)=>{
        if(error){
            throw error;
        }else{
            res.render('edit', {
                equipo:results[0], 
                sucursales, areas, 
                lugar_trabajo, 
                tipo_equipo,
                marcas,
                procesadores,
                tipo_memorias,
                marcas_disco_duro,
                tipos_disco
            })
            console.log(lugar_trabajo)
        }
    })
})

//ruta para borrar
router.get('/delete/:id', (req, res)=>{
    const id = req.params.id;
    conexion.query('DELETE FROM equipos WHERE id = ?', [id],(error, results)=>{
        if(error){  
            throw error;
        }else{
            res.redirect('/equipos');
        }
    });
})


const crud = require('./controllers/crud');
router.post('/save', crud.save);
router.post('/update', crud.update);

module.exports = router;