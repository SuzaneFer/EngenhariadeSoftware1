<?php include("cabecalho1.php"); ?>

<h1>Formulário de cadastro de funcionario</h1>
<form action="add-funcionario1.php">
  <table class ="table">
      <tr>
        <td>CPF</td>
        <td><input class = "form-control" type="text" name="CPF_Funcionario"></td>
      </tr>

      <tr>
        <td>Nome</td>
        <td><input  class = "form-control" type="text" name="Nome"></td>
      </tr>

      <tr>
        <td>Endereço</td>
       <td><input  class = "form-control" type="text" name="Endereco" ></td>
     </tr>

      <tr> <td>Função</td>
        <td><input  class = "form-control" type="text" name="Funcao"></td>
      </tr>

      <tr>
        <td>Telefone</td>
        <td> <input  class = "form-control" type="text" name="Telefone" ></td>
      </tr>

      <tr><td> <button class = "btn btn-primary" type="submit">Cadastrar</button></td>
      </tr>

      <td> <a class="btn btn-primary" href="funcionario-lista.php">Listar</a> </td>
      </tr>

  </table>
</form>

<?php include("rodape.php"); ?>
