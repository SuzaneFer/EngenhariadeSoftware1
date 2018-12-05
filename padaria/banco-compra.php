<?php

function listaCompra($conexao){
  $compras = array();
  $resultado = mysqli_query($conexao, "select * from compra");
  while($compra = mysqli_fetch_assoc($resultado)){
    array_push($compras,$compra);
  }
  return $compras;
}


function insereCompra($conexao, $Valor, $Data, $Funcionario_CPF_Funcionario,
 $Cliente_CPF_Cliente,
 $Produto_CodProduto){
  $query = "insert into compra (Valor, Data, Funcionario_CPF_Funcionario, Cliente_CPF_Cliente, Produto_CodProduto) values ('{$Valor}', '{$Data}', '{$Funcionario_CPF_Funcionario}', '{$Cliente_CPF_Cliente}', '{$Produto_CodProduto}')";
  return  mysqli_query($conexao,$query);
}


function removeCompra($conexao,$CodCompra){
  $query = "delete from compra where CodCompra = {$CodCompra}";
  return mysqli_query($conexao,$query);
}
