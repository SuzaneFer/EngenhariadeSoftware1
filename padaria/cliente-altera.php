<?php
include("cabecalho1.php");
include("conecta.php");
include("banco-cliente.php");

$CPF_Cliente =$_GET['CPF_Cliente'];
$cliente = buscaCliente($conexao,$CPF_Cliente);
?>

<h1>Alterando cliente</h1>
<form action="altera-cliente.php" method="post">
  <input type="hidden" name="CPF_Cliente" value="<?=$cliente['CPF_Cliente']?>">
  <table class ="table">
      <tr>
        <td>CPF do Cliente</td>
<td><input class = "form-control" type="text" name="CPF_Cliente" value = "<?=$cliente['CPF_Cliente']?>"></tr>

      <tr>
        <td>Nome</td>
<td><input class = "form-control" type="text" name="Nome" value = "<?=$cliente['Nome']?>"></tr></tr>

      <tr>
        <td>Telefone</td>
<td><input class = "form-control" type="text" name="Telefone" value = "<?=$cliente['Telefone']?>"></tr></tr>

      <tr>
        <td>Endereco</td>
<td><input class = "form-control" type="text" name="Endereco" value = "<?=$cliente['Endereco']?>"></tr></tr>


      <tr><td> <button class = "btn btn-primary" type="submit">Alterar</button></td>
      </tr>

  </table>
</form>

<?php include("rodape.php"); ?>
