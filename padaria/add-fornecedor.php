<?php include("cabecalho1.php");
 include("conecta.php");
 include("banco-fornecedor.php");

$CNPJ = $_GET["CNPJ"];
$Nome_Empresa = $_GET["Nome_Empresa"];
$Telefone = $_GET["Telefone"];
$Endereco = $_GET["Endereco"];
$Contato = $_GET["Contato"];


if(insereFornecedor($conexao,$CNPJ, $Nome_Empresa, $Telefone, $Endereco, $Contato)) {
?>
<p class="text-success">O fornecedor <?= $CNPJ; ?>, <?= $Nome_Empresa; ?>  <?= $Telefone; ?> <?= $Endereco; ?>, <?= $Contato; ?> adicionado com sucesso!</p>
<?php
} else {
  $msg =mysqli_error($conexao);

?>
<p class="text-danger">O novo funcionario:<? = $CPF_Funcionario; ?> não foi adicionado:<?=$msg ?>  </p>
<?php

}
?>
<?php include("rodape.php"); ?>

