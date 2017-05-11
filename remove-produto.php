<?php
include("header.php");
include("conecta.php");
include("banco-produto.php");

$id = $_POST['id'];
if (removeProduto($conexao, $id)) {
    echo '<p class="text-success">Produto ' . $id . ' removido com sucesso!</p>';
    header("Location: produto-lista.php?removido=true");
    die();
}
?>
<?php
include("footer.php");
?>
