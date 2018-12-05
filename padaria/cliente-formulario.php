<?php include("cabecalho1.php"); ?>


<h1>Formulário de cadastro de cliente</h1>
<form action="add-cliente.php" method="post">
  <table class ="table">
      <tr>
        <td>CPF do Cliente</td>
        <td><input class = "form-control" type="text" name="CPF_Cliente"></td>
      </tr>

      <tr>
        <td>Nome</td>
        <td><input class = "form-control" type="text" name="Nome"></td>
      </tr>

      <tr>
        <td>Telefone</td>
        <td><input class = "form-control" type="text" name="Telefone"></td>
      </tr>

      <tr>
        <td>Endereco</td>
        <td><input class = "form-control" type="text" name="Endereco"></td>
      </tr>

      <tr><td> <button class = "btn btn-primary" type="submit">Cadastrar</button></td>
      </tr>

      <td> <a class="btn btn-primary" href="cliente-lista.php">Listar</a> </td>
      </tr>




  </table>
</form>
<form action="buscar-cliente.php" method="post">
     <tr>
        <td>CPF do Cliente</td>
        <td><input class = "form-control" type="text" name="CPF_Cliente"></td>
      </tr>
     <tr><td> <button class = "btn btn-primary" type="submit">Buscar Cliente</button></td>
      </tr>
</form>


<?php include("rodape.php"); ?>