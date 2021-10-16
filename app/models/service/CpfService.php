<?php

namespace app\models\service;

use app\models\validacao\CpfValidacao;
use app\models\validacao\cursoValidacao;
use app\models\validacao\RgValidacao;

class CpfService
{
    public static function salvar($documento_cpf, $campo, $tabela)
    {
        $validacao = CpfValidacao::salvar($documento_cpf);
        return Service::salvar($documento_cpf, $campo, $validacao->listaErros(), $tabela);
    }
}
