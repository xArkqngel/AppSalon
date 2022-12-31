<?php

function obtenerServicios() : array{
    try{
        require 'database.php';
        $sql = "SELECT * FROM servicios";
        $consulta = mysqli_query($db, $sql);
        $servicios =[];
        while($row = mysqli_fetch_assoc($consulta)){
            $servicios[] = $row; //al final del arreglo se agrega el elemento
        }
        return $servicios;
    }catch(\Throwable  $th){
        var_dump ($th);
    }
}

obtenerServicios();
