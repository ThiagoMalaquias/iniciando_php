<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="dados.php" method="POST">
    <label for="nome">Nome: </label>
    <input type="text" name="nome" id="nome">
    <br>
    <label for="email">Email: </label>
    <input type="email" name="email" id="email">
    <br><br>
    <button type="submit">Enviar</button>
  </form>
  
  <br><br>

  <form action="dados.php" method="GET">
    <label for="idade">Idade: </label>
    <input type="text" name="idade" id="idade">
    <br>
    <label for="altura">Altura: </label>
    <input type="text" name="altura" id="altura">
    <br><br>
    <button type="submit">Enviar</button>
  </form>
</body>
</html>