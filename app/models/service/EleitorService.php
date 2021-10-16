<?php

namespace app\models\service;

use app\models\validacao\cursoValidacao;
use app\models\validacao\EleitorValidacao;
use app\models\validacao\RgValidacao;

class EleitorService
{
    public static function salvar($eleitor, $campo, $tabela)
    {
        $validacao = EleitorValidacao::salvar($eleitor);
        return Service::salvar($eleitor, $campo, $validacao->listaErros(), $tabela);
    }
}
