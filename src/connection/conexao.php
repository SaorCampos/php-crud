<?php 

function abrirConexao (): PDO
{
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '1234';
    $banco = 'digitalcommerce';

    $conexao = new PDO("mysql:host={$servidor};dbname={$banco}", $usuario, $senha);

    return $conexao;
}