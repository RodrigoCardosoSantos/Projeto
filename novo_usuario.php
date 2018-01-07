

<html>
    <head>
        <title>Criar Conta</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/jquery.min.js">
        <link rel="stylesheet" href="js/bootstrap.js">
    </head>
    <body>
        <div class="container" >
            
            <form action="processa/cad_usuario.php" method="post" accept-charset="utf-8" class="form-login">
                <h2 class="form-login-heading"> Criar uma Conta</h2>
                <input type="text" class="form-control"  id="inputNome" name="inputNome" placeholder="Digite seu Nome" required autofocus><br>
                <label for="inputEmail" class="sr-only">E-mail </label>
                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="E-mail" required>
                <br>
                <label for="inputPassword" class="sr-only">Senha </label>
                <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Senha" required>
                <br>
                <select id="selectPergunta" name="selectPergunta" class="form-control">
                    <option>
                        Pergunta de Segurança
                    </option>
                    <option>
                        Qual o nome do seu melhor amigo de infancia?
                    </option>
                    <option>
                        Qual seu Apelido?
                    </option>
                    <option>
                        Quel seu filme favorito?
                    </option>
                    <option>
                        Oque mais gosta de fazer?
                    </option>
                
                </select>
                <br>
                <input type="password" id="inputPasswordPergunta" name="inputPasswordPergunta" class="form-control" placeholder="Resposta da Pergunta" required>
                <label >
                   <br>
                <a href="login.php" >Já tenho uma conta</a>
              
                </label>
                <button type="submit" class=" btn btn-lg btn-primary btn-block">Criar Conta</button>
               
            </form>    
            <div class="container">
                    <p class=" text-center text-success">
                         <strong>
                    <?php
                    session_start();
                    
                    if(isset($_SESSION['sucess'])){
                        echo $_SESSION['sucess'];
                       unset($_SESSION['sucess']);
                    } 
                    
                    ?></strong>
                     <p class=" text-center text-danger">
                         <strong>
                    <?php
                    if (isset($_SESSION['erro'])){
                        echo $_SESSION['erro'];
                       unset($_SESSION['erro']);
                    }
                    ?></strong>
            </div>
    <script type="text/javascript">
    function limpar(){
        
        document.getElementById('inputNome').value= '';
    }    
    
    </script>
    </body>
</html>
