<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <h1>Exercício 01</h1>
    <hr>
    <p><i>Faça as chamadas e testes nesta página</i></p>

<?php
require_once "src/Livro.php";

$livro = new Livro();

$livro->setTitulo("Divinos Rivais");
$livro->setAutor("Rebeca Ross");
$livro->setPaginas(464);
?>

    <h2>Acessando/lendo os dados do objeto</h2>
    
        <ul>
            <li><b>Título: </b><?=$livro->getTitulo()?></li>
            <li><b>Autor(a): </b><?=$livro->getAutor()?></li>
            <li><b>Páginas: </b><?=$livro->getPaginas()?></li>
        </ul>
    
    <h2>Testes de acesso aos recursos da classe através do objeto</h2>
    
    <pre><?=var_dump($livro)?></pre>

</body>
</html>