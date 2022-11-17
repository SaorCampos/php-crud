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
    try{
        if(isset($_POST['criar']) && $_POST['criar'] == "criar"){
            $nome = $_POST['nome'];
            $matricula = $_POST['matricula'];
            $cidade = $_POST['cidade'];
            $select = "INSERT INTO tb_alunos (nome, matricula, cidade) VALUES (?,?,?)";
            $query = abrirConexao()->prepare($select);
            $query->execute([$nome, $matricula, $cidade]);
            echo "Passou aqui";
        }
    } catch(Exception $e){
        var_dump($e);
    }
    
}