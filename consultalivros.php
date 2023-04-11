<?php
require "funcoes.php";
require "config.php";

cabecalho("Consulta");

$opt = $_POST['opt'];
$valor = $_POST['txtvalor'];


if($opt == "nome"){
    $consulta = $pdo->prepare("SELECT * FROM livros WHERE nome like :nome");
    $consulta->bindValue(':nome', "%$valor%");
    $consulta->execute();
    echo "<h1>Resultado:</h1>";
}else if($opt == "codigo"){
    $consulta = $pdo->prepare("SELECT * FROM livros WHERE codigo like :codigo");
    $consulta->bindValue(':codigo', "%$valor%");
    $consulta->execute();
    echo "<h1>Resultado:</h1>";
}else if($opt == "autora"){
    $consulta = $pdo->prepare("SELECT * FROM livros WHERE autora like :autora");
    $consulta->bindValue(':autora', "%$valor%");
    $consulta->execute();
    echo "<h1>Resultado:</h1>";
}else if($opt == "editora"){
    $consulta = $pdo->prepare("SELECT * FROM livros WHERE editora like :editora");
    $consulta->bindValue(':editora', "%$valor%");
    $consulta->execute();
    echo "<h1>Resultado:</h1>";
}

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