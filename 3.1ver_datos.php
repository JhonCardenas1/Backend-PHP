<?php

    require 'include/header.php';

    if(isset($_GET['nombre']) && isset($_GET['apellido']) && isset($_GET['cedula'])){

        echo"Nombre: ".$_GET['nombre']."</br></br>";
        echo"Apellido: ".$_GET['apellido']."</br></br>";
        echo"Cédula: ".$_GET['cedula']."</br>";
    }
            
?>

