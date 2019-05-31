<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> painel</title>
</head>
<body>
   
    <?php
    include_once'validar.php';?>
    <h2>Painel do Sistema</h2> 
           
    <?php echo "seja Bem Vindo(a),".$_SESSION["login"];
    ?>    
    <br><br>
    
    <h3>Menu</h3>
     <?php
    if($_SESSION["perfil"] =='admin')
    echo "<a href="cadastrar.php">cadastrar usuario</a> <br>"
    
     ?> 
     ?> 
   <a href="cadastrar.php">cadastrar usuario</a> <br>
   <a href="consultar.php">consultar usuario</a> <br>
   <a href="alterar-senha.php">alterar senha</a> <br>
   <a href="sair.php">sair</a>
  
    
      
</body>
</html>