<?php
    $nome = $_GET["nome"] ?? "Desconhecido";
    $sobrenome = $_GET["sobrenome"] ?? "da Silva";
    
    if ($nome == null OR $sobrenome == null)
    {
        echo "ERRO! uma ou mais areas nao foram preenchidas";
    }
    else
    {
        echo "Ola, $nome $sobrenome seja bem vindo(a)!";
    }

?>
<p><a href="index.html">Voltar para pagina inicial</a></p>