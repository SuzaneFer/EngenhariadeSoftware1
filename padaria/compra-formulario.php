<?php include("cabecalho1.php"); 
 include("banco-cliente.php"); 
 include("banco-produto.php"); 
 include("banco-funcionario.php"); 
 include("conecta.php");?>



<h1>Formulário de cadastro de compras</h1>
<form action="add-compra.php" method="post">
  <table class ="table">

      <tr>
        <td>Valor</td>
        <td><input  class = "form-control" type="number" name="Valor"></td>
      </tr>

      <tr>
        <td>Data</td>
       <td><input class = "form-control" type="text" name="Data"></td>
     </tr>

     <tr>
        <td>Funcionario</td>
       <td>
          <select name="Funcionario_CPF_Funcionario">
          <option> Selecione </option>
          <?php
          $funcionarios = listaFuncionario($conexao);
          foreach ($funcionarios as $funcionario) :
          ?>
          <option value="<?php echo $funcionario['CPF_Funcionario']?>"> 
          <?php echo $funcionario['Nome'];
          ?>
          </option>
           <?php
          endforeach
          ?>
          </select>

        </td>
     </tr>

     <tr>
        <td>Cliente</td>
       <td>
          <select name="Cliente_CPF_Cliente">
          <option> Selecione </option>
          <?php
          $clientes = listaCliente($conexao);
          foreach ($clientes as $cliente) :
          ?>
          <option value="<?php echo $cliente['CPF_Cliente']?>"> 
          <?php echo $cliente['Nome'];
          ?>
          </option>
           <?php
          endforeach
          ?>
          </select>

        </td>
     </tr>

     <tr>
        <td>Produto</td>
       <td>
          <select name="Produto_CodProduto">
          <option> Selecione </option>
          <?php
          $produtos = listaProduto($conexao);
          foreach ($produtos as $produto) :
          ?>
          <option value="<?php echo $produto['CodProduto']?>"> 
          <?php echo $produto['Nome'];
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

      <td> <a class="btn btn-primary" href="compra-lista.php">Listar</a> </td>
      </tr>



   

  </table>
</form>

<?php include("rodape.php"); ?>
