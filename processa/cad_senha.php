<?php

require ('../conexaoDb.php');


$titulo      = addslashes($_POST['inputTitulo']);
$email       = addslashes($_POST['inputEmail']);
$senha       = addslashes($_POST['inputSenha']);
$url         = addslashes($_POST['inputUrl']);
$usuarioId   = addslashes($_SESSION['idusuario']);

if($senha!=""){
    $senha = base64_encode($senha);
}




$query = mysqli_query($mysqli,"INSERT INTO cadastro_senha(titulo,usuario,senha,url,idusuario) VALUES ('$titulo','$email','$senha','$url','$usuarioId')");

if(mysqli_affected_rows($mysqli)!= 0){
    
      $_SESSION['sucess'] = "Senha Cadastrada com Sucesso!!";
        
      header("location: ../cadastro_senha.php");
    
}