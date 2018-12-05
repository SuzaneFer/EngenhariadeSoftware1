<?php include("cabecalho1.php");?>
<?php include("banco-fornecedor.php");;?>
<?php include("conecta.php");?>


<h1>Formulário de cadastro de produtos</h1>
<form action="add-produto.php" method="post">
  <table class ="table">

<tr>
        <td>Codigo do produto</td>
        <td><input  class = "form-control" type="text" name="CodProduto"></td>
      </tr>

      <tr>
        <td>Nome do produto</td>
        <td><input  class = "form-control" type="text" name="Nome"></td>
      </tr>

      <tr>
        <td>Descriação</td>
       <td><textarea  name="Descricao" class = "form-control"> </textarea> </td>
     </tr>

      <tr>
         <td>Preço</td>
        <td><input  class = "form-control" type="number" name="Preco"></td>
      </tr>

      <tr>
        <td>Quantidade em estoque</td>
        <td> <input  class = "form-control" type="number" name="QTD_estoque" ></td>
      </tr>


        <tr>
        <td>Fornecedor</td>
        <td>
          <select name="Fornecedor_CNPJ">
          <option> Selecione </option>
          <?php
          $fornecedores = listaFornecedor($conexao);
          foreach ($fornecedores as $fornecedor) :
          ?>
          <option value="<?php echo $fornecedor['CNPJ']?>"> 
          <?php echo $fornecedor['Nome_Empresa'];
          ?>
          </option>
           <?php
          endforeach
          ?>
          </select>

        </td>
      </tr>


      <tr><td> <button class = "btn btn-primary" type="submit">Cadastrar</button></td>
      </tr>

      <td> <a class="btn btn-primary" href="produto-lista.php">Listar</a> </td>
      </tr>

  </table>
</form>

<?php include("rodape.php"); ?>
