<?php

function listaFuncionario($conexao){
  $funcionarios = array();
  $resultado = mysqli_query($conexao, "select * from funcionario");
  while($funcionario = mysqli_fetch_assoc($resultado)){
    array_push($funcionarios,$funcionario);
  }
  return $funcionarios;
}

function insereFuncionario($conexao,$CPF_Funcionario, $Nome, $Endereco, $Funcao, $Telefone){
  $query = "insert into funcionario (CPF_Funcionario, Nome, Endereco, Funcao, Telefone) values ('{$CPF_Funcionario}', '{$Nome}', '{$Endereco}', '{$Funcao}', '{$Telefone}')";
  return  mysqli_query($conexao,$query);
}

function removeFuncionario($conexao,$CPF_Funcionario){
  $query = "delete from funcionario where CPF_Funcionario = {$CPF_Funcionario}";
  return mysqli_query($conexao,$query);

}
