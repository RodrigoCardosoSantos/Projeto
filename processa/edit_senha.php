<?php

require ('../conexaoDb.php');

//if (!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) {
//    header("location:login.php");
//}
$titulo      =$_POST['inputTitulo'];
$email       =$_POST['inputEmail'];
$senha       =$_POST['inputSenha'];
$url         =$_POST['inputUrl'];
$usuarioId   =$_POST['inputId'];

if($senha!=""){
    $senha = base64_encode($senha);
}




$query = mysqli_query($mysqli,"UPDATE cadastro_senha set titulo = '$titulo',usuario = '$email',senha = '$senha',url = '$url' WHERE idcadastro_senha = '$usuarioId'");


if (mysqli_affected_rows($mysqli) != 0 ){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/password/dashboard.php'>
                                                                           
				<script type=\"text/javascript\">
					alert(\"Senha editada com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/password/dashboard.php>
				<script type=\"text/javascript\">
					alert(\"Senha não foi editado com Sucesso.\");
				</script>
			";		   

		}

