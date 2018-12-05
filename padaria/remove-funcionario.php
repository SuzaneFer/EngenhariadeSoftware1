<?php include("cabecalho1.php");
 include("conecta.php");
 include("banco-funcionario.php");


 $CPF_Funcionario =$_GET["CPF_Funcionario"];
 removeFuncionario($conexao,$CPF_Funcionario);
 header("Location: funcionario-lista.php?removido=true");
 die();
 ?>
