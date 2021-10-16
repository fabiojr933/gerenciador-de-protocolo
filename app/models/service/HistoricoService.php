<?php

namespace app\models\service;

use app\models\validacao\cursoValidacao;
use app\models\validacao\HistoricoValidacao;
use app\models\validacao\RgValidacao;

class HistoricoService
{
    public static function salvar($historico, $campo, $tabela)
    {
        $validacao = HistoricoValidacao::salvar($historico);
        return Service::salvar($historico, $campo, $validacao->listaErros(), $tabela);
    }
}
