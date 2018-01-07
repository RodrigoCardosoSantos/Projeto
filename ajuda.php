<?php
require ('conexaoDb.php');
//require_once './processa/verificarLogin.php';

if (!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="Cadastro de Senha">
    <meta name="author" content="Rodrigo">
    <link rel="icon" href="imagem/favicon.ico">

    <title>Cadastro de senha</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <div >
            <?php
            require_once 'header.php';
            ?>  
            </div>
  <style type="text/css">
      label{
          margin-top: 6px;
      }    
  
  </style>
  </head>

<body>
    <div class="container">
<h2>Sistema de gerenciamento de Senha, Desenvolvido por Rodrigo Cardoso dos Santos</h2><br>
<h3>- Um sistema Seguro , ágil e fácil de usar<br>
- Todas as senhas cadastradas são criptografadas,<br>
-Se perder a senha de acesso ao sistema pode responder a pergunta secreta e cadastrar uma senha nova.<br>
-Dashboad eh a pagina principal onde consegue visualizar todas senhas cadastradas , realizar busca por filtro de sua preferencia, atualizar uma senha já salva, criar uma senha nova, excluir uma senha,<br>
-O sistema não eh possível fazer dois cadastro com o mesmo endereço de e-mail, <br>
-Cada usuário consegue ver somente as senhas cadastrada pelo mesmo.<br>
<br>
<h5><i>desenvolvido por Rodrigo</h5>
</div>
</body>
</html>