<?php include("cabecalho1.php");
 include("conecta.php");
 include("banco-funcionario.php");
 ?>

 <?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
     <p class = "alert-success"> Funcionario removido com sucesso.</p>
<?php } ?>

<table class = "table table-striped table-bordered">
  <?php
  $funcionarios = listaFuncionario($conexao);
  foreach ($funcionarios as $funcionario) :
  ?>

  <tr>
      <td>Nome</td>
      <td>Funcao</td>
      <td>CPF_Funcionario</td>
      <td>Endereco</td>
      <td>Telefone</td>
      <td></td>
    </tr>

    <tr>
      <td><?=$funcionario['Nome']?></td>
      <td><?=$funcionario['Funcao']?></td>
      <td><?=$funcionario['CPF_Funcionario']?></td>
      <td><?=$funcionario['Endereco']?></td>
      <td><?=$funcionario['Telefone']?></td>
      <td>
      <form action = "remove-funcionario.php" method="post">
        <input type="hidden" name="CPF_Funcionario" value=<?=$funcionario['CPF_Funcionario']?>>
         <button class = "btn btn-danger"="text-danger">remover</a>
      </form>
      </td>
    </tr>
  <?php
  endforeach
  ?>
</table>
<?php include("rodape.php"); ?>