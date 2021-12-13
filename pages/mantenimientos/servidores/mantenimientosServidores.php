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
    include('../../../connection/connection.php');
    include('../../../tables/tables.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../styles/styles.css">
    <link rel="stylesheet" href="../../../styles/mantenimientos.css">
    <title>Mantenimiento</title>
</head>

<body id="body">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../../components/router.php?page=dashboard">DashBoard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <label class="navbar-toggler-icon"></label>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../../../components/router.php?page=equipos">Equipos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../../components/router.php?page=tablets">Tablets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../../components/router.php?page=impresoras">Impresoras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../../components/router.php?page=switches">Switches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../../components/router.php?page=servidores">Servidores</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Mantenimientos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item"
                                    href="../../../components/router.php?page=equiposMante">Equipos</a></li>
                            <li><a class="dropdown-item"
                                    href="../../../components/router.php?page=impresorasMante">Impresoras</a></li>
                            <li><a class="dropdown-item"
                                    href="../../../components/router.php?page=servidoresMante">Servidores</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn me-3 btn-outline-dark" id="btn-oscuro" onclick="onModoOscuro()"
                        title="Modo oscuro"><i class="fas fa-sun"></i></button>

                    <a href="../../../components/router.php?page=logout" class="btn btn-outline-dark" id="btn-salir"
                        title="Salir"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="content-fluid contenido text-center m-3">
        <div class="form-buttons">
            <form action="../../../components/mantenimientos/servidores/saveForm.php" method="post" id="form-mante"
                class="form">
                <div>
                    <h1 class="m-3 p-3">Mantenimiento de los Servidores</h1>
                </div>

                <div class="mb-3">
                    <label for="serial" class="form-label">Serial</label>
                    <input type="text" name="serial" id="serial" class="form-control"
                        placeholder="Serial">
                </div>

                <div class="mb-3">
                    <label for="ip" class="form-label">IP</label>
                    <input type="text" name="ip" id="ip" class="form-control"
                        placeholder="IP">
                </div>

                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="datetime-local" name="fecha" id="fecha" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="tipo_mantenimiento" class="form-label">Tipo de mantenimiento</label>
                    <select name="tipo_mantenimiento" id="tipo_mantenimiento" class="form-select">
                        <option value="preventivo">Preventivo</option>
                        <option value="correctivo">Correctivo</option>
                        <option value="ambos">Ambos</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descripción del Mantenimiento </label>
                    <textarea type="text" class="form-control" name="descripcion_mantenimiento"
                        id="descripcion_mantenimiento" class="form-control"
                        placeholder="Descripcion del mantenimietno que se realizo "></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nombre del Técnico</label>
                    <input type="text" class="form-control" id="nombre_tecnico" class="form-control"
                        name="nombre_tecnico" placeholder="Nombre del tecnico">
                </div>

                <div class="mb-3">
                    <button class="btn btn-outline-dark" type="submit">Guardar</button>
                </div>
            </form>

            <div class="buttons m-2 d-flex">
                <a class="btn btn-outline-dark mantenimiento m-2" onclick="mostrar('correctivo')"
                    href="#mantenimientoCorrectivo">Mantenimiento Correctivo</a>
                <a class="btn btn-outline-dark mantenimiento m-2" onclick="mostrar('preventivo')"
                    href="#mantenimientoPreventivo">Mantenimiento Preventivo</a>
                <a class="btn btn-outline-dark mantenimiento m-2" onclick="mostrar('ambos')"
                    href="#mantenimientoAmbos">Ambos</a>
                <a class="btn btn-outline-dark d-none mantenimiento m-2" id="crear" onclick="mostrar('crear')">Crear</a>
            </div>
        </div>

        <div class="mantenimientos">
            <div class="mantenimientoAmbos d-flex flex-wrap justify-content-center d-none" id="mantenimientoAmbos">
                <?php  while($row = $resultAmbosServidores ->fetch_assoc()){  ?>
                    <form action="../../../components/mantenimientos/servidores/edidForm.php" method="post" class="form-preventivo m-2">
                        <input required type="number" id="id" name="id" value="<?php echo $row['id'] ?>" hidden>
                        <div>
                            <h2>Preventivo y Correctivo</h2>
                        </div>
                        <div class="mb-3">
                            <label for="serial" class="form-label">Serial</label>
                            <input type="text" name="serial" id="serial" class="form-control"
                                placeholder="Serial" value="<?php echo $row['serial'] ?>" >
                        </div>

                        <div class="mb-3">
                            <label for="ip" class="form-label">IP</label>
                            <input type="text" name="ip" id="ip" class="form-control"
                                placeholder="IP" value="<?php echo $row['ip'] ?>">
                        </div>

                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input type="datetime-local" name="fecha" id="fecha" class="form-control" value="<?php echo $row['fecha'] ?>">
                        </div>

                        <div class="mb-3">
                            <label for="tipo_mantenimiento" class="form-label">Tipo de mantenimiento</label>
                            <select name="tipo_mantenimiento" id="tipo_mantenimiento" class="form-select">
                                <option value="<?php echo $row['tipo_mantenimiento'] ?>">Ambos</option>
                                <option value="correctivo">Correctivo</option>
                                <option value="preventivo">Preventivo</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Descripción del Mantenimiento </label>
                            <textarea type="text" class="form-control" name="descripcion_mantenimiento"
                                id="descripcion_mantenimiento" class="form-control"><?php echo $row['descripcion_mantenimiento'] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nombre del Técnico</label>
                            <input type="text" class="form-control" id="nombre_tecnico" class="form-control"
                                name="nombre_tecnico" value="<?php echo $row['nombre_tecnico'] ?>">
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-outline-dark mantenimiento" type="submit">Guardar cambios</button>
                            <a onclick="confirmar('<?php echo $row['id']?>', 'mantenimientos')" class="btn btn-outline-danger">Eliminar</a>
                        </div>
                    </form>
                <?php } ?>

            </div>
            <hr>
            <div class="mantenimientoCorrectivo d-flex flex-wrap justify-content-center d-none" id="mantenimientoCorrectivo">
                <?php  while($row = $resultCorrectivoServidores ->fetch_assoc()){  ?>
                        <form action="../../../components/mantenimientos/servidores/edidForm.php" method="post" class="form-preventivo m-2">
                            <input required type="number" id="id" name="id" value="<?php echo $row['id'] ?>" hidden>
                            <div>
                                <h2>Correctivo</h2>
                            </div>
                            <div class="mb-3">
                                <label for="serial" class="form-label">Serial</label>
                                <input type="text" name="serial" id="serial" class="form-control"
                                    placeholder="Serial" value="<?php echo $row['serial'] ?>" >
                            </div>

                            <div class="mb-3">
                                <label for="ip" class="form-label">IP</label>
                                <input type="text" name="ip" id="ip" class="form-control"
                                    placeholder="IP" value="<?php echo $row['ip'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input type="datetime-local" name="fecha" id="fecha" class="form-control" value="<?php echo $row['fecha'] ?>">
                            </div>

                            <div class="mb-3">
                                <label for="tipo_mantenimiento" class="form-label">Tipo de mantenimiento</label>
                                <select name="tipo_mantenimiento" id="tipo_mantenimiento" class="form-select">
                                    <option value="<?php echo $row['tipo_mantenimiento'] ?>">Correctivo</option>
                                    <option value="preventivo">Preventivo</option>
                                    <option value="ambos">Ambos</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Descripción del Mantenimiento </label>
                                <textarea type="text" class="form-control" name="descripcion_mantenimiento"
                                id="descripcion_mantenimiento" class="form-control" value=""><?php echo $row['descripcion_mantenimiento'] ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nombre del Técnico</label>
                                <input type="text" class="form-control" id="nombre_tecnico" class="form-control"
                                    name="nombre_tecnico" value="<?php echo $row['nombre_tecnico'] ?>">
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-outline-dark mantenimiento" type="submit">Guardar cambios</button>
                                <a onclick="confirmar('<?php echo $row['id']?>', 'mantenimientos')" class="btn btn-outline-danger">Eliminar</a>
                            </div>
                        </form>
                <?php } ?>
            </div>
            <hr>
            <div class="mantenimientoPreventivo d-flex flex-wrap justify-content-center d-none" id="mantenimientoPreventivo">
                <?php  while($row = $resultPreventivoServidores ->fetch_assoc()){  ?>
                    <form action="../../../components/mantenimientos/servidores/edidForm.php" method="post" class="form-preventivo m-2">
                        <input required type="number" id="id" name="id" value="<?php echo $row['id'] ?>" hidden>
                        <div>
                            <h2>Preventivo</h2>
                        </div>
                        <div class="mb-3">
                            <label for="serial" class="form-label">Serial</label>
                            <input type="text" name="serial" id="serial" class="form-control"
                                placeholder="Serial" value="<?php echo $row['serial'] ?>" >
                        </div>

                        <div class="mb-3">
                            <label for="ip" class="form-label">IP</label>
                            <input type="text" name="ip" id="ip" class="form-control"
                                placeholder="IP" value="<?php echo $row['ip'] ?>">
                        </div>

                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input type="datetime-local" name="fecha" id="fecha" class="form-control" value="<?php echo $row['fecha'] ?>">
                        </div>

                        <div class="mb-3">
                            <label for="tipo_mantenimiento" class="form-label">Tipo de mantenimiento</label>
                            <select name="tipo_mantenimiento" id="tipo_mantenimiento" class="form-select">
                                <option value="<?php echo $row['tipo_mantenimiento'] ?>">Preventivo</option>
                                <option value="correctivo">Correctivo</option>
                                <option value="ambos">Ambos</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Descripción del Mantenimiento </label>
                            <textarea type="text" class="form-control" name="descripcion_mantenimiento"
                                id="descripcion_mantenimiento" class="form-control" value=""><?php echo $row['descripcion_mantenimiento'] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nombre del Técnico</label>
                            <input type="text" class="form-control" id="nombre_tecnico" class="form-control"
                                name="nombre_tecnico" value="<?php echo $row['nombre_tecnico'] ?>">
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-outline-dark mantenimiento" type="submit">Guardar cambios</button>
                            <a onclick="confirmar('<?php echo $row['id']?>', 'mantenimientos')" class="btn btn-outline-danger">Eliminar</a>
                        </div>
                    </form>
                <?php } ?>

            </div>
        </div>
    </div>

    <script src="../../../scripts/modoOscuro.js"></script>
    <script src="../../../scripts/mantenimientos.js"></script>
    <script src="../../../scripts/popOvers.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>