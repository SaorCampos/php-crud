<?php 

function abrirConexao (): PDO
{
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '30441124';
    $banco = 'colegio';

    $conexao = new PDO("mysql:host={$servidor};dbname={$banco}", $usuario, $senha);

    return $conexao;
}