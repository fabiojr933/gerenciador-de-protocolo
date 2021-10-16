<?php

namespace app\models\validacao;

use app\core\Validacao;

class CertidaoValidacao
{
    public static function salvar($certidao)
    {
        $validacao = new Validacao($certidao);
        $validacao->setData("id_documento", $certidao->id_documento);
        $validacao->getData("id_documento")->isVazio();

        return $validacao;
    }
}
