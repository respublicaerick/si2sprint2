<?php
include_once "encabezado.php";
$usuario = json_decode(file_get_contents("php://input"));
if (!$usuario) {
    http_response_code(500);
    exit;
}

include_once "funciones.php";
$defecto = "JoseRodriguez";
$usuario->password = password_hash($defecto, PASSWORD_DEFAULT);

$resultado = registrarUsuario($usuario);
echo json_encode($resultado);


