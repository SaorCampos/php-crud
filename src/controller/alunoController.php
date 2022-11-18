<?php 

//definindo que nesse arquivo será trabalhado os tipos de dados
declare(strict_types=1);
function renderizar(string $nomeDoArquivo, mixed $dados =null){
    include '../src/views/head.phtml';
    include "../src/views/{$nomeDoArquivo}.phtml";
    $dados;
    include '../src/views/foot.phtml';
}
function redirecionar(string $onde)
{
    header("location: {$onde}");
}
function inicio (): void //estamos declarando que essa funcao "nao tem retorno"
{
    // include '../src/views/inicio.phtml';
    renderizar("inicio");
}

function listar (): void 
{
    //SELECT TODOS
    $alunos =buscarAlunos();
    renderizar("listar", $alunos);
}

function novo (): void 
{
    renderizar("novo");
    if (false === empty($_POST)){
        $nome = trim($_POST['nome']);
        $matricula = trim($_POST['cidade']);
        $cidade = trim($_POST['matricula']);
        if(true === validateForm($nome, $cidade, $matricula)){
            novoAluno($nome, $cidade, $matricula);
            redirecionar('/listar');
        }
    }
}

function editar (): void
{
    $id = $_GET['id'];
    $aluno = buscarAluno($id);
    renderizar("editar", $aluno);
    if (false === empty($_POST)){
        $nome = trim($_POST['nome']);
        $matricula = trim($_POST['cidade']);
        $cidade = trim($_POST['matricula']);
        if(true === validateForm($nome, $cidade, $matricula)){
            editarAluno($nome, $cidade, $matricula, $id);
            redirecionar('/listar');
        }
    }
}
function excluir()
{
    $id = $_GET['id'];
    exlcuirAluno($id);
    redirecionar('/listar');
}
