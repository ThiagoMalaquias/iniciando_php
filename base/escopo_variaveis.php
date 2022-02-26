<?php
  // acessando variaveis globais
  $nome = "Carlos Magno";
  $a = 4;
  $b = 2;

  function exibeNome() {
    global $nome;
    echo $nome;
  }

  exibeNome();
  echo "<hr>";

  ///////////////////////////////

  function exibeCidade() {
    global $cidade;
    $cidade = "São Paulo";
  }exibeCidade();

  echo $cidade;
  echo "<hr>";

  /////////////////////////

  function soma(){
    echo $GLOBALS['a'] + $GLOBALS['b'];
  }soma();
?>