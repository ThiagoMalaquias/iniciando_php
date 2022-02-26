<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    // FILTER_VALIDATE_EMAIL
    // FILTER_VALIDATE_INT
    // FILTER_VALIDATE_FLOAT
    // FILTER_VALIDATE_IP
    // FILTER_VALIDATE_URL

    if(isset($_POST['envio'])){
      $erros = array();

      if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $erros[] = "Email é invalido";
      }

      if (!filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
        $erros[] = "Idade precisa ser inteiro";
      }

      if (!filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
        $erros[] = "Peso precisa ser um float";
      }

      if (!filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
        $erros[] = "Ip é invalido";
      }

      if (!filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
        $erros[] = "Url é invalida";
      }

      if(!empty($erros)){
        foreach($erros as $erro){
          echo "<li>$erro</li>";
        }
      }else {
        echo "Seus dados estão corretos";
      }

    }
  ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Email: <input type="email" name="email" id="email"><br>
    Idade: <input type="number" name="idade" id="idade"><br>
    Peso: <input type="text" name="peso" id="peso"><br>
    Ip: <input type="text" name="ip" id="ip"><br>
    URL: <input type="url" name="url" id="url">

    <br><br>
    <button type="submit" name="envio">Enviar</button>
  </form>
</body>
</html>