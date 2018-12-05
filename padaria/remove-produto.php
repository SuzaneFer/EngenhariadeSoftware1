<?php include("cabecalho1.php");
 include("conecta.php");
 include("banco-produto.php");


 $CodProduto =$_POST["CodProduto"];
 removeProduto($conexao,$CodProduto);
 header("Location: produto-lista.php?removido=true");
 die();
 ?>
