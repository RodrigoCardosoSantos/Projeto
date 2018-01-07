<?php
require_once ('conexaoDb.php');

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

      <div class="page-header container">
        <h2>Criar Senhas</h2>
      </div>
    
      
        <form action="processa/cad_senha.php" method="post" accept-charset="utf-8">
            <div class="col-md-1"></div>
                <div class="container form-group col-lg-6">
                        <label class="sr-only"> TITULO : </label><br>
                        <input type="text" class="form-control" id="inputTitulo" name="inputTitulo" placeholder="Digite um Titulo" required autofocus="">

                        <label class="sr-only">Endereço de e-mail ou usuário:</label><br>
                        <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="E-mail ou Usuário" required autocomplete="off">
                        <label class="sr-only">Senha</label><br>
                        <input type="password" class="form-control" id="inputSenha" name="inputSenha" placeholder="Digite Senha" required="">
                        <label class="sr-only">URL:</label><br>
                        <input type="text" class="form-control" id="inputUrl" name="inputUrl" placeholder="Digite URL" required>

                        <br>
                        <button type="submit" class="btn btn-primary">Salvar </button>
                        <a href="dashboard.php"><button type="button"class="btn btn-danger">Voltar </button></a>
                        <p class=" text-center text-success">
                                               <strong>
                    <?php
                    
                    
                    if(isset($_SESSION['sucess'])){
                        echo $_SESSION['sucess'];
                       unset($_SESSION['sucess']);
                    }
                    
                    ?></strong>
                 </div>

           
       </form>
      
      
      
     
      <div style="text-align: center">
    <?php 
        require_once './footer.php';
        ?>
      </div>
 

 
    <script src="./js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./js/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/docs.min.js"></script>
  </body>
</html>
