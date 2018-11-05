<?php

$conexion = mysqli_connect("localhost", "root", "minacleo", "protoplasma");
if(!$conexion){
    echo 'Ha sucedido un error inexperado en la conexion de la base de datos';
}
else{
    mysqli_query ($conexion,"SET NAMES 'utf8'");
    mysqli_set_charset($conexion, "utf8");
}
