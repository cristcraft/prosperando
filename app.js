const { json } = require('express');
const express = require('express');

//crear una app en express
const app = express();

//donde cargar los archivos estacicos
app.use(express.static('views'))


app.set('view engine', 'ejs'); 

app.use(express.urlencoded({extended:false}))
app.use(express(json))

app.use('/', require('./router'));

app.listen(5000, ()=>{
    console.log('SERVER corriendo en http:localhost:5000')
});