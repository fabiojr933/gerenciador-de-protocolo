<?php

namespace app\models\validacao;

use app\core\Validacao;

class RgValidacao
{
    public static function salvar($documento_rg)
    {
        $validacao = new Validacao($documento_rg);
        $validacao->setData("id_documento", $documento_rg->id_documento);
        $validacao->getData("id_documento")->isVazio();

        return $validacao;
    }
}
