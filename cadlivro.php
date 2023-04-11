<?php
require "funcoes.php";
require "config.php";

cabecalho("Cadastro");

echo "
<a href=\"formconsulta.php\">Consulta de livros</a>
<h1>Cadastro de Livros</h1>
<form action=\"gravalivros.php\" method=\"post\" class=\"form-control-inline\">
    <label>
        Nome:
        <input type=\"text\" name=\"txtnome\" size=\"50\" maxlenght=\"100\" class=\"form-control\">
    </label>
    <p>
    <label>
        Editora:
        <input type=\"text\" name=\"txteditora\" size=\"50\" maxlenght=\"100\" class=\"form-control\">
    </label>
    <p>
    <label>
        Autor(A):
        <input type=\"text\" name=\"txtautora\" size=\"50\" maxlenght=\"100\" class=\"form-control\">
    </label>
    <p>
    <input type=\"submit\" value=\"Gravar\" class=\"btn btn-primary\">
    <input type=\"reset\" value=\"Limpar\" class=\"btn btn-primary\">
</form>
";

$consulta = $pdo->prepare("SELECT * FROM livros order by codigo");
$consulta->execute();

echo "<table border class=\"table table-hover\">
<tr>
    <td>Código</td>
    <td>Nome</td>
    <td>Editora</td>
    <td>Autor(A)</td>
    <td>Opções</td>
</tr>
";

while($row = $consulta->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    echo "<td>$row[codigo]</td>";
    echo "<td>$row[nome]</td>";
    echo "<td>$row[editora]</td>";
    echo "<td>$row[autora]</td>";
    echo "<td>
    <a href=\"alterarlivros.php?codigo=$row[codigo]\" class=\"btn btn-success\">Alterar</a> &nbsp;
    <a href=\"excluirlivros.php?codigo=$row[codigo]\" class=\"btn btn-danger\" onclick=\"return confirm('Confirma exclusão do registro?')\">Excluir</a>
    </td>";
    echo "</tr>";
}

echo "</table>";
rodape();

?>