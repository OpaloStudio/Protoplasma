<?php

include ("modelo.conexion.php");
$status = 999;

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$limite_alumnos = $_POST['limite_alumnos'];
$inicio = $_POST['inicio'];
$fin = $_POST['fin'];

$sql = "SELECT nombre FROM cursos WHERE nombre = '$nombre'";
$result = $conexion->query($sql);
if($result->num_rows > 0){
    $status = 0; //Registrado
}
else{
    $sql = "INSERT INTO cursos(nombre, descripcion, limite_alumnos, inicio, fin)
    VALUES ('$nombre', '$descripcion', '$limite_alumnos', '$inicio', '$fin')";
   if($result = $conexion->query($sql)){
        $status = 1;
    }
}

echo $status;
