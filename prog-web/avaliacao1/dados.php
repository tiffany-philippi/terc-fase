<?php
  session_start();

  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $num3 = $_POST["num3"];
  $num4 = $_POST["num4"];
  $num5 = $_POST['num5'];
  $num6 = $_POST['num6'];

  $values = array($num1, $num2, $num3, $num4, $num5, $num6);

  // $_SESSION["nome"]=$nome;
  

  $sum = arraySum($values);
  $order = asort($values);

  function arraySum($values) {
    $sumArray = array_sum($values);
    return $sumArray;
  }
  // foreach($values as $key => $resultado) {
  //   echo $resultado . "\n";
  // }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Bem vindo</title>
  <style>
  .container {
    text-align: center;
    width: 90%;
    background-color: #ffffb5;
    margin: 0 auto;
    border: 4px solid pink;
    padding: 20px;
  }
  </style>
</head>
<body>
  <div class="container">
    <h2>Bem vindo, <?php echo $_POST["nome"] ?> !</h2>
    <h4>Os números que você escolheu na página anterior geraram uma soma e eis o resultado:</h4>
    <p><?php echo $sum ?></p>
    <h4>Não lembra quais são? A seguir, os números escolhidos em ordem crescente:</h4>
    <p>
      <?php foreach($values as $key => $resultado) echo $resultado . " ";?>
    </p>
  </div>
</body>
</html>
