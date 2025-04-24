<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <h1>Exercício 03</h1>
    <hr>
    <p><i>Faça as chamadas e testes nesta página</i></p>

<?php
require_once "src/Enums/Genero.php";
require_once "src/Enums/Formato.php";
require_once "src/Models/Livro.php";
require_once "src/Models/Literario.php";
require_once "src/Models/Tecnico.php";
require_once "src/Models/Programacao.php";

$literario = new Literario("Divinos Rivais", "Rebeca Ross", Genero::FANTASIA);
$programacao = new Programacao("Java para Leigos", "Barry A. Burd", Formato::FISICO, "Java");
?>

    <h2>Acessando/lendo os dados do objeto</h2>
    
        <ul>
            <h3>Livro Literário!</h3>
            <li><b>Título: </b><?=$literario->getTitulo()?></li>
            <li><b>Autor(a): </b><?=$literario->getAutor()?></li>
            <li><b>Gênero: </b><?=$literario->getGenero()->name?></li>
        </ul>

        <ul>
            <h3>Livro de Programação!</h3>
            <li><b>Título: </b><?=$programacao->getTitulo()?></li>
            <li><b>Autor(a): </b><?=$programacao->getAutor()?></li>
            <li><b>Gênero: </b><?=$programacao->getFormato()->name?></li>
            <li><b>Linguagem: </b><?=$programacao->getLinguagem()?></li>
        </ul>
    
    <h2>Testes de acesso aos recursos da classe através do objeto</h2>
    
    <pre><?=var_dump($literario)?></pre>
    <pre><?=var_dump($programacao)?></pre>

</body>
</html>