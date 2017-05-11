<?php include("header.php");
include("conecta.php");
include("banco-produto.php");

if(array_key_exists("removido", $_GET) && $_GET['removido'] == true) { ?>
  <p class="alert-success">Produto apagado com sucesso!</p>
<?php } ?>
<table class="table table-striped table-bordered">
  <tr>
    <th>Nome</th>
    <th>Preço</th>
    <th>Descrição</th>
    <th>Categoria</th>
    <th>Ação</th>
  </tr>
  <?php
  $produtos = listaProdutos($conexao);
  foreach($produtos as $produto) {
  ?>
    <tr>
      <td><?= $produto['nome']?></td>
      <td><?= $produto['preco']?></td>
      <td><?= $produto['descricao']?></td>
      <td><?= $produto['categoria_id'] ?></td>
      <td><form action="remove-produto.php?" method="post">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <button class="btn btn-danger">remover</button>
      </form></td>
    </tr>
  <?php
  }

  ?>
</table>
<?php include("footer.php") ?>
