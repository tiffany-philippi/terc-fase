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