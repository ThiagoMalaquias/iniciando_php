<?php
  define("NOME", "José Carlos");
  define("IDADE", 24);
  define("ALTURA", 1.89);
  define("CASADO", true);

  echo 'Meu nome é '.NOME.' e eu tenho '.IDADE.' anos.';

  echo '<br>';

  function exibirNome(){
    // variaveis contantes são globais
    echo NOME;
  }exibirNome();
?>