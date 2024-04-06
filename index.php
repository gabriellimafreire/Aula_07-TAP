<?php
require 'vendor/autoload.php';
use App\Src\Pessoa;
use App\Src\Aluno;
use App\Src\Interface_Humano;
use App\Src\Interface_Terraqueo;

$alunos = new Aluno();
$alunos->logar();
$alunos->respira();