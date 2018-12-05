<?php include("cabecalho1.php");
 include("conecta.php");
 include("banco-produto.php");
 ?>

 <?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
     <p class = "alert-success"> Produto removido com sucesso.</p>
<?php } ?>

<table class = "table table-striped table-bordered">
  <?php
  $produtos = listaProduto($conexao);
  foreach ($produtos as $produto) :
  ?>


   <tr>
      <td>CodProduto</td>
      <td>Nome</td>
      <td>Descricao</td>
      <td>Preco</td>
      <td>Quantidade no Estoque</td>
      <td>Fornecedor</td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td><?=$produto['CodProduto']?></td>
      <td><?=$produto['Nome']?></td>
      <td><?=substr($produto['Descricao'],0,15)?></td>
      <td><?=$produto['Preco']?></td>
      <td><?=$produto['QTD_estoque']?></td>
      <td><?=$produto['Fornecedor_CNPJ']?></td>
      <td> <a class="btn btn-primary" href="produto-altera-formulario.php?CodProduto=<?=$produto['CodProduto']?>">alterar</a> </td>
      <td>
      <form action = "remove-produto.php" method="post">
        <input type="hidden" name="CodProduto" value=<?=$produto['CodProduto']?>>
         <button class = "btn btn-danger"="text-danger">remover</a>
      </form>
      </td>
    </tr>
  <?php
  endforeach
  ?>
</table>
<?php include("rodape.php"); ?>
