<?php

namespace app\models\service;

use app\models\validacao\alunoValidacao;

class AlunoService
{
    public static function salvar($aluno, $campo, $tabela)
    {
       
        $validacao = alunoValidacao::salvar($aluno);
        return Service::salvar($aluno, $campo, $validacao->listaErros(), $tabela);
    }
}
