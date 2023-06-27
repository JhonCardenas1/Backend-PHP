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

    if (isset($_GET['nombre'])) {
        $usuarios = BuscarNombre($_GET['nombre']);
    }

    if (isset($_GET['apellido'])) {
        $usuarios = BuscarApellido($_GET['apellido']);
    }

    if (isset($_GET['cedula'])) {
        $usuarios = BuscarCedula($_GET['cedula']);
    }
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabla usuarios</title>
        <link rel="stylesheet" href="css/styles5ejercicio.css">
    </head>
    <body>
        
        <h1 class="titulo">Tabla de usuarios</h1>
        
        <div class="contenedor">

            <div class="formulario-busqueda">
                <form class="formulario" action="" method="get">
                    <label for="nombre"> Buscar por Nombre:</label>
                    <input type="text" name="nombre" id="nombre">
                    <input type="submit" value="buscar" class="boton">
                </form>   
            </div>

            <div class="formulario-busqueda">
                <form class="formulario" action="" method="get">
                    <label for="apellido">Buscar por Apellido:</label>
                    <input type="text" name="apellido" id="apellido">
                    <input type="submit" value="buscar" class="boton">
                </form>
                
            </div>
            
            <div class="formulario-busqueda">
                <form class="formulario" action="" method="get">
                    <label for="cedula">Buscar por Cédula:</label>
                    <input type="number" name="cedula" id="cedula">
                    <input type="submit" value="buscar" class="boton">
                </form> 
            </div>
        </div>
        
        <div class="contenedor-tabla">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cédula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                    </tr>
                </thead>

                <?php  while($usuario = mysqli_fetch_assoc($usuarios)){
                       /*foreach($usuarios as $usuario){*/ ?>

                    <tr>
                        <td><?php echo($usuario['id']); ?></td>
                        <td><?php echo($usuario['cedula']); ?></td>
                        <td><?php echo($usuario['nombre']); ?></td>
                        <td><?php echo($usuario['apellido']); ?></td>
                    </tr>
                                
                <?php } ?>

            </table>

        </div>
        
    </body>
</html>