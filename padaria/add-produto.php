<?php include("cabecalho1.php");
 include("conecta.php");
 include("banco-produto.php");


$CodProduto = $_POST["CodProduto"];
$Nome = $_POST["Nome"];
$Descricao = $_POST["Descricao"];
$Preco = $_POST["Preco"];
$QTD_estoque = $_POST["QTD_estoque"];
$Fornecedor_CNPJ = $_POST["Fornecedor_CNPJ"];

if(insereProduto($conexao,$CodProduto, $Nome, $Descricao, $Preco, $QTD_estoque, $Fornecedor_CNPJ)) {
?>
<p class="text-success">O produto <?= $CodProduto; ?>  <?= $Nome; ?>  <?= $Descricao; ?>, <?= $Preco; ?>, <?= $QTD_estoque; ?>, <?= $Fornecedor_CNPJ; ?> adicionado com sucesso!</p>
<?php
} else {
  $msg =mysqli_error($conexao);

?>
<p class="text-danger">O novo produto:<? = $Nome; ?> não foi adicionado:<?=$msg ?>  </p>
<?php

}
?>
<?php include("rodape.php"); ?>
