

<html>
    <head>
        <title>Esqueci a Senha</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/login.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./js/jquery.min.js">
        <link rel="stylesheet" href="./js/bootstrap.js">
    </head>
    <body>
        <div class="container" >
            
            <form action="processa/esqueci_senha.php" method="post" accept-charset="utf-8" class="form-login">
                <h2 class="form-login-heading"> Esqueci-me da Senha</h2>
                <label for="inputEmail" class="sr-only">E-mail </label>
                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="E-mail" required autofocus>
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
                <br>
                 <label for="inputPassword" class="sr-only">Senha </label>
                <input type="password" id="inputPasswordNova" name="inputPasswordNova" class="form-control" placeholder="Digite a nova Senha" required>
                <label><br>
                <a href="./login.php" >Voltar</a>
              
                </label>
                <button type="submit" class=" btn btn-lg btn-primary btn-block">Cadastrar Nova Senha</button>
               
            </form>    
           <!-- <button onclick="limpar()">limpar</button> -->
<p class=" text-center text-danger">
                         <strong>
                    <?php
                    session_start();
                    
                    if(isset($_SESSION['novaSenha'])){
                        echo $_SESSION['novaSenha'];
                       unset($_SESSION['novaSenha']);
                    }
                    
                    ?></strong>
        
    <script type="text/javascript">
    function limpar(){
        
        document.getElementById('inputNome').value= '';
    }    
    
    </script>
    </body>
</html>
