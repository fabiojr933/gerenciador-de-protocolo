<?php

namespace app\models\service;

use app\models\validacao\cursoValidacao;

class CursoService
{
    public static function salvar($curso, $campo, $tabela)
    {
        $validacao = cursoValidacao::salvar($curso);
        return Service::salvar($curso, $campo, $validacao->listaErros(), $tabela);
    }
}
