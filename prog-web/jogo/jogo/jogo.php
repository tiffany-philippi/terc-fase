<?php
	session_start();
	$nome= $_SESSION["nome"];
?>

<html>
<head>
<title>Pedra, papel e tesoura</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
	$('#result_msg').hide();
	jogador = "";
	computador="";
  	$('#pedra').click(function(){
		$('#minha_escolha').val("Pedra");
		escolha_jogo('P');
	  });
	  
  	$('#papel').click(function(){
		$('#minha_escolha').val("Papel");
		escolha_jogo('L');
	});

	$('#tesoura').click(function(){
		$('#minha_escolha').val("Tesoura");
		escolha_jogo('T');
	});
	
	$('.op').click(function(){
		$('#result_msg').show();
	});
	
	function escolha_jogo(op_jogador){
		pontos = parseInt($('#pontos').val());
		sorteio = Math.floor(Math.random() * 3)+1;
		console.log(sorteio);
		if(sorteio == 1){ // PEDRA
			$('#computador_escolha').val("Pedra");
			if(op_jogador == "P"){ // PEDRA
				$('#resultado').html("Empate");
			}
			if(op_jogador == "L"){ // PAPEL
				$('#resultado').html("Papel embrulha pedra. Jogador ganha");
				
				$('#pontos').val(pontos+10);
			}
			if(op_jogador == "T"){ // TESOURA
				$('#resultado').html("Pedra quebra tesoura. Computador ganha");
				$('#pontos').val(pontos-10);
			}
		}
		if(sorteio == 2){ // PAPEL
			$('#computador_escolha').val("Papel");
			if(op_jogador == "P"){ // PEDRA
				$('#resultado').html("Papel embrulha pedra. Computador ganha");
				$('#pontos').val(pontos-10);
			}
			if(op_jogador == "L"){ // PAPEL
				$('#resultado').html("Empate");
			}
			if(op_jogador == "T"){ // TESOURA
				$('#resultado').html("Tesoura corta papel. Jogador ganha");
				$('#pontos').val(pontos+10);
			}
		}
		if(sorteio == 3){ // TESOURA
			$('#computador_escolha').val("Tesoura");
			if(op_jogador == "P"){ // PEDRA
				$('#resultado').html("Pedra quebra tesoura. Jogador ganha");
				$('#pontos').val(pontos+10);
			}
			if(op_jogador == "L"){ // PAPEL
				$('#resultado').html("Tesoura corta papel. Computador ganha");
				$('#pontos').val(pontos-10);
			}
			if(op_jogador == "T"){ // TESOURA
				$('#resultado').html("Empate");
			}
		}
	}
});
</script>

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


