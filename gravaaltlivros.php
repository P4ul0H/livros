<?php
require "config.php";
require "funcoes.php";

cabecalho("Alteração de Livros");

$codigo = $_POST['txtcodigo'];
$nome = htmlentities($_POST['txtnome'], ENT_HTML5  , 'UTF-8');
$editora = htmlentities($_POST['txteditora'], ENT_HTML5  , 'UTF-8');
$autora = htmlentities($_POST['txtautora'], ENT_HTML5  , 'UTF-8');

verificaCampo("Nome", $nome);
verificaCampo("Editora", $editora);
verificaCampo("Autora", $autora);

$sql = "UPDATE livros SET nome=:nome, editora=:editora, autora=:autora WHERE codigo=:codigo";
$update = $pdo->prepare($sql);
$update->bindValue(':codigo', $codigo);
$update->bindValue(':nome', $nome);
$update->bindValue(':editora', $editora);
$update->bindValue(':autora', $autora);

if($update->execute()){
    echo"<h1>Livro alterado!</h1>";
    header("Refresh: 2; URL=cadlivro.php");
}else{
    echo "<h1>Erro ao alterar o livro.</h1>";
}
rodape();