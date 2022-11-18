<?php
declare(strict_types=1);
function validateForm(string $nome, string $cidade, string $matricula): bool
{
    if(strlen(strip_tags($nome)) < 3){
        $mensagem ='Nome invalido';
        include "../src/views/components/error.phtml";
        return false;
    }
    if(strlen(strip_tags($cidade)) < 3){
        $mensagem ='Cidade invalida';
        include "../src/views/components/error.phtml";
        return false;
    }
    if(strlen(strip_tags($matricula)) < 1){
        $mensagem ='Matricula invalida';
        include "../src/views/components/error.phtml";
        return false;
    }
    return true;
}