<?php

  // variáveis
  $servidor = 'localhost';
  $banco    = 'AVALIACAOI';
  $usuario  = 'karine';
  $senha    = 'Alun@19';
  $porta	= '3301';
  
  // abrindo conexão
  $conexao = mysqli_connect($servidor, $usuario, $senha, $banco, $porta) or die ("Não foi possível estabelecer uma conexão com o banco de dados!" . mysqli_error());

  mysqli_set_charset($conexao,"utf8");

?>