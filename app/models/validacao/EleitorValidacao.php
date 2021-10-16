<?php

namespace app\models\validacao;

use app\core\Validacao;

class EleitorValidacao
{
    public static function salvar($eleitor)
    {
        $validacao = new Validacao($eleitor);
        $validacao->setData("id_documento", $eleitor->id_documento);
        $validacao->getData("id_documento")->isVazio();

        return $validacao;
    }
}
