<?php
    $nombre = $_REQUEST["nombres"];
    $apellidos = $_REQUEST["apellidos"];
    $correo = $_REQUEST['correo'];
    $telefono = $_REQUEST['telefono'];
    $lenguages = $_REQUEST['lenguajes'];
    $ingles = $_REQUEST['ingles'];

    if(count($lenguages) <= 2){
        echo 'eres basico';
    }
    elseif(count($lenguages) >2 && count($lenguages) < 4 ){
        echo'eres intermedio';
    }
    elseif(count($lenguages) > 4 ){
        echo'felicidades eres avanzado';
    };

    

    /* echo isset ($_POST['nombres']) ? $_POST['nombres'] : "error"; */
?>