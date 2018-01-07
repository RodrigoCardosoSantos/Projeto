<?php

require_once '../conexaoDb.php';


$email       = addslashes($_POST['inputEmail']);
$senha       = hash('sha256',addslashes($_POST['inputPasswordNova']));
$perguntaS   = addslashes($_POST['selectPergunta']);
$respostaS   = addslashes($_POST['inputPasswordPergunta']);

$q = 'SELECT * FROM usuario WHERE email = \''.$email.'\'';

$query = mysqli_query($mysqli,$q);
$resultado = mysqli_fetch_array($query);

if($resultado['pergunta_s'] == $perguntaS && $resultado['resposta_s'] == $respostaS ){
    $query = mysqli_query($mysqli,"UPDATE usuario set senha = '$senha' WHERE idusuario = ".$resultado['idusuario']);

    if(mysqli_affected_rows($mysqli)!= 0){

          $_SESSION['novaSenha'] = "Senha atualizada com Sucesso!!";

          header("location: ../login.php");

    }
}else{
     $_SESSION['novaSenha'] = "Resposta da pergunta secreta invalida!!";

          header("location: ../esqueci.php");
    
}
