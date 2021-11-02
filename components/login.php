<?php 
    session_start();
    include "../connection/connection.php";
    $user = $_POST['user'];
    $password = $_POST['password'];
    $validar_login = mysqli_query($connection, "SELECT * FROM users WHERE user='$user' AND password='$password'");
    $row = $validar_login ->fetch_assoc();
    if($user === $row['user']){
        if(mysqli_num_rows($validar_login) > 0){
            $_SESSION['user_logeado'] = $user;
            echo '
                <script>
                alert("Se inicio sesión con exito")
                window.location.href = "../pages/dashboard.php"
                </script>';
        }
    }else{
        echo '
        <script>
        alert("<-- ERROR --> \n Usuario o contraseña incorrecta, vuelve a intentarlo \n <-- ERROR -->")
        window.location.href = "../index.php"
        </script>';
    }

    

?>