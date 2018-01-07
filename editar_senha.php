<?php
require ('conexaoDb.php');

if (!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) {
    header("location:login.php");
}
?>


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
<?php
$id = $_GET['id'];

$result= mysqli_query($mysqli,"SELECT * FROM cadastro_senha WHERE idcadastro_senha = $id LIMIT 1");
$resultado = mysqli_fetch_assoc($result);


?>
      <div class="page-header container">
          <h2>Editar Senhas</h2>
      </div>
    
      
        <form action="processa/edit_senha.php" method="post" accept-charset="utf-8">
          <div class="col-md-1"></div>
            <div class="container form-group col-lg-6">
                    <label class="sr-only"> TITULO : </label><br>
                    <input type="text" class="form-control" id="inputTitulo" name="inputTitulo" placeholder="Digite um Titulo" value="<?php echo $resultado['titulo']?>">
      
                    <label class="sr-only">Endereço de e-mail ou usuário:</label><br>
                    <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="E-mail ou Usuário" required value="<?php echo $resultado['usuario']?>">
                    <label class="sr-only">Senha</label><br>
                    <input type="password" class="form-control" id="inputSenha" name="inputSenha" placeholder="Digite Senha" required value="<?php echo  base64_decode($resultado['senha'])?>"><a href='#'><img  id='olho' src='imagem/visualizar' height='30' width='30'></a>
                    <label class="sr-only">URL:</label><br>
                    <input type="text" class="form-control" id="inputUrl" name="inputUrl" placeholder="Digite URL" required value="<?php echo $resultado['url']?>">
                    <input type="hidden" name="inputId" value="<?php echo $resultado['idcadastro_senha']?> ">
                    <br>
                    <button type="submit" class="btn btn-success">Editar </button>
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
      <script type="text/javascript">
      $( "#olho" ).mousedown(function() {
  $("#inputSenha").attr("type", "text");
});

$( "#olho" ).mouseup(function() {
  $("#inputSenha").attr("type", "password");
});    
      
      </script>

    <script src="./js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./js/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/docs.min.js"></script>
  </body>
</html>
