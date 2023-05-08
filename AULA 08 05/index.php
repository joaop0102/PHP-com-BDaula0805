<?php 
 define( 'MYSQL_HOST', 'localhost:3306' );
 define( 'MYSQL_USER', 'root' );
 define( 'MYSQL_PASSWORD', '' );
 define( 'MYSQL_DB_NAME', 'clientes' );
 
 try{
     $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
 }
 catch(PDOException $e)
 { 
 echo 'Erro ao conectar com o MySQL: '. $e->getMessage();
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Sistema de Acesso ao Banco de Dados</title>
</head>
<body>
    <?php 
    $sql = "SELECT * FROM clientes";
    $result = $PDO->query($sql);
    $rows = $result->fetchAll();

  for($i=0; $i < count($rows); $i++){?>
Nome : <?php echo $rows[$i]['Nome'];?><br>
Endereço : <?php echo $rows[$i]['Endereco'];?><br> 
Bairro : <?php echo $rows[$i]['Bairro'];?><br>
Cep : <?php echo $rows[$i]['CEP'];?><br>
Cidade : <?php echo $rows[$i]['Cidade'];?><br>
Estado : <?php echo $rows[$i]['Estado'];?><br>
<?php
  }
  ?>
    
</body>
</html>