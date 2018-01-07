<?php
session_start();


$server = "localhost";
$usuario  = "root";
$senha    = "";
$db      = "gerenciamento";

        //conexao my sql
$mysqli = new mysqli ("$server","$usuario","$senha","$db");

if (mysqli_connect_errno()){
     echo "erro ao conectar :(".$mysqli->connect_errno.")".$mysqli->connect_error ;
     exit;
     
}
?>
