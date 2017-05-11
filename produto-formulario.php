<?php include("header.php"); ?>
  <form action="adiciona-produto.php" method="post">
    Nome: <input type="text" name="nome">
    Preco: <input type="number" name="preco">
    Descrição: <textarea name="descricao" rows="8" cols="80"></textarea>
    Categoria:<input type="radio" name="categoria_id" value="1"> Esporte
            <input type="radio" name="categoria_id" value="2"> Escolar
            <input type="radio" name="categoria_id" value="3"> Modalidade
    <input type="submit">
  </form>
<?php include("footer.php"); ?>
