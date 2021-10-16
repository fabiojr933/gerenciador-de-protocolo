<?php

namespace app\models\service;

use app\models\validacao\CertificadoValidacao;
use app\models\validacao\cursoValidacao;
use app\models\validacao\RgValidacao;

class CertificadoService
{
    public static function salvar($certificado, $campo, $tabela)
    {
        $validacao = CertificadoValidacao::salvar($certificado);
        return Service::salvar($certificado, $campo, $validacao->listaErros(), $tabela);
    }
}
