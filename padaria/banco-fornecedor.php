<?php

function listaFornecedor($conexao){
  $fornecedores = array();
  $resultado = mysqli_query($conexao, "select * from fornecedor");
  while($fornecedor = mysqli_fetch_assoc($resultado)){
    array_push($fornecedores,$fornecedor);
  }
  return $fornecedores;
}

function insereFornecedor($conexao,$CNPJ, $Nome_Empresa, $Telefone, $Endereco, $Contato){
  $query = "insert into fornecedor (CNPJ, Nome_Empresa, Telefone, Endereco, Contato) values ('{$CNPJ}', '{$Nome_Empresa}', '{$Telefone}', '{$Endereco}', '{$Contato}')";
  return  mysqli_query($conexao,$query);
}

function removeFornecedor($conexao,$CPF_Funcionario){
  $query = "delete from fornecedor where CNPJ = {$CNPJ}";
  return mysqli_query($conexao,$query);

}
