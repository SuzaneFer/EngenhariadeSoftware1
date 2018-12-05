<?php

function listaProduto($conexao){
  $produtos = array();
  $resultado = mysqli_query($conexao, "select * from produto");
  while($produto = mysqli_fetch_assoc($resultado)){
    array_push($produtos,$produto);
  }
  return $produtos;
}

function insereProduto($conexao,$CodProduto, $Nome, $Descricao, $Preco, $QTD_estoque, $Fornecedor_CNPJ){
  $query = "insert into produto (CodProduto, Nome, Descricao, Preco, QTD_estoque, Fornecedor_CNPJ) values ('{$CodProduto}','{$Nome}', '{$Descricao}', '{$Preco}', {$QTD_estoque}, '{$Fornecedor_CNPJ}')";
  return  mysqli_query($conexao,$query);
}

function removeProduto($conexao,$CodProduto){
  $query = "delete from produto where CodProduto = {$CodProduto}";
  return mysqli_query($conexao,$query);
}

function buscaProduto($conexao,$CodProduto)
{
  $query = "select * from produto where CodProduto = {$CodProduto}";
  $resultado = mysqli_query($conexao,$query);
  return mysqli_fetch_assoc($resultado);
}

function alteraProduto($conexao,$CodProduto, $Nome, $Descricao, $Preco, $QTD_estoque)
{
  $query = "update produto set Nome = '{$Nome}', Descricao ='{$Descricao}', Preco={$Preco}, QTD_estoque={$QTD_estoque} where CodProduto ={$CodProduto}";
    return mysqli_query($conexao,$query);
}
