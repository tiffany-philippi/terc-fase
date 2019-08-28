<?php
session_start();

$hoje = date("Y-m-d");
include 'conecta_sql.php';

$login = $_POST["login"];
$senha_usr = md5($_POST["senha"]);
$sql = "select * from usuarios where login= '" . $login . "'";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
$num_reg = count($rows);

 
if($num_reg > 0 ){

	foreach ($rows as $rs){
	  $login = $rs['login'];
	  $senha = $rs['senha'];
	  $data = $rs['data'];
	}
	if($senha_usr == $senha){
		echo "Senha ok\n";
		echo "<a href='jogo.php'>Ir para jogo</a>";
	}else{
		echo "Senha inválida<br>";
		echo "<a href='index.php'>Voltar</a>";
    }
    
} else{

    $sql = "insert into usuario (login,senha,data) values (:login,:senha,:hoje)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute(array(
    'login' =>$login, 
    'senha'=>$senha_usr,
    'hoje' =>$hoje
    ));

    $num_ins= $stmt->rowcount();
    if($num_ins == 1){
        echo "Usuário cadastrado<br>";
        echo "<a href='jogo.php'>Ir para jogo</a>";
    }else{
        echo "Não foi possível cadastrar novo usuário<br>";
        echo "<a href='index.php'>Voltar</a>";
    }
}
