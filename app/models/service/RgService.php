<?php

namespace app\models\service;

use app\models\validacao\cursoValidacao;
use app\models\validacao\RgValidacao;

class RgService
{
    public static function salvar($documento_rg, $campo, $tabela)
    {
        $validacao = RgValidacao::salvar($documento_rg);
        return Service::salvar($documento_rg, $campo, $validacao->listaErros(), $tabela);
    }
}
