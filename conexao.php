<?php 

$hostname = "localhost";
$database = "login";
$username = "root";
$password = "";

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_errno){
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli-> connect_error;
} else {
    // echo "Conectado com banco de dados com sucesso";
}
?>