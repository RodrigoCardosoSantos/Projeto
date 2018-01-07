    
 <link rel="stylesheet" href="css/bootstrap.min.js">

<?php 
session_start();
    require ("../conexaoDb.php");
    
    $email = addslashes($_POST['inputEmail']);
    $senha = hash('sha256',addslashes($_POST['inputPassword']));

    
    $query = mysqli_query($mysqli,"SELECT * FROM usuario WHERE email = '$email' AND senha ='$senha'");
    
    $linha= mysqli_fetch_array($query);
    // echo $linha['0'];
    $row = mysqli_num_rows($query);
    $_SESSION['idusuario']= $linha['0']; 
    $_SESSION['nome']=$linha['3'];
    
    
  if ($row > 0){
        
        
        $_SESSION['usuario']=$_POST['inputEmail'];
        $_SESSION['senha'] = $_POST['inputPassword'];
        header('location: ../dashboard.php');


    }else{
       $_SESSION['loginErro'] = "Usuário ou senha Inválido";
        
      header('location: ../login.php');
         }
  