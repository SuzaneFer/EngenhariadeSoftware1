<?php include("cabecalho1.php");
 include("conecta.php");
 include("banco-compra.php");


$Valor = $_POST["Valor"];
$Data = $_POST["Data"];
$Funcionario_CPF_Funcionario = $_POST["Funcionario_CPF_Funcionario"];
$Cliente_CPF_Cliente = $_POST["Cliente_CPF_Cliente"];
$Produto_CodProduto = $_POST["Produto_CodProduto"];



if(insereCompra($conexao, $Valor, $Data, $Funcionario_CPF_Funcionario,
 $Cliente_CPF_Cliente, $Produto_CodProduto)) {
?>

<p class="text-success">A compra de valor <?= $Valor; ?> , <?= $Data; ?> <?= $Funcionario_CPF_Funcionario; ?> <?= $Cliente_CPF_Cliente; ?> <?= $Produto_CodProduto; ?>adicionado com sucesso!</p>
<?php
} else {
  $msg =mysqli_error($conexao);

?>
<p class="text-danger">A compra de data:  <? = $Data; ?> não foi adicionado:<?= $msg ?>  </p>
<?php

}
?>
<?php include("rodape.php"); ?>