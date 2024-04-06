<?php
namespace App\Src;
class Aluno extends Pessoa implements Interface_Humano, Interface_Terraqueo{

    public function respira(){
        echo "o homem respira";
    }

    public function fala(){
        echo "conversa na aula";
    }

    public function logar(){
        echo   "método login implementado";
    }

    public function cadastrar(){
        echo 'método cadastrar implementado';
    }
}