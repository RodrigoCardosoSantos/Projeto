<?php
require ('conexaoDb.php');

if (!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])) {
    header("location:login.php");
}
?>

<html>
    <head>
        <title>Gerenciamento de Senhas</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
  <div >
            <?php
            require_once 'header.php';
            ?>  
            </div>
        <style>
            body{
                padding-top: 0px;
              background-color:#fff;
            }
            .tdsenha{
                
            }
   
        </style>

      
    </head>
    <body role="document">
      <?php
      
      $idUser = $_SESSION['idusuario'];
      
      $where = 'idusuario = '.$idUser.' ';
      
      if (isset($_GET['busca']) && $_GET["busca"] != ""){
          $busca = addslashes($_GET['busca']);
          $where .= 'AND titulo LIKE \'%'.$busca.'%\'';
      }
      
      $resultado = mysqli_query($mysqli,"select * from cadastro_senha WHERE $where");
      $linhas= mysqli_num_rows($resultado);
      
      ?>
        <br>
       
        <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h2>Listar Senhas Salvas</h2>
      </div>
            <p class=" text-center text-success">
                         <strong>
                    <?php
                    
                    
                    if(isset($_SESSION['sucessExcluir'])){
                        echo $_SESSION['sucessExcluir'];
                       unset($_SESSION['sucessExcluir']);
                    }
                    
                    if(isset($_SESSION['failExcluir'])){
                        echo $_SESSION['failExcluir'];
                       unset($_SESSION['failExcluir']);
                    }
                    
                    ?></strong>
              <form class="navbar-form navbar-left">
        <div class="form-group">
            <input  name="busca"type="text" class="form-control" placeholder="Pesquisar" value="<?= (isset($_GET['busca']))?$_GET['busca']:'' ?>">
            
        </div>
                  <a href="cadastro_senha.php"><img id='excluir' src='imagem/mais' height='30' width='60'></a>
      </form>
      <div class="row">
        
        <div class="col-md-12">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Titulo</th>
                <th>Usuario</th>
                <th>Senha</th>
                <th>URL</th>
              </tr>
            </thead>
            <tbody>
            
               
                <?php
                    
                while ($linhas = mysqli_fetch_array($resultado)){
                echo"<tr>";
                 echo "<td>".$linhas['titulo']."</td>";
                 echo "<td>".$linhas['usuario']."</td>"; ?>
            <td width="40px"> <input class="pass"style="background-color:transparent; Border:0" type="password" name="senha" size="20" value="<?php echo base64_decode($linhas['senha'])?>"></td>
                <?php  
                 echo "<td>".$linhas['url']."</td>"; 
                ?>
                <td>    
                    <a href='#' class='olho'><img  src='imagem/visualizar' height='30' width='30'></a>&nbsp;&nbsp;&nbsp;
                    <a href='editar_senha.php?id=<?php echo $linhas['idcadastro_senha']; ?>'>
                    <img id='excluir' src='imagem/edit' height='30' width='30'></a>
                &nbsp;&nbsp;&nbsp;
                <a href='processa/exclui_senha.php?id=<?php echo $linhas['idcadastro_senha']; ?>' class='excluir'>
                        <img id='excluir' src='imagem/remove_delete_exit_close_1545.ico' height='30' width='30'>
                </a>
                </td>
                 
                 <?php
                                 echo "</tr>";
                }?>
          </tbody>
    
            
            
          </table>
        </div>
      </div>
     </div>
        
    

         
  <div  style="text-align: center">
    <?php 
        require_once './footer.php';
        ?>
      </div>
     
   
    <script src="./js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./js/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/docs.min.js"></script>
  </body>
        <script type="text/javascript">
            
//            function excluir(ev){
//                confirm ("Deseja realmente excluir?");
//                
//            }
            
             $(function(){  
                 
                $(".excluir").each(function(){
                    $(this).click(function(ev){
                        ev.preventDefault();
                        if (confirm("Deseja realmente excluir?"))
                            window.location.href = $(this).attr("href");                            
                    });
                }); 
                 
                $('.olho').each(function(){
                    $(this).on({
                        mousedown : function(){
                            $(this).parent().parent().find(".pass").attr("type","text");
                        },
                        mouseup : function(){
                            $(this).parent().parent().find(".pass").attr("type","password");
                        }
                    });
                });
             });
        
        
          
            </script>
  </html>