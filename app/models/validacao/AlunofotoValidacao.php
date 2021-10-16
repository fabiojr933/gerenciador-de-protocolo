<?php

namespace app\models\validacao;

use app\core\Validacao;

class AlunofotoValidacao
{
    public static function salvar($aluno)
    {
        $validacao = new Validacao($aluno);
        $validacao->setData("id_documento", $aluno->id_documento);
        $validacao->getData("id_documento")->isVazio();

        return $validacao;
    }
}
