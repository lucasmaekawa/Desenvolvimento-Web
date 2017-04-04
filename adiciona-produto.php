<?php include("header.php"); ?>
<?php include("banco-produto.php") ?>
    <?php
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    $conexao = mysqli_connect('localhost', 'root', '', 'loja');
     ?>
    <div class="container">
       <div class="principal">
         <?php if(insereProduto($conexao, $nome, $preco)): ?>
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
