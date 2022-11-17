<?php 

//definindo que nesse arquivo será trabalhado os tipos de dados
declare(strict_types=1);

function inicio (): void //estamos declarando que essa funcao "nao tem retorno"
{
    include '../src/views/inicio.phtml';
}

function listar (): void 
{
    //SELECT TODOS
    $alunos =buscarAlunos();
    include '../src/views/listar.phtml';
}

function novo (): void 
{
    include '../src/views/novo.phtml';
    novoAluno();
}

function editar (): void
{
    include '../src/views/editar.phtml';
}
function excluir()
{
    $id = $_GET['id'];
    exlcuirAluno($id);
    header('location: /listar');
}
