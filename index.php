<?php 
    session_start();

    if(!isset($_SESSION['user_logeado'])){
        $mensaje = 'no logeado';
    }else{
        header("location: ./pages/dashboard.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body id="body">
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <div class="container-fluid">
                <button class="btn  btn-outline-dark" id="btn-oscuro" onclick="onModoOscuro()"  title="Modo oscuro"><i class="fas fa-sun"></i></button>
                <a class="d-none" id="btn-salir"></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="
    height: 80vh;">
        <form action="./components/login.php" method="post" class="form" id="form_login" class="form">
            <h1>Iniciar Sesión</h1>
            <div class="mb-3">
                <label for="user" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="user" name="user" placeholder="Usuario" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
            </div>

            <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary p-2 m-3" >Entrar</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <script src="./scripts/modoOscuro.js"></script>
</body>
</html>
