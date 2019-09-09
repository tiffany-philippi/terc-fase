<?php

  include "conecta_banco.php";  
  $result = mysqli_query($conexao, "select idFuncionario, nmFuncionario, deCargo, vlSalario from ecdtFuncionario where flAtivo = 'S'");
  echo "<h1>Relat&oacute;rio de Funcion&aacute;rios</h1>";
  while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    echo "Matr&iacute;cula: ".$row['idFuncionario'];
	echo "<br>";
	echo "Nome: ".$row['nmFuncionario'];
    echo "<br>";
	echo "Cargo: ".$row['deCargo'];
	echo "<br>";
	$varSalario = $row['vlSalario'];  
	if ($varSalario != '0') {
	  echo "Sal&aacute;rio: ".$row['vlSalario'];
	} else {
		echo "Sal&aacute;rio: <i>pendente de atualização</i>";
	}	
	echo "<br>____________________________________________________<br><br>";
  }	

  // Close Connection
  mysqli_close($conexao);
?>