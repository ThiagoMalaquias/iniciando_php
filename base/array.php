<?php

$carros = array("BMW,", "Veloster,", "Hilux");
print_r($carros);
echo "<br>";
$carros_2 = array(1 => "BMW", 2 => "Veloster", 3 => "Hilux");
$carros_2[] = "Amarok";
$carros_2[10] = "Camaro";
print_r($carros_2);
echo "<br>";
echo $carros_2[10];
echo "<br><br>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
print_r($motos);
echo $motos[5];
echo "<br>";
echo "<br><br>";

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);
echo "<br>";
echo "Total Clientes: ".count($clientes);
echo "<hr>";

// foreach
foreach($clientes as $valor) {
  echo $valor."<br>";
}
echo "<hr>";

// arrays associativos
$cliente = ["nome"=>"Ana", "idade"=> 20, "altura"=> 1.78];
$cliente["cidade"] = "Itabuna";
echo $cliente["nome"]."<br>";
print_r($cliente);
echo "<br><br>";

foreach($cliente as $indice => $valor) {
  echo $indice.": ".$valor."<br>";
}

echo "<hr>";

// Arrays multidimencionais
$times = array("cariocas" => array("campeao"=>"vasco", "vice"=>"flamengo", "terceiro"=>"botafogo"),
               "paulistas" => array("santos", "são paulo", "palmeiras"),
               "baianos" => array("bahia", "vitoria", "itabuna"));

echo $times["paulistas"][0];
echo "<br><br>";

foreach($times["cariocas"] as $indice => $valor){
  echo $indice.": ".$valor."<br>";
}

?>