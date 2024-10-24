<?php

function novaConexao()
{

$dsn = 'mysql:host=localhost;dbname=benditovale';
$usuario = 'root';
$senha = '';

try
{

$conexao = new PDO($dsn, $usuario, $senha);
return $conexao;

}

catch(PDOException $e)
{

echo 'erro ao conectar com o banco de dados';

}

}

?>