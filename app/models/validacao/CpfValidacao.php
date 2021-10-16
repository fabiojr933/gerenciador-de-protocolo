<?php

namespace app\models\validacao;

use app\core\Validacao;

class CpfValidacao
{
    public static function salvar($documento_cpf)
    {
        $validacao = new Validacao($documento_cpf);
        $validacao->setData("id_documento", $documento_cpf->id_documento);
        $validacao->getData("id_documento")->isVazio();

        return $validacao;
    }
}
