<?php include("cabecalho1.php");
 include("conecta.php");
 include("banco-cliente.php");
 ?>

 <?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
     <p class = "alert-success"> Cliente removido com sucesso.</p>
<?php } ?>

<table class = "table table-striped table-bordered">
  <?php
  $clientes = listaCliente($conexao);
  foreach ($clientes as $cliente) :
  ?>
   <tr>
      <td>CPF_CLiente</td>
      <td>Nome</td>
      <td>Telefone</td>
      <td>Endereco</td>
      <td></td>
      <td></td>
    </tr>
    
    <tr>
      <td><?=$cliente['CPF_Cliente']?></td>
      <td><?=$cliente['Nome']?></td>
      <td><?=$cliente['Telefone']?></td>
      <td><?=$cliente['Endereco']?></td>
      <td> <a class="btn btn-primary" href="cliente-altera.php?CPF_Cliente=<?=$cliente['CPF_Cliente']?>">alterar</a> </td>
       <td>
      <form action = "remove-cliente.php" method="post">
        <input type="hidden" name="CPF_Cliente" value=<?=$cliente['CPF_Cliente']?>>
         <button class = "btn btn-danger"="text-danger">remover</a>
      </form>
      </td>
    </tr>
  <?php
  endforeach
  ?>
</table>
<?php include("rodape.php"); ?>