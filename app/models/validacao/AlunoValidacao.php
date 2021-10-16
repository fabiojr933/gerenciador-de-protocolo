<?php

namespace app\models\validacao;

use app\core\Validacao;

class alunoValidacao
{
    public static function salvar($aluno)
    {
        $validacao = new Validacao($aluno);
        $validacao->setData("nome", $aluno->nome);
        $validacao->setData("telefone", $aluno->telefone);
        $validacao->setData("endereco", $aluno->endereco);
        $validacao->setData("matricula", $aluno->matricula);

        $validacao->getData("nome")->isVazio();
        $validacao->getData("email")->isVazio();
        $validacao->getData("endereco")->isVazio();
        $validacao->getData("matricula")->isVazio();

        return $validacao;
    }
}
