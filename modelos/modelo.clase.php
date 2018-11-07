<?php

include ("modelo.conexion.php");
$status = 999;

$id_curso = $_POST['id_curso'];
$hora_inicio = $_POST['hora_inicio'];
$duracion = $_POST['duracion'];

$sql = "SELECT id_horario FROM horarios WHERE id_curso = '$id_curso' AND hora_inicio = '$hora_inicio'";
$result = $conexion->query($sql);
if($result->num_rows > 0){
    $status = 0; //Registrado
}
else{
    $sql = "INSERT INTO horarios(id_curso, hora_inicio, duracion)
    VALUES ('$id_curso', '$hora_inicio', '$duracion')";
   if($result = $conexion->query($sql)){
        $status = 1;
    }
}

echo $status;
