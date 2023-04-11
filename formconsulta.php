<?php

require "funcoes.php";
require "config.php";

cabecalho("Consulta");

echo "
<h1>Consulta de Livros</h1>
<form action=\"consultalivros.php\" method=\"post\" class=\"form-control-inline\">
    <p>
    <select class=\"form-select\" name=\"opt\">
        <option value=\"nome\">Nome</option>
        <option value=\"codigo\" selected>Código</option>
        <option value=\"autora\">Autora</option>
        <option value=\"editora\">Editora</option>
    </select>
    </p>
    <label>
        <input type=\"text\" name=\"txtvalor\" size=\"50\" maxlenght=\"100\" class=\"form-control\">
    </label>
    <input type=\"submit\" value=\"Pesquisar\" class=\"btn btn-primary\">
    <input type=\"reset\" value=\"Limpar\" class=\"btn btn-primary\">
</form>
";

rodape();
?>