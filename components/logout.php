<?php 
    session_start();
    session_destroy();
    echo '
            <script>
                alert("Cerraste sesión")
                window.location.href = "../index.php"
            </script>
        ';
?>