<?php include("cabecalho1.php");
 include("conecta.php");
 include("banco-cliente.php");
$CPF_Cliente = $_POST["CPF_Cliente"];
 ?>

 <?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
     <p class = "alert-success"> Cliente removido com sucesso.</p>
<?php } ?>


<table class = "table table-striped table-bordered">
  <?php
  $clientes = listaCliente($conexao);
  foreach ($clientes as $cliente) :
  	if($CPF_Cliente==$cliente['CPF_Cliente']){
?>
    <tr>
      <td>CPF_Cliente</td>
      <td>Nome</td>
      <td>Telefone</td>
      <td>Endereco</td>
      
    </tr>

    <tr>
      <td><?=$cliente['CPF_Cliente']?></td>
      <td><?=$cliente['Nome']?></td>
      <td><?=$cliente['Telefone']?></td>
      <td><?=$cliente['Endereco']?></td>
     </tr>



  <?php
}
  endforeach
  ?>
</table>
<?php include("rodape.php"); ?>