<?php include("cabecalho1.php");
 include("conecta.php");
 include("banco-compra.php");


 $CodCompra =$_POST["CodCompra"];
 removeCompra($conexao,$CodCompra);
 header("Location: compra-lista.php?removido=true");
 die();
 ?>