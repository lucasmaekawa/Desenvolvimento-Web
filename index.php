<?php include("header.php"); ?>
  <h1>Bem vindo</h1>
  <form action="login.php" method="post">
    Email: <input type="text" name="email" value=""> <br/>
    Senha: <input type="password" name="senha" value="">
    <input type="submit" name="button" class="btn btn-primary" value="Login">
  </form>
  <?php
  if (isset($_GET["login"]) && $_GET["login"] == false) {
  ?>
    <p class="alert-danger">Usuário ou senha inválidos!</p>
  <?php
  }
  ?>

  <?php
  if (isset($_GET["login"]) && $_GET["login"] == true) {
  ?>
    <p class="alert-success">Logado com sucesso!</p>
  <?php
  }
  ?>
<?php include("footer.php"); ?>
