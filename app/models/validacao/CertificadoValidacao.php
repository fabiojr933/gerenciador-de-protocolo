<?php

namespace app\models\validacao;

use app\core\Validacao;

class CertificadoValidacao
{
    public static function salvar($certificado)
    {
        $validacao = new Validacao($certificado);
        $validacao->setData("id_documento", $certificado->id_documento);
        $validacao->getData("id_documento")->isVazio();

        return $validacao;
    }
}
