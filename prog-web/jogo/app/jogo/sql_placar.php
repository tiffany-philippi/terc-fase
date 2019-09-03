<?php
session_start();
$hoje = date("Y-m-d");
include 'conecta_sql.php';
if(!isset($_POST['opcao'])) {
    //echo json_encode(0);
    header('location: ../general/naoAutorizado.html');
    die;
}
$op=$_POST['opcao'];
switch ($op){
    case "J":// por jogador
        $sql = "SELECT p.id, max(p.pontos) as pontos, p.data, j.nome FROM `placar` as p inner join usuario as j on p.id_usuario = j.id group by id_usuario  order by j.nome";
    break;

    case "M":// pelos maiores placares
        $sql = "SELECT p.id, max(p.pontos) as pontos, p.data, j.nome FROM `placar` as p inner join usuario as j on p.id_usuario = j.id group by id_usuario order by max(pontos) desc limit 5";
    break;

    case "T":// mostrar tudo
        $sql = "SELECT p.id, p.pontos, p.data, j.nome FROM `placar` as p inner join usuario as j on p.id_usuario = j.id order by nome";
    break;
}
$stmt = $dbh->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
$num_reg = count($rows);
if($num_reg>0){
    foreach($rows as $ponto) {
        $pontos[] = array(
            'id' 		=> $ponto['id'],
            'nome' 		=> $ponto['nome'],
            'pontos' 	=> $ponto['pontos'],
            'data' 		=> $ponto['data']					
        );
    }
    echo '{"sucesso":"true", "placar":' . json_encode($pontos) . '}';		
}else{
    echo '{"sucesso":"false", "placar":0}';	
}
