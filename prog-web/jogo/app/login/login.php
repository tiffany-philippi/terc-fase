<?php
session_start();

$hoje = date("Y-m-d");
include '../conecta.php';
// var_dump($dbh);

$login = $_POST["login"];
$senha_usr = md5($_POST["senha"]);
$sql = "select * from usuarios where nome= '" . $login . "'";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
$num_reg = count($rows);

 
if($num_reg > 0 ){

	foreach ($rows as $rs){
	  $login = $rs['nome'];
	  $senha = $rs['senha'];
	  $data = $rs['data'];
	}
	if($senha_usr == $senha){
		header('location: ../jogo/jogo.html');
	}else{
        // @TODO PÁGINA SENHA INVÁLIDA
		echo "Senha inválida<br>";
		echo "<a href='login.php'>Voltar</a>";
    }
    
} else{

    $sql = "insert into usuarios (nome,senha,data) values (:login,:senha,:hoje)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute(array(
    'login' =>$login, 
    'senha'=>$senha_usr,
    'hoje' =>$hoje
    ));

    $num_ins= $stmt->rowcount();
    if($num_ins == 1){
        // @TODO CRIAR PÁGINA PARA USUÁRIO CADASTRADO
        echo "Usuário cadastrado<br>";
        echo "<a href='../jogo/jogo.php'>Ir para jogo</a>";
    }else{
        // @TODO CRIAR PÁGINA NÃO FOI POSSÍVEL CADASTRAR
        echo "Não foi possível cadastrar novo usuário<br>";
        echo "<a href='login.php'>Voltar</a>";
    }
}
