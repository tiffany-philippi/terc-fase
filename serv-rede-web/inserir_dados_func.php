<?php

  include "conecta_banco.php";
  
  mysqli_query ($conexao, "insert into ecdtFuncionario (nmFuncionario, deCargo, vlSalario) values ('$_POST[frmCmpNome]', '$_POST[frmCmpCargo]', '$_POST[frmCmpSalario]')") or die ("Erro ao cadastrar o funcionário! " . mysqli_error($conexao));

  echo "Funcionário cadastrado com sucesso!";

  // Close Connection. mysqli_error($conn)
  mysqli_close($conexao);

?>