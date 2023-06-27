<?php
    require 'include/header.php';

    //Importar funciones
    require 'Include/funciones.php';
    $usuarios = ObtenerUsuarios();
    /*echo "<pre>";
    var_dump($juegos);
    echo "</pre>";*/
    //echo __DIR__;
    //echo __FILE__;

    //Codigo para enviar Datos por un formulario:
    if(isset($_GET['nombre']) && isset($_GET['apellido']) && isset($_GET['cedula'])){

        require 'Include/database.php';
        $sql = "INSERT INTO usuarios (nombre, apellido, cedula) VALUES ('".$_GET['nombre']."','".$_GET['apellido']."',".$_GET['cedula'].");";
        $consulta = mysqli_query($db,$sql);
        
    }ObtenerUsuarios();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Datos Personales</title>
        <link rel="stylesheet" href="css/styles3ejercicio.css">
    </head>
    <body>
        <h1 class="titulo">Formulario para enviar datos FullStack</h1>

        <div class="contenedor">

                <form action="3.1ver_datos.php" method="get" class="formulario">
                    <!---NOTA si se desean enviar los datos a la base de datos solo se debe cambiar
                    el action en el fomulario y poner action="3ejercicio.php"-->

                    <legend>Formulario de datos</legend>

                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" placeholder="Escriba aqui el nombre">
                    <label for="apellido">Apellido: </label>
                    <input type="text" name="apellido" id="apellido" placeholder="Escriba aqui el apellido">
                    <label for="cedula">Cedula: </label>
                    <input type="number" name="cedula" id="cedula" placeholder="Escriba la cedula sin puntos">
                    
                    <input type="submit" value="Enviar">

                </form>
        </div>

    </body>
</html>
