<?php
	session_start();
	$nome= $_SESSION["nome"];
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../global.css" rel="stylesheet">
    <link rel="stylesheet" href="jogo.php">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="jogo.js"></script>
    <title>Jogar</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Vamos jogar, <?php echo $nome?>! </h2>
            <h3>Escolha sua opção</h3>
        </div>

    </div>
</body>
<title>Pedra, papel e tesoura</title>



</head>
<body>
<h1>Olá <?php echo $nome; ?>
<h3>Escolha a sua opção</h3>
<div>
<img src="pedra.jpg" title="PEDRA" id="pedra" class="op">
<img src="papel.jpg" title="PAPEL" id="papel" class="op">
<img src="tesoura.jpg" title="TESOURA" id="tesoura" class="op">
</div>
<div id="result_msg">
<img src="pessoa.png"><input type="text" size="4" id="minha_escolha">
<img src="computador.png"><input type="text" size="4" id="computador_escolha">
</div>
<br>
<div id="resultado"></div>
Placar: <input type="text" size="4" value="0" id="pontos">
</body>
</html>





