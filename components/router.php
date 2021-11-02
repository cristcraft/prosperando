<?php 
/*  
    ====================Explicacion codigo ======================================
    Este componente sirve para redireccionar los links hacia las paginas pertinentes 
    ej: en el navbar se manda a la pagina de inicio, en el href se redirige a esta pagina y aqui dependiendo del 
    parametro se redirigira hacia la pagina pertinente:

    desde cualquier pagina se envia el nombre de la pagina a la que se desea ir
    <a href="./router?page="nombre de la pagina">

    en router se captura el nombre de la pagina y se redirecciona para la misma
    $page = $_GET['page'];
    if($page === 'nombre de la pagina'){
        echo "<script>window.location.href = './nombre de la pagina'</script>";
    };
*/
$page = $_GET['page'];
switch ($page) {
    case 'dashboard':
        echo "<script>window.location.href = '../index.php'</script>";
        break;
    
    case 'equipos':
        echo "<script>window.location.href = '../pages/$page/$page.php'</script>";
        break;
    
    case 'tablets':
        echo "<script>window.location.href = '../pages/$page/$page.php'</script>";
        break;

    case 'logout':
        echo "<script>window.location.href = './$page.php'</script>";
        break;
    
    default:
        # code...
        break;
}

?>