<?php include("cabecalho1.php");
 include("conecta.php");
 include("banco-compra.php");
 ?>


<table class = "table table-striped table-bordered">
  <?php
  $compras = listaCompra($conexao);
  foreach ($compras as $compra) :
  ?>

    <tr>
      <td>CodCompra</td>
      <td>Valor</td>
      <td>Data</td>
      <td>CPF_Cliente</td>
      <td>CPF_Funcionario</td>
      <td>CodProduto</td>
      <td></td>
      </tr>
    <tr>
      <td><?=$compra['CodCompra']?></td>
      <td><?=$compra['Valor']?></td>
      <td><?=$compra['Data']?></td>
      <td><?=$compra['Cliente_CPF_Cliente']?></td>
      <td><?=$compra['Funcionario_CPF_Funcionario']?></td>
      <td><?=$compra['Produto_CodProduto']?></td>
<td>
      <form action = "remove-compra.php" method="post">
        <input type="hidden" name="CodCompra" value=<?=$compra['CodCompra']?>>
         <button class = "btn btn-danger"="text-danger">remover</a>
      </form>
      </td>
    </tr>
  <?php
  endforeach
  ?>
</table>
<?php include("rodape.php"); ?>

