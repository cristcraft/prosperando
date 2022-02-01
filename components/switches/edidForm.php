<?php
    require_once("../../connection/connection.php");
    
    //importa la conexion con todas las subtablas
    require_once("../../tables/tables.php");

        $id = $_POST['id'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $serial = $_POST['serial'];
        $mac = $_POST['mac'];
        $ip = $_POST['ip'];
        $manual = $_POST['manual'];

        $updateSql="UPDATE switches SET
            marca = '$marca',
            modelo = '$modelo',
            serial =  '$serial',
            mac = '$mac',
            ip = '$ip',
            manual = '$manual'

            WHERE id = '$id'";
        mysqli_query($connection,$updateSql);
        if ($connection->query($updateSql) === TRUE) {
            echo '<script>window.location.href = "../../pages/switches/switches.php"</script>';
        }else{
            //Mostrar el error que se genero al intentar conectar con la bd
            echo '
            <style>
                .error{
                    font-weight: bold;
                }
                p{
                    margin:30px;
                }
                a{
                    color: white;
                    background-color:red;
                    padding: 20px;
                    text-decoration: none;
                    border-radius: 15px;
                    margin:30px;
                }
            </style>
            <p class="error">'. mysqli_error($connection). '</p>
            <p class="codigo">'. $updateSql . '</p>
            <a href="../../pages/switches/switches.php">Volver</a>
            <script>
                localStorage.setItem("change", "error")
            </script>
        ';
        }

?>