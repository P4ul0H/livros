<?php
require "config.php";
require "funcoes.php";

cabecalho("Alteração de Livros");

$codigo = $_GET['codigo'];

$consulta = $pdo->prepare("SELECT * FROM livros WHERE codigo=:codigo");

$consulta->bindValue(':codigo', $codigo);
$consulta->execute();

while($row = $consulta->fetch(PDO::FETCH_ASSOC)){
    $codigo = $row['codigo'];
    $nome = $row['nome'];
    $editora = $row['editora'];
    $autora = $row['autora'];
}

echo "<h1>Alteração de Livros</h1>
<form action=\"gravaaltlivros.php\" method=\"post\" name=\"f1\" class=\"form-control-inline\">
<input type=\"hidden\" name=\"txtcodigo\" value=\"$codigo\">

<label>
Nome:
<input type=\"text\" name=\"txtnome\" value=\"$nome\" size=\"50\" maxlenght=\"100\" class=\"form-control\">
</label>

<p>

<label>
Editora:
<input type=\"text\" name=\"txteditora\" value=\"$editora\" size=\"50\" maxlenght=\"100\" class=\"form-control\">
</label>

<p>

<label>

Autor(A):
<input type=\"text\" name=\"txtautora\" value=\"$autora\" size=\"50\" maxlenght=\"100\" class=\"form-control\">
</label>

<p>

<label>
<input type=\"submit\" value=\"Gravar\" class=\"btn btn-primary\">
<input type=\"reset\" value=\"Limpar\" class=\"btn btn-primary\">
</form>
";
rodape();
