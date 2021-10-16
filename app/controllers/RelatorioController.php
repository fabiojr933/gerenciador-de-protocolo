<?php

namespace app\controllers;

use app\core\Controller;
use app\models\dao\GenericoDao;
use app\models\service\Service;
use Fpdf\Fpdf;

class RelatorioController extends Controller
{

    public function relatorioProtocolo($id_documento)
    {

        $dao = new GenericoDao();
        $documento = $dao->getDocumentoAluno($id_documento);
        $casamento = Service::get("documento_certificado_casamento_nascimento", "id_documento", $id_documento);
        $certificado = Service::get("documento_certificado_ensino_medio", "id_documento", $id_documento);
        $cpf = Service::get("documento_cpf", "id_documento", $id_documento);
        $foto = Service::get("documento_foto_aluno", "id_documento", $id_documento);
        $historico = Service::get("documento_historico_escolar", "id_documento", $id_documento);
        $reservista = Service::get("documento_reservista", "id_documento", $id_documento);
        $rg = Service::get("documento_rg", "id_documento", $id_documento);
        $titulo = Service::get("documento_titulo_eleitor", "id_documento", $id_documento);

        $pdf = new Fpdf();
        $pdf->AddPage();
        //   $pdf->Image();
        $pdf->SetFont("Arial", "I", 14);
        $pdf->Cell(0, 10, "PROTOCOLO DE ENTREGA", 1, 1, "C");

        $pdf->SetFont("Arial", "I", 12);
        $pdf->Cell(1, 15, "Numero do protocolo:      #" . $documento->protocolo, 0, 1);
        $pdf->Cell(1, 0, "Nome do Aluno :             " . utf8_decode($documento->nome_aluno), 0, 1);
        $pdf->Cell(1, 15, "Curso :                            " . utf8_decode($documento->curso), 0, 1);
        $pdf->Cell(1, 0, "Matricula :                       " . $documento->matricula, 0, 1);

        $pdf->Ln(5);
        $pdf->SetFont("Arial", "I", 14);
        $pdf->Cell(0, 10, "Lista de documentos entrege", 1, 0, "C");
        $pdf->Ln(15);

        $pdf->SetFont("Arial", "I", 11);

        //RG
        if ($rg->id_documento <> null) {
            $pdf->Cell(11, 6, "Rg -    Entregue", 1, 0);
            $pdf->Ln(8);
        } else {
            $pdf->Cell(11, 6, "Rg -    nao - Entregue", 1, 0);
            $pdf->Ln(8);
        }

        //CPF
        if ($cpf->id_documento <> null) {
            $pdf->Cell(11, 6, "Cpf -    Entregue", 1, 0);
            $pdf->Ln(8);
        } else {
            $pdf->Cell(11, 6, "Cpf -    nao - Entregue", 1, 0);
            $pdf->Ln(8);
        }

        //Titulo de eleitor
        if ($titulo->id_documento <> null) {
            $pdf->Cell(32, 6, "Titulo de eleitor -    Entregue", 1, 0);
            $pdf->Ln(8);
        } else {
            $pdf->Cell(32, 6, "Titulo de eleitor -    nao - Entregue", 1, 0);
            $pdf->Ln(8);
        }

        //Reservista
        if ($reservista->id_documento <> null) {
            $pdf->Cell(24, 6, "Reservista -    Entregue", 1, 0);
            $pdf->Ln(8);
        } else {
            $pdf->Cell(24, 6, "Reservista -    nao - Entregue", 1, 0);
            $pdf->Ln(8);
        }

        //Historico escolar
        if ($historico->id_documento <> null) {
            $pdf->Cell(34, 6, "Historico escolar -    Entregue", 1, 0);
            $pdf->Ln(8);
        } else {
            $pdf->Cell(34, 6, "Historico escolar -    nao - Entregue", 1, 0);
            $pdf->Ln(8);
        }

        //Foto 3x4
        if ($foto->id_documento <> null) {
            $pdf->Cell(21, 6, "Foto 3x4 -    Entregue", 1, 0);
            $pdf->Ln(8);
        } else {
            $pdf->Cell(21, 6, "Foto 3x4 -    nao - Entregue", 1, 0);
            $pdf->Ln(8);
        }

        //Certificado do ensino medio
        if ($certificado->id_documento <> null) {
            $pdf->Cell(53, 6, "Certificado do ensino medio -    Entregue", 1, 0);
            $pdf->Ln(8);
        } else {
            $pdf->Cell(53, 6, "Certificado do ensino medio -    nao - Entregue", 1, 0);
            $pdf->Ln(8);
        }

        //Certidão de casamento ou nascimento
        if ($casamento->id_documento <> null) {
            $pdf->Cell(72, 6, utf8_decode("Certidão de casamento ou nascimento -    Entregue"), 1, 0);
            $pdf->Ln(8);
        } else {
            $pdf->Cell(72, 6, utf8_decode("Certidão de casamento ou nascimento -    nao - Entregue"), 1, 0);
            $pdf->Ln(8);
        }
        $pdf->Output();
    }
}
