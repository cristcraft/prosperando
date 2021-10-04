let equipos = []
const requestURL = '../db/hojaDeEquipos.json'

const request = new XMLHttpRequest()

request.open('GET', requestURL)

request.responseType = 'json'
request.send()

request.onload = function(){
    const equipos = request.response;
    mostrarTabla(equipos)
}

function editar(equipos, id){
    console.log(id)
    equipos.splice(id, 1)
    mostrarTabla(equipos)
}

function mostrarTabla(equipos){
    console.log(equipos)
    for(let i = 0; i< equipos.length; i++){
        let tabla = document.querySelector('#tabla')
        let html = `
            <tbody>
            <tr>
                <th scope="row">${equipos[i].ubicacion}</th>
                <td>${equipos[i].sucursal}</td>
                <td>${equipos[i].area}</td>
                <td>${equipos[i].funcionarioResponsable}</td>
                <td class="btn btn-info" onclick="editar(${i})">Editar</td>
            </tr>
            </tbody>
        `

        tabla.innerHTML += html
    }
}


