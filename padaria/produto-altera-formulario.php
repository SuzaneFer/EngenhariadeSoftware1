<?php
include("cabecalho1.php");
include("conecta.php");
include("banco-produto.php");

$CodProduto =$_GET['CodProduto'];
$produto = buscaProduto($conexao,$CodProduto);
?>

<h1>Alterando produto</h1>
<form action="altera-produto.php" method="post">
  <input type="hidden" name="CodProduto" value="<?=$produto['CodProduto']?>">
  <table class ="table">
      <tr>
        <td>Código do produto</td>
        <td><input class = "form-control" type="number" name="CodProduto" value = "<?=$produto['CodProduto']?>"></td>
      </tr>

      <tr>
        <td>Nome do produto</td>
        <td><input  class = "form-control" type="text" name="Nome" value="<?=$produto['Nome']?>"></td>
      </tr>

      <tr>
        <td>Descriação</td>
       <td><textarea  name="Descricao" class = "form-control"> <?=$produto['Descricao']?></textarea> </td>
     </tr>

      <tr>
         <td>Preço</td>
        <td><input  class = "form-control" type="number" name="Preco"  value="<?=$produto['Preco']?>"></td>
      </tr>

      <tr>
        <td>Quantidade em estoque</td>
        <td> <input  class = "form-control" type="number" name="QTD_estoque"  value="<?=$produto['QTD_estoque']?>" ></td>
      </tr>

      <tr><td> <button class = "btn btn-primary" type="submit">Alterar</button></td>
      </tr>

  </table>
</form>

<?php include("rodape.php"); ?>
