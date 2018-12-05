<?php include("cabecalho1.php");
 include("conecta.php");
 include("banco-funcionario.php");

$CPF_Funcionario = $_GET["CPF_Funcionario"];
$Nome = $_GET["Nome"];
$Endereco = $_GET["Endereco"];
$Funcao = $_GET["Funcao"];
$Telefone = $_GET["Telefone"];


if(insereFuncionario($conexao,$CPF_Funcionario, $Nome, $Endereco, $Funcao, $Telefone)) {
?>
<p class="text-success">O funcionario <?= $CPF_Funcionario; ?>, <?= $Nome; ?>  <?= $Endereco; ?> <?= $Funcao; ?>, <?= $Telefone; ?> adicionado com sucesso!</p>
<?php
} else {
  $msg =mysqli_error($conexao);

?>
<p class="text-danger">O novo funcionario:<? = $CPF_Funcionario; ?> não foi adicionado:<?=$msg ?>  </p>
<?php

}
?>
<?php include("rodape.php"); ?>

