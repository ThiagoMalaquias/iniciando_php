<?php
  // basicas
  $nome = "Carlos";
  $idade = 123;
  var_dump($nome); // me tras informações sobre os dados da variavel.

  if(is_string($nome)):
    echo "É uma string";
  else:
    echo "Não é uma string";
  endif;

  echo "<hr>";

  //compostos
  $carros = array("Gol", "uno", "camaro", 12,23,true);
  var_dump($carros);
  if(is_array($carros)):
    echo "É uma array";
  else:
    echo "Não é uma array";
  endif;

  echo "<hr>";

  class Cliente {
    public $nome;
    public function atribuirNome($nome) {
      $this->$nome = $nome;
    }
  }

  $cliente = new Cliente();
  $cliente->atribuirNome("Maria");
  var_dump($cliente);
  if(is_object($cliente)):
    echo "É uma objeto";
  else:
    echo "Não é uma objeto";
  endif;
?>