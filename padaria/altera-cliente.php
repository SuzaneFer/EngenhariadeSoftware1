<?php include("cabecalho1.php");
 include("conecta.php");
 include("banco-cliente.php");

$CPF_Cliente = $_POST["CPF_Cliente"];
$Nome = $_POST["Nome"];
$Telefone = $_POST["Telefone"];
$Endereco = $_POST["Endereco"];


if(alteraCliente($conexao,$CPF_Cliente, $Nome, $Telefone,$Endereco)) {
?>

<p class="text-success">O cliente <?= $CPF_Cliente; ?>, <?= $Nome; ?>  <?= $Telefone; ?> <?= $Endereco; ?>adicionado com sucesso!</p>
<?php
} else {
  $msg =mysqli_error($conexao);

?>
<p class="text-danger">O Cliente de nome:  <? = $Nome; ?> não foi adicionado:<?=$msg ?>  </p>
<?php

}
?>
<?php include("rodape.php"); ?>