<?php

namespace app\models\service;

use app\models\validacao\CertidaoValidacao;
use app\models\validacao\cursoValidacao;
use app\models\validacao\RgValidacao;

class CertidaoService
{
    public static function salvar($cetidao, $campo, $tabela)
    {
        $validacao = CertidaoValidacao::salvar($cetidao);
        return Service::salvar($cetidao, $campo, $validacao->listaErros(), $tabela);
    }
}
