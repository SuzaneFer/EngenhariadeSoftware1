<?php include("cabecalho1.php");
 include("conecta.php");
 include("banco-fornecedor.php");
 ?>

 <?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
     <p class = "alert-success"> Funcionario removido com sucesso.</p>
<?php } ?>

<table class = "table table-striped table-bordered">
  <?php
  $fornecedores = listaFornecedor($conexao);
  foreach ($fornecedores as $fornecedor) :
  ?>

  <tr>
      <td>CNPJ</td>
      <td>Nome da Empresa</td>
      <td>Telefone</td>
      <td>Endereco</td>
      <td>Contato</td>
      <td></td>
    </tr>

    <tr>
      <td><?=$fornecedor['CNPJ']?></td>
      <td><?=$fornecedor['Nome_Empresa']?></td>
      <td><?=$fornecedor['Telefone']?></td>
      <td><?=$fornecedor['Endereco']?></td>
      <td><?=$fornecedor['Contato']?></td>
      <td>
      <form action = "remove-funcionario.php" method="post">
        <input type="hidden" name="CNPJ" value=<?=$fornecedor['CNPJ']?>>
         <button class = "btn btn-danger"="text-danger">remover</a>
      </form>
      </td>
    </tr>
  <?php
  endforeach
  ?>
</table>
<?php include("rodape.php"); ?>