<?php

namespace app\models\service;

use app\models\validacao\cursoValidacao;
use app\models\validacao\ReservistaValidacao;
use app\models\validacao\RgValidacao;

class ReservistaService
{
    public static function salvar($reservista, $campo, $tabela)
    {
        $validacao = ReservistaValidacao::salvar($reservista);
        return Service::salvar($reservista, $campo, $validacao->listaErros(), $tabela);
    }
}
