<?php include("cabecalho1.php");
 include("conecta.php");
 include("banco-fornecedor.php");


 $CNPJ =$_GET["CNPJ"];
 removeFornecedor($conexao,$CNPJ);
 header("Location: fornecedor-lista.php?removido=true");
 die();
 ?>
