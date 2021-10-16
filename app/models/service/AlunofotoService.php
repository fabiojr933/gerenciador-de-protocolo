<?php

namespace app\models\service;

use app\models\validacao\AlunofotoValidacao;
use app\models\validacao\cursoValidacao;
use app\models\validacao\RgValidacao;

class AlunofotoService
{
    public static function salvar($aluno, $campo, $tabela)
    {
        $validacao = AlunofotoValidacao::salvar($aluno);
        return Service::salvar($aluno, $campo, $validacao->listaErros(), $tabela);
    }
}
