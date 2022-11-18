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
    if (false === empty($_POST)){
        $nome = trim($_POST['nome']);
        $matricula = trim($_POST['cidade']);
        $cidade = trim($_POST['matricula']);
        if(strlen($nome) < 3){
            die('Nome invalido');
        }
        if(strlen($cidade) < 3){
            die('Cidade invalida');
        }
        if(strlen($matricula) < 3){
            die('Matricula invalida');
        }
    }
    novoAluno();
}

function editar (): void
{
    $id = $_GET['id'];
    $aluno = buscarAluno($id);
    editarAluno();
    include '../src/views/editar.phtml';
}
function excluir()
{
    $id = $_GET['id'];
    exlcuirAluno($id);
    header('location: /listar');
}
