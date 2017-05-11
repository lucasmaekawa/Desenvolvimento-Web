<?php
function listaProdutos($conexao) {
  $produtos = array();
  $resultado = mysqli_query($conexao, "select * from produto");
  while($produto = mysqli_fetch_assoc($resultado)) {
    array_push($produtos, $produto);
  }
  return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id) {
  $query = "insert into produto(nome, preco, descricao, categoria_id) values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id})";
  $status = mysqli_query($conexao, $query);
  return $status;
}

function removeProduto($conexao, $id) {
  $query = "delete from produto where id={$id}";
  return mysqli_query($conexao, $query);
}
?>
