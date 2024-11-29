<?php

$conn = new PDO('mysql:host=localhost;dbname=db_cinebox', 'root', '');

$dados = $_GET;

var_dump($dados);

$query = 'INSERT INTO tb_filmes(Nome, Classificacao_Indicativa,Valor_Ingresso) 
VALUE (:Nome, :Classificacao_Indicativa, :Valor_Ingresso)';

$preparando = $conn->prepare($query);

$preparando->execute([
    ':Nome' => $dados['nome'],
    ':Classificacao_Indicativa' => $dados['indicativa'],
    ':Valor_Ingresso' => $dados['valor']
]);
