<?php

function ObtenerUsuarios(){

    try {

        //Importar la conexión
        require 'database.php';
        //var_dump($db);

        //Escribir el codigo SQL
        $sql = "SELECT * FROM usuarios;" ;
        $consulta = mysqli_query($db,$sql);
        
        //Creando un arreglo vacio
        $usuarios = [];
        $i = 0;

        //Obtener los resultados

        /*echo "<pre>";
        var_dump(mysqli_fetch_all($consulta));
        echo "<pre>";*/

        /*while($row = mysqli_fetch_assoc($consulta)){
           
            $usuarios[$i]['id'] =$row['id'];
            $usuarios[$i]['nombre'] =$row['nombre'];
            $usuarios[$i]['precio'] =$row['precio'];
            $usuarios[$i]['cantidad'] =$row['cantidad'];
            $i++;

        }*/

        /*echo "<pre>";
        var_dump($usuarios);
        echo "<pre>";*/

        return $consulta;

       
    } 
    catch (Exception $e) {
        echo $e ->getMessage(); 
    }
    
}//ObtenerUsuarios();

//Busqueda por atributos de la tabla en las bases de datos

function BuscarNombre($texto){

    require 'database.php';
    $sql = "SELECT * from usuarios WHERE nombre LIKE '%".$texto."%';";
    $consulta = mysqli_query($db,$sql);
    return $consulta;

}

function BuscarApellido($texto){

    require 'database.php';
    $sql = "SELECT * from usuarios WHERE apellido LIKE '%".$texto."%';";
    $consulta = mysqli_query($db,$sql);
    return $consulta;

}

function BuscarCedula($texto){

    require 'database.php';
    $sql = "SELECT * from usuarios WHERE cedula LIKE '%".$texto."%';";
    $consulta = mysqli_query($db,$sql);
    return $consulta;

}