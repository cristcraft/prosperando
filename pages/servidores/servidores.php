<?php 
//Requiere el inicio de sesion
session_start();

if(!isset($_SESSION['user_logeado'])){
    echo '
            <script>
                alert("No has iniciado sesión")
                window.location.href = "../../index.php"
            </script>
        ';
        session_destroy();
        die();
}
    require_once('../../connection/connection.php');
    require_once('../../tables/tables.php');
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="../../styles/styles.css">
    <title>Tablets</title>
</head>

<body id="body">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../components/router.php?page=dashboard">DashBoard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../../components/router.php?page=equipos">Equipos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../../components/router.php?page=tablets">Tablets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../components/router.php?page=impresoras">Impresoras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../components/router.php?page=switches">Switches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../components/router.php?page=servidores">Servidores</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mantenimientos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="../../components/router.php?page=equiposMante">Equipos</a></li>
                            <li><a class="dropdown-item" href="../../components/router.php?page=impresorasMante">Impresoras</a></li>
                            <li><a class="dropdown-item" href="../../components/router.php?page=servidoresMante">Servidores</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn me-3 btn-outline-dark" id="btn-oscuro" onclick="onModoOscuro()"  title="Modo oscuro"><i class="fas fa-sun"></i></button>

                    <a href="../../components/router.php?page=logout" class="btn btn-outline-dark" id="btn-salir" title="Salir"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid d-flex flex-column align-items-center mt-3">
        <h1>Servidores</h1>

        <div class="tabla">
            <table id="equipos" class="table text-center mt-4">
                <thead>
                    <tr class="bg-primary text-white">
                        <th scope="col">Acciones</th>
                        <th scope="col">ID</th>
                        <th scope="col">Serial</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">fecha</th>
                        <th scope="col">nombre_equipo</th>
                        <th scope="col">Procesador</th>
                        <th scope="col">generacion</th>
                        <th scope="col">Nucleos</th>
                        <th scope="col">velocidad_mz</th>
                        <th scope="col">ram</th>
                        <th scope="col">tipo_memoria</th>
                        <th scope="col">adaptador_multimedia</th>
                        <th scope="col">adaptador_video</th>
                        <th scope="col">red_ethernet</th>
                        <th scope="col">mac</th>
                        <th scope="col">ip</th>
                        <th scope="col">red_ethernet1</th>
                        <th scope="col">mac1</th>
                        <th scope="col">ip1</th>
                        <th scope="col">so</th>
                        <th scope="col">licencia</th>
                        <th scope="col">total_discos</th>
                        <?php
                        for ($i=1; $i <= 16; $i++) { 
                            echo "
                            <th scope='col'>Marca $i</th>
                            <th scope='col'>capacidad $i</th>";
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if($servidoresResult ->num_rows>0){
                            while($row = $servidoresResult ->fetch_assoc()){ 
                    ?>
                    <tr id="tr<?php echo $row['id']?>">
                    <td class="d-flex flex-column justify-content-around">
                            <a href="./edid.php?id=<?php echo $row['id']?>" class="btn btn-info m-2"  title="editar"><i class="fas fa-edit"></i></a>
                            <a  onclick="confirmar('<?php echo $row['id']?>', 'servidores')" class="btn btn-danger m-2"  title="eliminar"><i class="fas fa-trash"></i></a>
                            <a  onclick="select('<?php echo $row['id']?>')" class="btn btn-warning m-2"  title="seleccionar"><i class="fas fa-arrow-right"></i></a>
                        </td>
                        <td><?php echo $row['id']  ?></td>
                        <td><?php echo $row['serial'] ?></td>
                        <td><?php echo $row['marca'] ?></td>
                        <td><?php echo $row['modelo']?></td>
                        <td><?php echo $row['fecha']?></td>
                        <td><?php echo $row['nombre_equipo'];  ?></td>
                        <td><?php echo $row["procesador"]  ?></td>
                        <td><?php echo $row['generacion']?></td>
                        <td><?php echo $row['nucleos']?></td>
                        <td><?php echo $row['velocidad_mz']?></td>
                        <td><?php echo $row['ram']?></td>
                        <td><?php echo $row['tipo_memoria']?></td>
                        <td><?php echo $row['adaptador_multimedia']?></td>
                        <td><?php echo $row['adaptador_video']?></td>
                        <td><?php echo $row['red_ethernet']?></td>
                        <td><?php echo $row['mac']?></td>
                        <td><?php echo $row['ip']?></td>
                        <td><?php echo $row['red_ethernet1']?></td>
                        <td><?php echo $row['mac1']?></td>
                        <td><?php echo $row['ip1']?></td>
                        <td><?php echo $row['so']?></td>    
                        <td><?php echo $row['licencia']?></td>
                        <td><?php echo $row['total_discos']?></td>
                        <td><?php echo $row['marca1'] ?></td>
                        <td><?php echo $row['capacidad1']?></td>
                        <td><?php echo $row['marca2'] ?></td>
                        <td><?php echo $row['capacidad2']?></td>
                        <td><?php echo $row['marca3'] ?></td>
                        <td><?php echo $row['capacidad3']?></td>
                        <td><?php echo $row['marca4'] ?></td>
                        <td><?php echo $row['capacidad4']?></td>
                        <td><?php echo $row['marca5'] ?></td>
                        <td><?php echo $row['capacidad5']?></td>
                        <td><?php echo $row['marca6'] ?></td>
                        <td><?php echo $row['capacidad6']?></td>
                        <td><?php echo $row['marca7'] ?></td>
                        <td><?php echo $row['capacidad7']?></td>
                        <td><?php echo $row['marca8'] ?></td>
                        <td><?php echo $row['capacidad8']?></td>
                        <td><?php echo $row['marca9'] ?></td>
                        <td><?php echo $row['capacidad9']?></td>
                        <td><?php echo $row['marca10'] ?></td>
                        <td><?php echo $row['capacidad10']?></td>
                        <td><?php echo $row['marca11'] ?></td>
                        <td><?php echo $row['capacidad11']?></td>
                        <td><?php echo $row['marca12'] ?></td>
                        <td><?php echo $row['capacidad12']?></td>
                        <td><?php echo $row['marca13'] ?></td>
                        <td><?php echo $row['capacidad13']?></td>
                        <td><?php echo $row['marca14'] ?></td>
                        <td><?php echo $row['capacidad14']?></td>
                        <td><?php echo $row['marca15'] ?></td>
                        <td><?php echo $row['capacidad15']?></td>
                        <td><?php echo $row['marca16'] ?></td>
                        <td><?php echo $row['capacidad16']?></td>
                    </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>

        <a href="./create.php" class="btn btn-outline-primary p-3 m-3">Crear un registro nuevo <i class='fas fa-plus' ></i></a>
        
        <a href="./exportarTablaServidores.php" class="btn btn-outline-info">Descargar</a>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#equipos').DataTable({
                pageLength:10,
                lengthMenu:[[5,10,20,-1],[5,10,20,'Todos']]
            });
        } );
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ"
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../scripts/modoOscuro.js"></script>
    <script src="../../scripts/popOvers.js"></script>
</body>

</html>