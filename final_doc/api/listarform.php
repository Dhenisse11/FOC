<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: X-Requested-With");
header("Access-Control-Allow-Headers: Content-Type, x xsrf-token");

require 'configuracion.php';

$conexion = mysqli_connect(SERVER_DB, USER_DB,PASS_DB,NAME_DB);

if(mysqli_connect_errno($conexion)){
    echo "Error en la conexión: ".mysqli_error($conexion);
}

$sql = "SELECT * FROM formulario"

$result = mysqli_query ($conexion, $sql);

if(!$result){
    echo "Error: ".mysqli_error($conexion);
}

while = ($row = mysqli_fetch_array($result)){
    $dataSQL = array();
    $dataSQL ['nombre'] = $row ['nombre'];
    $dataSQL ['apellido'] = $row ['apellido'];
    $dataSQL ['fecha de nacimiento'] = $row ['fecha'];
    $dataSQL ['email'] = $row ['correo'];
    $dataSQL ['genero'] = $row ['genero'];
}