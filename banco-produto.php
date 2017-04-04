<?php
function listaProdutos($conexao) {
  $produtos = array();
  $resultado = mysqli_query($conexao, "select * from produto");
  while($produto = mysqli_fetch_assoc($resultado)) {
    array_push($produtos, $produto);
  }
  return $produtos;
}

function insereProduto($conexao, $nome, $preco) {
  $query = "insert into produto(nome, preco) values ('{$nome}', {$preco})";
  echo $query;
  $status = mysqli_query($conexao, $query);
  return $status;
}
?>
