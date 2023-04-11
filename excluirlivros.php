<?php

require "config.php";
require "funcoes.php";

cabecalho("Exclusão de livros");

$codigo = $_GET['codigo'];

$delete = $pdo->prepare("delete from livros WHERE codigo=:codigo");
$delete->bindValue(':codigo', $codigo);

if($delete->execute()){
    echo "<h1>Livro excluido!</h1>";
    header("Refresh: 2; URL=cadlivro.php");
}else{
    echo "<h1>Erro ao excluir</h1>";
}

rodape();

?>