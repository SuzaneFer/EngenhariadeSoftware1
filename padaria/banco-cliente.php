<?php

function listaCliente($conexao){
  $clientes = array();
  $resultado = mysqli_query($conexao, "select * from cliente");
  while($cliente = mysqli_fetch_assoc($resultado)){
    array_push($clientes,$cliente);
  }
  return $clientes;
}

function insereCliente($conexao,$CPF_Cliente, $Nome, $Telefone,$Endereco){
  $query = "insert into cliente (CPF_Cliente, Nome, Telefone, Endereco) values ('{$CPF_Cliente}', '{$Nome}', '{$Telefone}', '{$Endereco}')";
  return  mysqli_query($conexao,$query);
}

function removeCliente($conexao,$CPF_Cliente){
  $query = "delete from cliente where CPF_Cliente = {$CPF_Cliente}";
  return mysqli_query($conexao,$query);
}

function buscaCliente($conexao,$CPF_Cliente)
{
  $query = "select * from cliente where CPF_Cliente = {$CPF_Cliente}";
  $resultado = mysqli_query($conexao,$query);
  return mysqli_fetch_assoc($resultado);
}

function alteraCliente($conexao,$CPF_Cliente, $Nome, $Telefone,$Endereco)
{
  $query = "update cliente set CPF_Cliente = '{$CPF_Cliente}', Nome ='{$Nome}', Telefone='{$Telefone}', Endereco='{$Endereco}' where CPF_Cliente ='{$CPF_Cliente}'";
    return mysqli_query($conexao,$query);
}