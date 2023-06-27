<?php

    $db = mysqli_connect('localhost','root','Jhon2022_','mi_proyecto');

    if(!$db){

        echo"Error al conectarse.";
        exit;

    }

    //echo"Conexión a la base de datos correcta";

?>