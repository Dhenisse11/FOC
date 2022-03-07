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

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$name = $request->name;
$last = $request->lastname;
$date = $request->date;
$email = $request->email;
$sex = $request->sex;


$sql = "INSERT INTO formulario (Nombre, Apellido, Fecha de Nacimiento, Correo, Genero,) VALUES ('$name', '$last', '$date', '$email', '$sex')"

$result = mysqli_query($conexion, $sql);

if(!$result){
    echo "Error: ".mysqli_error($conexion);
}

echo '{"response": "ok"}';

