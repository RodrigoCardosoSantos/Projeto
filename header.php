
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

    <style type="text/css">
        
        #usuarioLi{
            color:#fff;
                margin-top:15px;
                    margin-right: 15px;
                    margin-left: 20px
        }
    </style>
  </head>

  <body>

    <!-- Inicio Menu -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="#">Sistema de Gerenciamento de senha</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li><a href="dashboard.php">Dashboard</a></li>
              <li><a href="cadastro_senha.php">Cadastro de Senha</a></li>
              <li><a href="ajuda.php">Ajuda</a></li>
            
        
          </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php">Sair</a></li>
                <li id="usuarioLi">
                    
                <?php 
    echo "Bem vindo:<b> ".$_SESSION['nome'];
        ?>
                </li>
               
         </ul>
        </div>
      </div>
    </nav>
    
   <!-- fim menu -->
   
     <script src="./js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./js/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/docs.min.js"></script>
    
    
  </body>
</html>
