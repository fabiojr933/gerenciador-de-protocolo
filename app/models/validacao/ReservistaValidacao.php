<?php

namespace app\models\validacao;

use app\core\Validacao;

class ReservistaValidacao
{
    public static function salvar($revervista)
    {
        $validacao = new Validacao($revervista);
        $validacao->setData("id_documento", $revervista->id_documento);
        $validacao->getData("id_documento")->isVazio();

        return $validacao;
    }
}
