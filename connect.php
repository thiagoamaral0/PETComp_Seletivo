<?php
$hostname = "localhost";
$database = "bd_seletivo";
$username = "root"; // geralmente é o root
$password = ""; // ou em branco
$mysqli = new mysqli($hostname, $username, $password, $database);

if($mysqli->connect_errno){
    echo "falha ao conectar ao banco";
}
?>
