<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){

    switch ($_GET['acao']) {
        case 'cad-usuario':            
            header('Location: ../pages/usuario/cadUsuario.php');
            break;
        case 'logout':
                //deslogar
                session_start();
                session_destroy();
                header('Location: ../index.php');
                exit();
                break;
        
        default:
            echo 'NOT FOUND';
            break;
    }
}