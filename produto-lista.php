<?php include("header.php"); ?>
<?php include("conecta.php") ?>
<?php include("banco-produto.php") ?>
<?php
$produtos = listaProdutos($conexao);
foreach($produtos as $produto) {
  echo $produto['nome'] . "<br>";
}
?>

<?php include("footer.php") ?>
