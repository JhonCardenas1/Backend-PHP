<?php require 'include/header.php';?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Primer ejercicio</title>
        <link rel="stylesheet" href="css/styles1ejercicio.css">
        
    </head>
    <body>
        
        <h1 class="titulo">Operaciones con switch Backend</h1>
       
        <div class="contenedor">
            <div class="centrado">
                <form action="" method="get" class="formulario">
                
                    <legend>Formulario de datos</legend>

                    <label for="numero1">Primer número</label>
                    <input type="number" name="numero1" id="numero1" placeholder="Ingrese el primer número">
                    <label for="numero2">Segundo número</label>
                    <input type="number" name="numero2" id="numero2" placeholder="Ingrese el segundo número">
                    
                    <label for="numero2">Seleccione la operación: </label>
                    <select name="operacion" id="operacion">
                        <option >Operacion</option>
                        <option value="sumar">(+) Sumar</option>
                        <option value="restar">(-) Restar</option>
                        <option value="multiplicar">(x) Multiplicar</option>
                        <option value="dividir">(/) Dividir</option>
                    </select>

                    <input type="submit" name="submit"value="Calcular">

                </form>
            </div>

            <div class="respuestas">
                <?php
        
                    if(isset($_GET['numero1']) && isset($_GET['numero2']) && isset($_GET['operacion'])){

                        $num1 = $_GET['numero1'];
                        $num2 = $_GET['numero2'];
                        
                        switch ($_GET['operacion']) {

                            case 'sumar':
                                $resultado = $num1 + $num2;
                                break;

                            case 'restar':
                                $resultado = $num1 - $num2;
                                break;

                            case 'multiplicar':
                                $resultado = $num1 * $num2;
                                break;

                            case 'dividir':
                                $resultado = $num1 / $num2;
                                break;
                            
                            default:
                                $resultado = "No se ingresaron datos D:";
                                break;
                        }
                        
                        echo"<p>El primer número ingresado es: ".$num1."</p>";
                        echo"<p>El segundo número ingresado es: ".$num2."</p>";
                        echo"<p>Selecciono la operacion: ".$_GET['operacion']."</p>";

                        echo"<p>El resultado de la operación es: ".$resultado."</p>";
                    }
                    
                    else{
                        echo"<p>No se han ingresado valores</p> ";
                    }
                ?>
            </div>
        </div>
        
    </body>
</html>



