<?php require 'include/header.php';?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Segundo ejercicio</title>
        <link rel="stylesheet" href="css/styles2ejercicio.css">
    </head>
    <body>

        <h1 class="titulo">Edad FullStack</h1>

        <div class="contenedor">
            <div class="centrado">

                <form action="" method="get" class="formulario">
                
                    <legend>Formulario de datos</legend>

                    <label for="edad">Ingrese la edad</label>
                    <input type="number" name="edad" id="edad" placeholder="Ingrese su edad">
                    
                    <input type="submit" value="Enviar">

                </form>
            </div>

            <div class="respuestas">
                <?php

                if(isset($_GET['edad'])){

                    if($_GET['edad'] > 0 && $_GET['edad'] <18 ){
                        
                        echo"<p>La edad ingresada es: ".$_GET['edad']."</p>";
                        echo"<p>Eres menor de edad</p>";
                        
                    }

                    elseif($_GET['edad'] >= 18){

                        echo"<p>La edad ingresada es: ".$_GET['edad']."</p>";
                        echo"<p>Eres mayor de edad</p>";

                    }

                    else{
                        
                        echo"<p>La edad ingresada es: ".$_GET['edad']."</p>";
                        echo"<p>La edad ingresada no es correcta</p>";

                    }
                }
                else{
                    echo"<p>No se han ingresado datos</p>";
                }
                
                ?>
            </div>
           
        </div> 
    </body>
</html>
