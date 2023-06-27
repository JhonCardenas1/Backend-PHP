<?php require 'include/header.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fecha de nacimiento</title>
        <link rel="stylesheet" href="css/styles4ejercicio.css">
    </head>
    <body>
        
        <h1 class="titulo">Fecha de nacimiento FullStack</h1>

        <div class="contenedor">

            <div class="centrado">
        
                <form action="" method="get" class="formulario">

                    <legend>Formulario de datos</legend>

                    <label for="fecha">Seleccione la fecha de nacimiento</label>
                    <input type="date" name="fecha" id="fecha">
                
                    <input type="submit" value="Enviar">

                </form>

            </div>

            <div class="respuestas">

                <?php

                    $año_actual = date('Y');
                    $mes_actual = date('m');
                    $dia_actual = date('d');

                    
                    if(isset($_GET['fecha'])){
                        
                        $fecha_nacimiento= $_GET['fecha'];
                        
                        $componentes = explode('-', $fecha_nacimiento);
                        $año_nacimiento = $componentes[0];
                        $mes_nacimiento = $componentes[1];
                        $dia_nacimiento = $componentes[2];

                        //Mostrar los componentes separados
                        /*echo "Año: $año_nacimiento<br>";
                        echo "Mes: $mes_nacimiento<br>";
                        echo "Día: $dia_nacimiento<br>";*/
                        
                        $edad = $año_actual - $año_nacimiento;

                        
                        if($año_nacimiento >= $año_actual){
                            echo"<p>La fecha de nacimiento ingresada es: ".$fecha_nacimiento."</p>";
                            echo"<p>Recuerda que la fecha de nacimiento debe ser menor al año actual </p>";

                        }
                        elseif($mes_actual < $mes_nacimiento){

                            $edad = $edad - 1;
                    
                        }

                        elseif($mes_actual == $mes_nacimiento){

                            if($dia_actual < $dia_nacimiento){
                                
                                $edad = $edad - 1;

                            }

                            elseif($dia_actual == $dia_nacimiento){
                                echo"<p>Felicidades hoy cumples años </p>";
                            } 
                        }

                        
                        if($edad == 0){
                            
                            echo"<p>Todavía no cumples tu primer año</p>";

                        }
                        elseif($edad >0 && $edad < 18){

                            echo"<p>La fecha de nacimiento ingresada es: ".$fecha_nacimiento."</p>";
                            echo"<p>Su edad es ".$edad. " años por lo tanto: No es mayor de edad"."</p>";

                        }
                        elseif($edad >= 18){
                            echo"<p>La fecha de nacimiento ingresada es: ".$fecha_nacimiento."</p>";
                            echo"<p>Su edad es ".$edad. " años por lo tanto: Es mayor de edad"."</p>";

                        }

                    }

                ?>
            </div>

        </div>
        
    </body>
</html>


