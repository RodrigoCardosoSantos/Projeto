<?php

require_once ('../conexaoDb.php');


$nome        = addslashes($_POST['inputNome']);
$email       = addslashes($_POST['inputEmail']);
$senha       = hash('sha256',addslashes($_POST['inputPassword']));
$perguntaS   = addslashes($_POST['selectPergunta']);
$respostaS   = addslashes($_POST['inputPasswordPergunta']);


$que = 'SELECT * FROM usuario WHERE email = \'' . $email . '\'';
 $query1 = mysqli_query($mysqli, $que);

 if ($query1->num_rows >0){
    $_SESSION['erro'] = "Email ja cadastrado no sistema, favor escolha um outro e-mail!!";

    header("location: ../novo_usuario.php");
 } else { 
    $query = mysqli_query($mysqli,"INSERT INTO usuario(nome,email,senha,pergunta_s,resposta_s) VALUES ('$nome','$email','$senha','$perguntaS','$respostaS')");
        
    if(mysqli_affected_rows($mysqli)!= 0){

          $_SESSION['sucess'] = "Conta Cadastrada com Sucesso!!";

          header("location: ../novo_usuario.php");

    }
 }