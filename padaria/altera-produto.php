<?php include("cabecalho1.php");
 include("conecta.php");
 include("banco-produto.php");

$CodProduto =$_POST["CodProduto"];
$Nome = $_POST["Nome"];
$Descricao = $_POST["Descricao"];
$Preco = $_POST["Preco"];
$QTD_estoque = $_POST["QTD_estoque"];

if(alteraProduto($conexao,$CodProduto, $Nome, $Descricao, $Preco, $QTD_estoque)) {
?>
<p class="text-success">O produto <?= $CodProduto; ?>, <?= $Nome; ?>  <?= $Descricao; ?>, <?= $Preco; ?>, <?= $QTD_estoque; ?> alterado com sucesso!</p>
<?php
} else {
  $msg =mysqli_error($conexao);

?>
<p class="text-danger">O produto:<? = $Nome; ?> não foi alterado:<?=msg ?>  </p>
<?php

}
?>
<?php include("rodape.php"); ?>
