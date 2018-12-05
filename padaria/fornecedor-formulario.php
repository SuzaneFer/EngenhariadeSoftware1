<?php include("cabecalho1.php"); ?>

<h1>Formulário de cadastro de fornecedor</h1>
<form action="add-fornecedor.php">
  <table class ="table">
      <tr>
        <td>CNPJ</td>
        <td><input class = "form-control" type="text" name="CNPJ"></td>
      </tr>

      <tr>
        <td>Nome da Empresa</td>
        <td><input  class = "form-control" type="text" name="Nome_Empresa"></td>
      </tr>

      <tr>
        <td>Telefone</td>
       <td><input  class = "form-control" type="text" name="Telefone" ></td>
     </tr>

      <tr> <td>Endereço</td>
        <td><input  class = "form-control" type="text" name="Endereco"></td>
      </tr>

      <tr>
        <td>Contato</td>
        <td> <input  class = "form-control" type="text" name="Contato" ></td>
      </tr>

      <tr><td> <button class = "btn btn-primary" type="submit">Cadastrar</button></td>
      </tr>

      <td> <a class="btn btn-primary" href="fornecedor-lista.php">Listar</a> </td>
      </tr>

  </table>
</form>

<?php include("rodape.php"); ?>
