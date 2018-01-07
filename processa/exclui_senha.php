<?php
require ('../conexaoDb.php');

if (!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) {
    header("location:login.php");
}

$id 				= $_GET["id"];


$query = mysqli_query($mysqli," DELETE FROM cadastro_senha WHERE idcadastro_senha=$id");

$resultado = mysqli_query($query);
$linhas = mysqli_affected_rows($mysqli);

if (mysqli_affected_rows($mysqli) != 0 ){	
			  $_SESSION['sucessExcluir'] = "Senha excluida com Sucesso!!";
        
      header("location: ../dashboard.php");	   
		}
		 else{ 	
					  $_SESSION['failExcluido'] = "Senha não excluida com Sucesso!!";
        
      header("location: ../dashboard.php");
					   

		}

