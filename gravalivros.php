<?php

require "config.php";

require "funcoes.php";

cabecalho("Resultado da operação");

$nome = htmlentities($_POST['txtnome'], ENT_HTML5  , 'UTF-8');
$editora = htmlentities($_POST['txteditore'], ENT_HTML5  , 'UTF-8');
$autora = htmlentities($_POST['txtautora'], ENT_HTML5  , 'UTF-8');

verificaCampo("Nome", $nome);
verificaCampo("Editora", $editora);
verificaCampo("Autora", $autora);

$insert = $pdo->prepare("insert into livros values (:codigo,:nome,:editora,:autora)");
$insert->bindValue(':codigo', 0);
$insert->bindValue(':nome', $nome);
$insert->bindValue(':editora', $editora);
$insert->bindValue(':autora', $autora);

if($insert->execute()){
    echo "<h1>Livro cadastrado!</h1>";
    header("Refresh: 2; URL=cadlivro.php");
}else{
    echo "<h1>Erro ao cadastrar.</h1>";
}

rodape();

?>