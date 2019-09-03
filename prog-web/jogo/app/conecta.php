<?php
$dsn = "mariadb:dbname=progweb_dev;host=localhost";
$usr = "root";
$senha = "";

try{
	$dbh = new PDO($dsn , $usr , $senha);
	$dbh -> setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $dbh -> exec ('set names utf8');
    // echo "deu certo";
} catch(PDOException $e){
	echo 'ERROR: ' . $e -> getMessage();
}