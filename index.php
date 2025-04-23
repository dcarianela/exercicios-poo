<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <h1>Exercício 02</h1>
    <hr>
    <p><i>Faça as chamadas e testes nesta página</i></p>

<?php
require_once "src/Livro.php";

$livro = new Livro("Divinos Rivais", "Rebeca Ross", 464);
?>

    <h2>Acessando/lendo os dados do objeto</h2>
    
        <ul>
            <li><b>Título: </b><?=$livro->getTitulo()?></li>
            <li><b>Autor(a): </b><?=$livro->getAutor()?></li>
        </ul>
    
    <h2>Testes de acesso aos recursos da classe através do objeto</h2>
    
    <pre><?=var_dump($livro)?></pre>

</body>
</html>