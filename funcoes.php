<?php
function cabecalho($titulo){
    echo "<!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"http://localhost/livros/css/bootstrap.min.css\">
        <title>$titulo</title>
    </head>
    <body>
    <div class=\"container\">
    <div class=\"jumbotron\">";
    
}

function rodape(){
    echo "
    </div>
    </div>
    </body>
    </html>";
}

function verificaCampo($campo, $valor){
    if($valor == ''){
        echo "<h2>O campo $campo deve ser preenchido!</h2>";
        echo "<a href=\"javascript:window.history.back();\">
        <input type=\"button\" value=\"Voltar\" class=\"btn btn-danger\"></a>";
        rodape();
        exit;
    }
}
