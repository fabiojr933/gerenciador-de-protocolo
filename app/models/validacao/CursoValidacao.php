<?php

namespace app\models\validacao;

use app\core\Validacao;

class CursoValidacao
{
    public static function salvar($curso)
    {
        $validacao = new Validacao($curso);
        $validacao->setData("descricao", $curso->descricao);
      
        $validacao->getData("descricao")->isVazio();       

        return $validacao;
    }
}
