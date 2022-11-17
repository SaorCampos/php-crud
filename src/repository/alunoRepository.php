<?php

declare(strict_types=1);
function buscarAlunos(): iterable
{
    $sql = 'SELECT * FROM tb_alunos';
    $alunos = abrirConexao()->query($sql);
    return $alunos;
}
function exlcuirAluno(string $id): void
{
    $sql = "DELETE FROM tb_alunos WHERE id={$id}";
    abrirConexao()->query($sql);
}
function novoAluno()
{
    try {
        if (isset($_POST['editar']) && $_POST['editar'] == "editar") {
            $nome = $_POST['nome'];
            $matricula = $_POST['matricula'];
            $cidade = $_POST['cidade'];
            $select = "INSERT INTO tb_alunos (nome, matricula, cidade) VALUES (?,?,?)";
            $query = abrirConexao()->prepare($select);
            $query->execute([$nome, $matricula, $cidade]);
        }
    } catch (Exception $e) {
        var_dump($e);
    }
}
function buscarAluno(string $id): iterable
{
    $sql = "SELECT * FROM tb_alunos WHERE id='{$id}'";
    $aluno = abrirConexao()->query($sql);
    return $aluno->fetch(PDO::FETCH_ASSOC);
}
function editarAluno(): void
{
    try {
        if (isset($_POST['editar']) && $_POST['editar'] == "editar") {
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $matricula = $_POST['matricula'];
            $cidade = $_POST['cidade'];
            $sql = "UPDATE tb_alunos SET nome=?, matricula=?, cidade=? WHERE id=?";
            $query = abrirConexao()->prepare($sql);
            $query->execute([$nome, $matricula, $cidade, $id]);
            header('location: /listar');
        }
    } catch (Exception $e) {
        var_dump($e);
    }
}
