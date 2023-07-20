<?php

$host="localhost"; 
$user="root"; 
$password=""; 
$bd_name="utecdb"; 

// Conexão com o banco de dados
$connection = mysqli_connect($host, $user, $password, $bd_name);

// Verifica se houve erro na conexão
if (!$connection) {
    die("Erro na conexão com o banco de dados: ".mysqli_connect_error());
}

?>
