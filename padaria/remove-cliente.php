<?php include("cabecalho1.php");
 include("conecta.php");
 include("banco-cliente.php");


 $CPF_Cliente =$_POST["CPF_Cliente"];
 removeCliente($conexao,$CPF_Cliente);
 header("Location: cliente-lista.php?removido=true");
 die();
 ?>