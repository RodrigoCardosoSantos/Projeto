

<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="imagem/favicon.ico">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script type="text/javascript">
        
            </script>
        
    </head>
    <body>
        <div class="container">
            
            <form action="processa/verificarLogin.php" method="post" accept-charset="utf-8" class="form-login">
                <h2 class="form-login-heading"> Entre com o Usuário</h2>
                <br />
                <label for="inputEmail" class="sr-only">E-mail </label>
                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="E-mail" required autofocus>
                <br>
                <label for="inputPassword" class="sr-only">Senha </label>
                <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Senha" required>
               <br>
                <button type="submit" class=" btn btn-lg btn-primary btn-block">Entrar</button>
              
                <br>
            <label style="display: block;text-align: center">
                <a href="esqueci.php">Esqueci-Senha</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="novo_usuario.php">Criar conta</a> </label>
            </form>  
                     <p class=" text-center text-danger">
                         <strong>
                    <?php
                    session_start();
                    
                    if(isset($_SESSION['loginErro'])){
                        echo $_SESSION['loginErro'];
                       unset($_SESSION['loginErro']);
                    }
                    // echo $_SESSION['loginErro'];
                    ?></strong>
                    </p>
         <p class=" text-center text-success">
                         <strong>
                    <?php
                    
                    
                    if(isset($_SESSION['novaSenha'])){
                        echo $_SESSION['novaSenha'];
                       unset($_SESSION['novaSenha']);
                    }
                   
                    ?></strong>
                    </p>
        </div> 
        
    </body>
</html>
