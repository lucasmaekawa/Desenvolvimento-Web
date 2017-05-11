<?php include("header.php"); ?>
<?php include("banco-produto.php") ?>
    <?php
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $categoria_id = $_POST["categoria_id"];
    $conexao = mysqli_connect('localhost', 'root', '', 'loja');
     ?>
    <div class="container">
       <div class="principal">
         <?php if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id)): ?>
           <p class="alert-success">
             Produto <?= $nome; ?> adicionado com sucesso!
           </p>
         <?php else: ?>
           <p class="alert-danger">
             Produto <?= $nome; ?> não foi adicionado com sucesso!
           </p>
         <?php endif; ?>
       </div>
     </div>
<?php include("footer.php") ?>
