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
                    <a class="nav-link active" aria-current="page" href="../../components/router.php?page=tablets">Tablets</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
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
        <h1>Tablets</h1>

        <div class="tabla">
            <table id="equipos" class="table text-center mt-4">
                <thead>
                    <tr class="bg-primary text-white">
                        <th scope="col">Acciones</th>
                        <th scope="col">ID</th>
                        <th scope="col">Sucursal</th>
                        <th scope="col">Area</th>
                        <th scope="col">Funcionario Responsable</th>
                        <th scope="col">Novedades</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Procesador</th>
                        <th scope="col">Nucleos</th>
                        <th scope="col">RAM en GB</th>
                        <th scope="col">Resolucion</th>
                        <th scope="col">Serial</th>
                        <th scope="col">Imei</th>
                        <th scope="col">Bateria</th>
                        <th scope="col">Rom</th>
                        <th scope="col">Camara frontal</th>
                        <th scope="col">Camara trasera</th>
                        <th scope="col">OS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if($tabletssResult ->num_rows>0){
                            while($row = $tabletssResult ->fetch_assoc()){ 
                    ?>
                    <tr id="tr<?php echo $row['id']?>">
                    <td class="d-flex flex-column justify-content-around">
                            <a href="./edid.php/?id=<?php echo $row['id']?>" class="btn btn-info" title="editar"><i class="fas fa-edit"></i></a>
                            <a  onclick="confirmar('<?php echo $row['id']?>', 'tablets')" class="btn btn-danger" title="eliminar"><i class="fas fa-trash"></i></a>
                            <a  onclick="select('<?php echo $row['id']?>')" class="btn btn-warning" title="seleccionar"><i class="fas fa-arrow-right"></i></a>
                        </td>
                        <td><?php echo $row['id']  ?></td>
                        <td><?php echo $row['sucursal'] ?></td>
                        <td><?php echo $row['area'] ?></td>
                        <td><?php echo $row['funcionario_responsable']?></td>
                        <td><?php echo $row['novedades']?></td>
                        <td><?php echo $row['marca'];  ?></td>
                        <td><?php echo $row["modelo"]  ?></td>
                        <td><?php echo $row['procesador']?></td>
                        <td><?php echo $row['nucleos']?></td>
                        <td><?php echo $row['ram']?></td>
                        <td><?php echo $row['resolucion']?></td>
                        <td><?php echo $row['serial']?></td>
                        <td><?php echo $row['imei']?></td>
                        <td><?php echo $row['bateria']?></td>
                        <td><?php echo $row['rom']?></td>
                        <td><?php echo $row['camara_frontal']?></td>
                        <td><?php echo $row['camara_trasera']?></td>
                        <td><?php echo $row['os']?></td>
                        
                    </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>

        <a href="./create.php" class="btn btn-outline-primary p-3 m-3">Crear un registro nuevo <i class='fas fa-plus' ></i></a>
        
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