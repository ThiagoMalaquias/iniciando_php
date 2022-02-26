<?php
  $nome = $_POST["nome"];
  $email = $_POST["email"];

  echo "Nome: $nome, Email: $email";
  echo "<br><br>";

  $idade = $_GET["idade"];
  $altura = $_GET["altura"];

  echo "Idade: $idade, Altura: $altura";
?>