<?php

namespace app\models\validacao;

use app\core\Validacao;

class HistoricoValidacao
{
    public static function salvar($historico)
    {
        $validacao = new Validacao($historico);
        $validacao->setData("id_documento", $historico->id_documento);
        $validacao->getData("id_documento")->isVazio();

        return $validacao;
    }
}
