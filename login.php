<?php
include("conecta.php");
include("banco-usuario.php");
$email = $_POST["email"];
$senha = $_POST["senha"];
$usuario = buscaUsuario($conexao, $email, $senha);

setcookie("usuario_logado", $usuario["email"]);

if($usuario == null) {
  header("Location: index.php?login=0");
} else {
  header("Location: index.php?login=1");
}
?>
