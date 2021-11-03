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
    <title>Areas Impresoras</title>
</head>

<body id="body">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Areas Impresoras</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link" href="../../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/equipos/equipos.php">Equipos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/tablets/tablets.php">Tablets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../pages/impresoras/impresoras.php">Impresoras</a>
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

        <a onclick="AddAreas_impresoras()" class="btn btn-outline-primary p-3">Crear un registro nuevo <i class='fas fa-plus' ></i></a>
    
        <div class="tabla">
            <table id="equipos" class="table text-center mt-4">
                <thead>
                    <tr class="bg-primary text-white">
                        <th>Acciones</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if($areas_impresorasResult ->num_rows>0){
                            while($row = $areas_impresorasResult ->fetch_assoc()){ 
                    ?>
                    <tr>
                        <td>
                            <a onclick="editAreas_impresoras(<?php echo $row['id']?>, '<?php echo $row['area'] ?>')"  class="btn btn-outline-info"><i class="fas fa-edit"></i></a>
                            <a  onclick="deleteAreas_impresoras('<?php echo $row['id']?>', '<?php echo $row['area'] ?>')" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                        </td>
                        <td><?php echo $row['id']  ?></td>
                        <td><?php echo $row['area'] ?></td>
                    </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#equipos').DataTable({
                pageLength:5,
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
    <script src="../../scripts/addElement.js"></script>
</body>

</html>