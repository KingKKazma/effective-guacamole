<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$servername = "localhost";
$database = "gerenciador";
$username = "root";
$password = "Admin01"; //Não precisa ter senha
$conexao = mysqli_connect($servername, $username, $password, $database);
