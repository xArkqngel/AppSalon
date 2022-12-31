<?php

$db = mysqli_connect('localhost', 'root', '3574', 'appsalon');

if(!$db){
    echo "error";
}else{
    echo "conectado";
}