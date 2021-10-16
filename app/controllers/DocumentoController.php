<?php

namespace app\controllers;

use app\core\Controller;
use app\models\dao\GenericoDao;
use app\models\service\AlunofotoService;
use app\models\service\CertidaoService;
use app\models\service\CertificadoService;
use app\models\service\CpfService;
use app\models\service\EleitorService;
use app\models\service\HistoricoService;
use app\models\service\ReservistaService;
use app\models\service\RgService;
use app\models\service\Service;
use Fpdf\Fpdf;
use stdClass;

class DocumentoController extends Controller
{
    public function upload()
    {
        $dados["alunos"] = Service::lista("aluno");
        $dados["view"] = "documento/upload";
        $this->load("template", $dados);
    }
    public function buscarAluno($id_aluno)
    {
        $dao = new GenericoDao();
        $lista_aluno = $dao->getAlunoCurso($id_aluno);
        echo json_encode($lista_aluno);
    }
    public function salvar()
    {
        $documento = new stdClass();

        $documento->id_aluno = $_POST["aluno"];
        $documento->id_curso = $_POST["curso"];
        $documento->rg01 = $_FILES["rg01"]["name"];
        $documento->rg02 = $_FILES["rg02"]["name"];
        $documento->rg03 = $_FILES["rg03"]["name"];
        $documento->cpf01 = $_FILES["cpf01"]["name"];
        $documento->cpf02 = $_FILES["cpf02"]["name"];
        $documento->cpf03 = $_FILES["cpf03"]["name"];
        $documento->historico01 = $_FILES["historico01"]["name"];
        $documento->historico02 = $_FILES["historico02"]["name"];
        $documento->historico03 = $_FILES["historico03"]["name"];
        $documento->certificado01 = $_FILES["certificado01"]["name"];
        $documento->certificado02 = $_FILES["certificado02"]["name"];
        $documento->certificado03 = $_FILES["certificado03"]["name"];
        $documento->reservista01 = $_FILES["reservista01"]["name"];
        $documento->reservista02 = $_FILES["reservista02"]["name"];
        $documento->reservista03 = $_FILES["reservista03"]["name"];
        $documento->foto01 = $_FILES["foto01"]["name"];
        $documento->foto02 = $_FILES["foto02"]["name"];
        $documento->foto03 = $_FILES["foto03"]["name"];
        $documento->eleitor01 = $_FILES["eleitor01"]["name"];
        $documento->eleitor02 = $_FILES["eleitor02"]["name"];
        $documento->eleitor03 = $_FILES["eleitor03"]["name"];
        $documento->certidao01 = $_FILES["certidao01"]["name"];
        $documento->certidao02 = $_FILES["certidao02"]["name"];
        $documento->certidao03 = $_FILES["certidao03"]["name"];

        //  echo '<br>';
        $validacao_rg01 = pathinfo($documento->rg01);
        if (
            $validacao_rg01['extension'] <> "jpeg" and $validacao_rg01['extension'] <> "jpg" and $validacao_rg01['extension'] <> "png" and
            $validacao_rg01['extension']  <> "webp" and $validacao_rg01['extension'] <> "tiff" and $validacao_rg01['extension']  <> "bmp" and
            $validacao_rg01['extension']  <> "heif" and $validacao_rg01['extension']  <> "svg" and $validacao_rg01['extension']  <> "pdf" and
            $validacao_rg01['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_rg02 = pathinfo($documento->rg02);
        if (
            $validacao_rg02['extension'] <> "jpeg" and $validacao_rg02['extension'] <> "jpg" and $validacao_rg02['extension'] <> "png" and
            $validacao_rg02['extension']  <> "webp" and $validacao_rg02['extension'] <> "tiff" and $validacao_rg02['extension']  <> "bmp" and
            $validacao_rg02['extension']  <> "heif" and $validacao_rg02['extension']  <> "svg" and $validacao_rg02['extension']  <> "pdf" and
            $validacao_rg02['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_rg03 = pathinfo($documento->rg03);
        if (
            $validacao_rg03['extension'] <> "jpeg" and $validacao_rg03['extension'] <> "jpg" and $validacao_rg03['extension'] <> "png" and
            $validacao_rg03['extension']  <> "webp" and $validacao_rg03['extension'] <> "tiff" and $validacao_rg03['extension']  <> "bmp" and
            $validacao_rg03['extension']  <> "heif" and $validacao_rg03['extension']  <> "svg" and $validacao_rg03['extension']  <> "pdf" and
            $validacao_rg03['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_cpf01 = pathinfo($documento->cpf01);
        if (
            $validacao_cpf01['extension'] <> "jpeg" and $validacao_cpf01['extension'] <> "jpg" and $validacao_cpf01['extension'] <> "png" and
            $validacao_cpf01['extension']  <> "webp" and $validacao_cpf01['extension'] <> "tiff" and $validacao_cpf01['extension']  <> "bmp" and
            $validacao_cpf01['extension']  <> "heif" and $validacao_cpf01['extension']  <> "svg" and $validacao_cpf01['extension']  <> "pdf" and
            $validacao_cpf01['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_cpf02 = pathinfo($documento->cpf02);
        if (
            $validacao_cpf02['extension'] <> "jpeg" and $validacao_cpf02['extension'] <> "jpg" and $validacao_cpf02['extension'] <> "png" and
            $validacao_cpf02['extension']  <> "webp" and $validacao_cpf02['extension'] <> "tiff" and $validacao_cpf02['extension']  <> "bmp" and
            $validacao_cpf02['extension']  <> "heif" and $validacao_cpf02['extension']  <> "svg" and $validacao_cpf02['extension']  <> "pdf" and
            $validacao_cpf02['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_cpf03 = pathinfo($documento->cpf03);
        if (
            $validacao_cpf03['extension'] <> "jpeg" and $validacao_cpf03['extension'] <> "jpg" and $validacao_cpf03['extension'] <> "png" and
            $validacao_cpf03['extension']  <> "webp" and $validacao_cpf03['extension'] <> "tiff" and $validacao_cpf03['extension']  <> "bmp" and
            $validacao_cpf03['extension']  <> "heif" and $validacao_cpf03['extension']  <> "svg" and $validacao_cpf03['extension']  <> "pdf" and
            $validacao_cpf03['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_historico01 = pathinfo($documento->historico01);
        if (
            $validacao_historico01['extension'] <> "jpeg" and $validacao_historico01['extension'] <> "jpg" and $validacao_historico01['extension'] <> "png" and
            $validacao_historico01['extension']  <> "webp" and $validacao_historico01['extension'] <> "tiff" and $validacao_historico01['extension']  <> "bmp" and
            $validacao_historico01['extension']  <> "heif" and $validacao_historico01['extension']  <> "svg" and $validacao_historico01['extension']  <> "pdf" and
            $validacao_historico01['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_historico02 = pathinfo($documento->historico02);
        if (
            $validacao_historico02['extension'] <> "jpeg" and $validacao_historico02['extension'] <> "jpg" and $validacao_historico02['extension'] <> "png" and
            $validacao_historico02['extension']  <> "webp" and $validacao_historico02['extension'] <> "tiff" and $validacao_historico02['extension']  <> "bmp" and
            $validacao_historico02['extension']  <> "heif" and $validacao_historico02['extension']  <> "svg" and $validacao_historico02['extension']  <> "pdf" and
            $validacao_historico02['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_historico03 = pathinfo($documento->historico03);
        if (
            $validacao_historico03['extension'] <> "jpeg" and $validacao_historico03['extension'] <> "jpg" and $validacao_historico03['extension'] <> "png" and
            $validacao_historico03['extension']  <> "webp" and $validacao_historico03['extension'] <> "tiff" and $validacao_historico03['extension']  <> "bmp" and
            $validacao_historico03['extension']  <> "heif" and $validacao_historico03['extension']  <> "svg" and $validacao_historico03['extension']  <> "pdf" and
            $validacao_historico03['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_certificado01 = pathinfo($documento->certificado01);
        if (
            $validacao_certificado01['extension'] <> "jpeg" and $validacao_certificado01['extension'] <> "jpg" and $validacao_certificado01['extension'] <> "png" and
            $validacao_certificado01['extension']  <> "webp" and $validacao_certificado01['extension'] <> "tiff" and $validacao_certificado01['extension']  <> "bmp" and
            $validacao_certificado01['extension']  <> "heif" and $validacao_certificado01['extension']  <> "svg" and $validacao_certificado01['extension']  <> "pdf" and
            $validacao_certificado01['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_certificado02 = pathinfo($documento->certificado02);
        if (
            $validacao_certificado02['extension'] <> "jpeg" and $validacao_certificado02['extension'] <> "jpg" and $validacao_certificado02['extension'] <> "png" and
            $validacao_certificado02['extension']  <> "webp" and $validacao_certificado02['extension'] <> "tiff" and $validacao_certificado02['extension']  <> "bmp" and
            $validacao_certificado02['extension']  <> "heif" and $validacao_certificado02['extension']  <> "svg" and $validacao_certificado02['extension']  <> "pdf" and
            $validacao_certificado02['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_certificado03 = pathinfo($documento->certificado03);
        if (
            $validacao_certificado03['extension'] <> "jpeg" and $validacao_certificado03['extension'] <> "jpg" and $validacao_certificado03['extension'] <> "png" and
            $validacao_certificado03['extension']  <> "webp" and $validacao_certificado03['extension'] <> "tiff" and $validacao_certificado03['extension']  <> "bmp" and
            $validacao_certificado03['extension']  <> "heif" and $validacao_certificado03['extension']  <> "svg" and $validacao_certificado03['extension']  <> "pdf" and
            $validacao_certificado03['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_reservista01 = pathinfo($documento->reservista01);
        if (
            $validacao_reservista01['extension'] <> "jpeg" and $validacao_reservista01['extension'] <> "jpg" and $validacao_reservista01['extension'] <> "png" and
            $validacao_reservista01['extension']  <> "webp" and $validacao_reservista01['extension'] <> "tiff" and $validacao_reservista01['extension']  <> "bmp" and
            $validacao_reservista01['extension']  <> "heif" and $validacao_reservista01['extension']  <> "svg" and $validacao_reservista01['extension']  <> "pdf" and
            $validacao_reservista01['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_reservista02 = pathinfo($documento->reservista02);
        if (
            $validacao_reservista02['extension'] <> "jpeg" and $validacao_reservista02['extension'] <> "jpg" and $validacao_reservista02['extension'] <> "png" and
            $validacao_reservista02['extension']  <> "webp" and $validacao_reservista02['extension'] <> "tiff" and $validacao_reservista02['extension']  <> "bmp" and
            $validacao_reservista02['extension']  <> "heif" and $validacao_reservista02['extension']  <> "svg" and $validacao_reservista02['extension']  <> "pdf" and
            $validacao_reservista02['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_reservista03 = pathinfo($documento->reservista03);
        if (
            $validacao_reservista03['extension'] <> "jpeg" and $validacao_reservista03['extension'] <> "jpg" and $validacao_reservista03['extension'] <> "png" and
            $validacao_reservista03['extension']  <> "webp" and $validacao_reservista03['extension'] <> "tiff" and $validacao_reservista03['extension']  <> "bmp" and
            $validacao_reservista03['extension']  <> "heif" and $validacao_reservista03['extension']  <> "svg" and $validacao_reservista03['extension']  <> "pdf" and
            $validacao_reservista03['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_foto01 = pathinfo($documento->foto01);
        if (
            $validacao_foto01['extension'] <> "jpeg" and $validacao_foto01['extension'] <> "jpg" and $validacao_foto01['extension'] <> "png" and
            $validacao_foto01['extension']  <> "webp" and $validacao_foto01['extension'] <> "tiff" and $validacao_foto01['extension']  <> "bmp" and
            $validacao_foto01['extension']  <> "heif" and $validacao_foto01['extension']  <> "svg" and $validacao_foto01['extension']  <> "pdf" and
            $validacao_foto01['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_foto02 = pathinfo($documento->foto02);
        if (
            $validacao_foto02['extension'] <> "jpeg" and $validacao_foto02['extension'] <> "jpg" and $validacao_foto02['extension'] <> "png" and
            $validacao_foto02['extension']  <> "webp" and $validacao_foto02['extension'] <> "tiff" and $validacao_foto02['extension']  <> "bmp" and
            $validacao_foto02['extension']  <> "heif" and $validacao_foto02['extension']  <> "svg" and $validacao_foto02['extension']  <> "pdf" and
            $validacao_foto02['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_foto03 = pathinfo($documento->foto03);
        if (
            $validacao_foto03['extension'] <> "jpeg" and $validacao_foto03['extension'] <> "jpg" and $validacao_foto03['extension'] <> "png" and
            $validacao_foto03['extension']  <> "webp" and $validacao_foto03['extension'] <> "tiff" and $validacao_foto03['extension']  <> "bmp" and
            $validacao_foto03['extension']  <> "heif" and $validacao_foto03['extension']  <> "svg" and $validacao_foto03['extension']  <> "pdf" and
            $validacao_foto03['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_eleitor01 = pathinfo($documento->eleitor01);
        if (
            $validacao_eleitor01['extension'] <> "jpeg" and $validacao_eleitor01['extension'] <> "jpg" and $validacao_eleitor01['extension'] <> "png" and
            $validacao_eleitor01['extension']  <> "webp" and $validacao_eleitor01['extension'] <> "tiff" and $validacao_eleitor01['extension']  <> "bmp" and
            $validacao_eleitor01['extension']  <> "heif" and $validacao_eleitor01['extension']  <> "svg" and $validacao_eleitor01['extension']  <> "pdf" and
            $validacao_eleitor01['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_eleitor02 = pathinfo($documento->eleitor02);
        if (
            $validacao_eleitor02['extension'] <> "jpeg" and $validacao_eleitor02['extension'] <> "jpg" and $validacao_eleitor02['extension'] <> "png" and
            $validacao_eleitor02['extension']  <> "webp" and $validacao_eleitor02['extension'] <> "tiff" and $validacao_eleitor02['extension']  <> "bmp" and
            $validacao_eleitor02['extension']  <> "heif" and $validacao_eleitor02['extension']  <> "svg" and $validacao_eleitor02['extension']  <> "pdf" and
            $validacao_eleitor02['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_eleitor03 = pathinfo($documento->eleitor03);
        if (
            $validacao_eleitor03['extension'] <> "jpeg" and $validacao_eleitor03['extension'] <> "jpg" and $validacao_eleitor03['extension'] <> "png" and
            $validacao_eleitor03['extension']  <> "webp" and $validacao_eleitor03['extension'] <> "tiff" and $validacao_eleitor03['extension']  <> "bmp" and
            $validacao_eleitor03['extension']  <> "heif" and $validacao_eleitor03['extension']  <> "svg" and $validacao_eleitor03['extension']  <> "pdf" and
            $validacao_eleitor03['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_certidao01 = pathinfo($documento->certidao01);
        if (
            $validacao_certidao01['extension'] <> "jpeg" and $validacao_certidao01['extension'] <> "jpg" and $validacao_certidao01['extension'] <> "png" and
            $validacao_certidao01['extension']  <> "webp" and $validacao_certidao01['extension'] <> "tiff" and $validacao_certidao01['extension']  <> "bmp" and
            $validacao_certidao01['extension']  <> "heif" and $validacao_certidao01['extension']  <> "svg" and $validacao_certidao01['extension']  <> "pdf" and
            $validacao_certidao01['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_certidao02 = pathinfo($documento->certidao02);
        if (
            $validacao_certidao02['extension'] <> "jpeg" and $validacao_certidao02['extension'] <> "jpg" and $validacao_certidao02['extension'] <> "png" and
            $validacao_certidao02['extension']  <> "webp" and $validacao_certidao02['extension'] <> "tiff" and $validacao_certidao02['extension']  <> "bmp" and
            $validacao_certidao02['extension']  <> "heif" and $validacao_certidao02['extension']  <> "svg" and $validacao_certidao02['extension']  <> "pdf" and
            $validacao_certidao02['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        }
        $validacao_certidao03 = pathinfo($documento->certidao03);
        if (
            $validacao_certidao03['extension'] <> "jpeg" and $validacao_certidao03['extension'] <> "jpg" and $validacao_certidao03['extension'] <> "png" and
            $validacao_certidao03['extension']  <> "webp" and $validacao_certidao03['extension'] <> "tiff" and $validacao_certidao03['extension']  <> "bmp" and
            $validacao_certidao03['extension']  <> "heif" and $validacao_certidao03['extension']  <> "svg" and $validacao_certidao03['extension']  <> "pdf" and
            $validacao_certidao03['extension']  <> ""
        ) {
            $this->redirect(URL_BASE . "mensagem/mensagem03");
        } else {

            $dao = new GenericoDao();
            $protocolo = rand(1111, 99999999);

            //salvando na tabela documento
            $id_documento = $dao->salvarDocumento($documento->id_aluno, $documento->id_curso, $protocolo);

            //salvando na tabela documento rg e salvando a image
            if ($documento->rg01 || $documento->rg02 || $documento->rg03) {
                //pegando as informaçoes dos documentos
                $rg = pathinfo($documento->rg01);

                $id_documento = $id_documento;
                $rg01_basename = $rg["basename"];
                $rg01_extension = $rg["extension"];
                $rg01_filename = $rg["filename"];

                $rg = pathinfo($documento->rg02);
                $rg02_basename = $rg["basename"];
                $rg02_extension = $rg["extension"];
                $rg02_filename = $rg["filename"];

                $rg = pathinfo($documento->rg03);
                $rg03_basename = $rg["basename"];
                $rg03_extension = $rg["extension"];
                $rg03_filename = $rg["filename"];

                $documento_rg = new stdClass();
                $documento_rg->id_documento = $id_documento;
                $documento_rg->rg01_basename = $rg01_basename;
                $documento_rg->rg01_extension = $rg01_extension;
                $documento_rg->rg01_filename =  $rg01_filename;

                $documento_rg->rg02_basename = $rg02_basename;
                $documento_rg->rg02_extension = $rg02_extension;
                $documento_rg->rg02_filename =  $rg02_filename;

                $documento_rg->rg03_basename = $rg03_basename;
                $documento_rg->rg03_extension = $rg03_extension;
                $documento_rg->rg03_filename =  $rg03_filename;

                //salvando as informaçõe sobre o RG no banco de dados documento_rg
                $id_rg = RgService::salvar($documento_rg, "id", "documento_rg");

                $matricula = Service::get("aluno", "id_aluno", $documento->id_aluno);

                //salvando a imagem
                $_UP["pasta"] = "documentos/matricula/" . $matricula->matricula . '/';
                move_uploaded_file($_FILES["rg01"]["tmp_name"], $_UP["pasta"] . $documento_rg->rg01_basename);
                move_uploaded_file($_FILES["rg02"]["tmp_name"], $_UP["pasta"] . $documento_rg->rg02_basename);
                move_uploaded_file($_FILES["rg03"]["tmp_name"], $_UP["pasta"] . $documento_rg->rg03_basename);
            }
            if ($documento->cpf01 || $documento->cpf02 || $documento->cpf03) {
                //pegando as informaçoes dos documentos
                $cpf = pathinfo($documento->cpf01);

                $id_documento = $id_documento;
                $cpf01_basename = $cpf["basename"];
                $cpf01_extension = $cpf["extension"];
                $cpf01_filename = $cpf["filename"];

                $cpf = pathinfo($documento->cpf02);
                $cpf02_basename = $cpf["basename"];
                $cpf02_extension = $cpf["extension"];
                $cpf02_filename = $cpf["filename"];

                $cpf = pathinfo($documento->cpf03);
                $cpf03_basename = $cpf["basename"];
                $cpf03_extension = $cpf["extension"];
                $cpf03_filename = $cpf["filename"];

                $documento_cpf = new stdClass();
                $documento_cpf->id_documento = $id_documento;
                $documento_cpf->cpf01_basename = $cpf01_basename;
                $documento_cpf->cpf01_extension = $cpf01_extension;
                $documento_cpf->cpf01_filename =  $cpf01_filename;

                $documento_cpf->cpf02_basename = $cpf02_basename;
                $documento_cpf->cpf02_extension = $cpf02_extension;
                $documento_cpf->cpf02_filename =  $cpf02_filename;

                $documento_cpf->cpf03_basename = $cpf03_basename;
                $documento_cpf->cpf03_extension = $cpf03_extension;
                $documento_cpf->cpf03_filename =  $cpf03_filename;

                //salvando as informaçõe sobre o RG no banco de dados documento_cpf
                $id_cpf = CpfService::salvar($documento_cpf, "id", "documento_cpf");
                $matricula = Service::get("aluno", "id_aluno", $documento->id_aluno);

                //salvando a imagem
                $_UP["pasta"] = "documentos/matricula/" . $matricula->matricula . '/';
                move_uploaded_file($_FILES["cpf01"]["tmp_name"], $_UP["pasta"] . $documento_cpf->cpf01_basename);
                move_uploaded_file($_FILES["cpf02"]["tmp_name"], $_UP["pasta"] . $documento_cpf->cpf02_basename);
                move_uploaded_file($_FILES["cpf03"]["tmp_name"], $_UP["pasta"] . $documento_cpf->cpf03_basename);
            }
            if ($documento->historico01 || $documento->historico02 || $documento->historico03) {
                //pegando as informaçoes dos documentos
                $historico = pathinfo($documento->historico01);

                $id_documento = $id_documento;
                $historico_escolar01_basename = $historico["basename"];
                $historico_escolar01_extension = $historico["extension"];
                $historico_escolar01_filename = $historico["filename"];

                $historico = pathinfo($documento->historico02);
                $historico_escolar02_basename = $historico["basename"];
                $historico_escolar02_extension = $historico["extension"];
                $historico_escolar02_filename = $historico["filename"];

                $historico = pathinfo($documento->historico03);
                $historico_escolar03_basename = $historico["basename"];
                $historico_escolar03_extension = $historico["extension"];
                $historico_escolar03_filename = $historico["filename"];

                $documento_historico = new stdClass();
                $documento_historico->id_documento = $id_documento;
                $documento_historico->historico_escolar01_basename = $historico_escolar01_basename;
                $documento_historico->historico_escolar01_extension = $historico_escolar01_extension;
                $documento_historico->historico_escolar01_filename =  $historico_escolar01_filename;

                $documento_historico->historico_escolar02_basename = $historico_escolar02_basename;
                $documento_historico->historico_escolar02_extension = $historico_escolar02_extension;
                $documento_historico->historico_escolar02_filename =  $historico_escolar02_filename;

                $documento_historico->historico_escolar03_basename = $historico_escolar03_basename;
                $documento_historico->historico_escolar03_extension = $historico_escolar03_extension;
                $documento_historico->historico_escolar03_filename =  $historico_escolar03_filename;

                //salvando as informaçõe sobre o RG no banco de dados documento_historico_escolar
                $id_historico = HistoricoService::salvar($documento_historico, "id", "documento_historico_escolar");
                $matricula = Service::get("aluno", "id_aluno", $documento->id_aluno);

                //salvando a imagem
                $_UP["pasta"] = "documentos/matricula/" . $matricula->matricula . '/';
                move_uploaded_file($_FILES["historico01"]["tmp_name"], $_UP["pasta"] . $documento_historico->historico_escolar01_basename);
                move_uploaded_file($_FILES["historico02"]["tmp_name"], $_UP["pasta"] . $documento_historico->historico_escolar02_basename);
                move_uploaded_file($_FILES["historico03"]["tmp_name"], $_UP["pasta"] . $documento_historico->historico_escolar03_basename);
            }
            if ($documento->certificado01 || $documento->certificado02 || $documento->certificado03) {
                //pegando as informaçoes dos documentos
                $certificado = pathinfo($documento->certificado01);

                $id_documento = $id_documento;
                $certificado01_basename = $certificado["basename"];
                $certificado01_extension = $certificado["extension"];
                $certificado01_filename = $certificado["filename"];

                $certificado = pathinfo($documento->certificado02);
                $certificado02_basename = $certificado["basename"];
                $certificado02_extension = $certificado["extension"];
                $certificado02_filename = $certificado["filename"];

                $certificado = pathinfo($documento->certificado03);
                $certificado03_basename = $certificado["basename"];
                $certificado03_extension = $certificado["extension"];
                $certificado03_filename = $certificado["filename"];

                $documento_certificado = new stdClass();
                $documento_certificado->id_documento = $id_documento;
                $documento_certificado->certificado_ensino_medio01_basename = $certificado01_basename;
                $documento_certificado->certificado_ensino_medio01_extension = $certificado01_extension;
                $documento_certificado->certificado_ensino_medio01_filename =  $certificado01_filename;

                $documento_certificado->certificado_ensino_medio02_basename = $certificado02_basename;
                $documento_certificado->certificado_ensino_medio02_extension = $certificado02_extension;
                $documento_certificado->certificado_ensino_medio02_filename =  $certificado02_filename;

                $documento_certificado->certificado_ensino_medio03_basename = $certificado03_basename;
                $documento_certificado->certificado_ensino_medio03_extension = $certificado03_extension;
                $documento_certificado->certificado_ensino_medio03_filename =  $certificado03_filename;

                //salvando as informaçõe sobre o RG no banco de dados documento_certificado_ensino_medio
                $id_certificado = CertificadoService::salvar($documento_certificado, "id", "documento_certificado_ensino_medio");
                $matricula = Service::get("aluno", "id_aluno", $documento->id_aluno);

                //salvando a imagem
                $_UP["pasta"] = "documentos/matricula/" . $matricula->matricula . '/';
                move_uploaded_file($_FILES["certificado01"]["tmp_name"], $_UP["pasta"] . $documento_certificado->certificado_ensino_medio01_basename);
                move_uploaded_file($_FILES["certificado02"]["tmp_name"], $_UP["pasta"] . $documento_certificado->certificado_ensino_medio02_basename);
                move_uploaded_file($_FILES["certificado03"]["tmp_name"], $_UP["pasta"] . $documento_certificado->certificado_ensino_medio03_basename);
            }
            if ($documento->reservista01 || $documento->reservista02 || $documento->reservista03) {
                //pegando as informaçoes dos documentos
                $revervista = pathinfo($documento->reservista01);

                $id_documento = $id_documento;
                $reservista01_basename = $revervista["basename"];
                $reservista01_extension = $revervista["extension"];
                $reservista01_filename = $revervista["filename"];

                $revervista = pathinfo($documento->revervista02);
                $revervista02_basename = $revervista["basename"];
                $revervista02_extension = $revervista["extension"];
                $revervista02_filename = $revervista["filename"];

                $revervista = pathinfo($documento->revervista03);
                $revervista03_basename = $revervista["basename"];
                $revervista03_extension = $revervista["extension"];
                $revervista03_filename = $revervista["filename"];

                $documento_revervista = new stdClass();
                $documento_revervista->id_documento = $id_documento;
                $documento_revervista->reservista01_basename = $reservista01_basename;
                $documento_revervista->reservista01_extension = $reservista01_extension;
                $documento_revervista->reservista01_filename =  $reservista01_filename;

                $documento_revervista->reservista02_basename = $revervista02_basename;
                $documento_revervista->reservista02_extension = $revervista02_extension;
                $documento_revervista->reservista02_filename =  $revervista02_filename;

                $documento_revervista->reservista03_basename = $revervista03_basename;
                $documento_revervista->reservista03_extension = $revervista03_extension;
                $documento_revervista->reservista03_filename =  $revervista03_filename;

                //salvando as informaçõe sobre o RG no banco de dados documento_reservista
                $id_revervista = ReservistaService::salvar($documento_revervista, "id", "documento_reservista");
                $matricula = Service::get("aluno", "id_aluno", $documento->id_aluno);

                //salvando a imagem
                $_UP["pasta"] = "documentos/matricula/" . $matricula->matricula . '/';
                move_uploaded_file($_FILES["reservista01"]["tmp_name"], $_UP["pasta"] . $documento_revervista->reservista01_basename);
                move_uploaded_file($_FILES["reservista02"]["tmp_name"], $_UP["pasta"] . $documento_revervista->reservista02_basename);
                move_uploaded_file($_FILES["reservista03"]["tmp_name"], $_UP["pasta"] . $documento_revervista->reservista03_basename);
            }
            //salvando na tabela documento foto e salvando a image
            if ($documento->foto01 || $documento->foto02 || $documento->foto03) {
                //pegando as informaçoes dos documentos
                $foto = pathinfo($documento->foto01);

                $id_documento = $id_documento;
                $foto01_basename = $foto["basename"];
                $foto01_extension = $foto["extension"];
                $foto01_filename = $foto["filename"];

                $foto = pathinfo($documento->foto02);
                $foto02_basename = $foto["basename"];
                $foto02_extension = $foto["extension"];
                $foto02_filename = $foto["filename"];

                $foto = pathinfo($documento->foto03);
                $foto03_basename = $foto["basename"];
                $foto03_extension = $foto["extension"];
                $foto03_filename = $foto["filename"];

                $documento_foto = new stdClass();
                $documento_foto->id_documento = $id_documento;
                $documento_foto->foto_aluno01_basename = $foto01_basename;
                $documento_foto->foto_aluno01_extension = $foto01_extension;
                $documento_foto->foto_aluno01_filename =  $foto01_filename;

                $documento_foto->foto_aluno02_basename = $foto02_basename;
                $documento_foto->foto_aluno02_extension = $foto02_extension;
                $documento_foto->foto_aluno02_filename =  $foto02_filename;

                $documento_foto->foto_aluno03_basename = $foto03_basename;
                $documento_foto->foto_aluno03_extension = $foto03_extension;
                $documento_foto->foto_aluno03_filename =  $foto03_filename;

                //salvando as informaçõe sobre o foto no banco de dados documento_foto_aluno
                $id_foto = AlunofotoService::salvar($documento_foto, "id", "documento_foto_aluno");

                $matricula = Service::get("aluno", "id_aluno", $documento->id_aluno);

                //salvando a imagem
                $_UP["pasta"] = "documentos/matricula/" . $matricula->matricula . '/';
                move_uploaded_file($_FILES["foto01"]["tmp_name"], $_UP["pasta"] . $documento_foto->foto_aluno01_basename);
                move_uploaded_file($_FILES["foto02"]["tmp_name"], $_UP["pasta"] . $documento_foto->foto_aluno02_basename);
                move_uploaded_file($_FILES["foto03"]["tmp_name"], $_UP["pasta"] . $documento_foto->foto_aluno03_basename);
            }
            //salvando na tabela documento eleitor e salvando a image
            if ($documento->eleitor01 || $documento->eleitor02 || $documento->eleitor03) {
                //pegando as informaçoes dos documentos
                $eleitor = pathinfo($documento->eleitor01);

                $id_documento = $id_documento;
                $eleitor01_basename = $eleitor["basename"];
                $eleitor01_extension = $eleitor["extension"];
                $eleitor01_filename = $eleitor["filename"];

                $eleitor = pathinfo($documento->eleitor02);
                $eleitor02_basename = $eleitor["basename"];
                $eleitor02_extension = $eleitor["extension"];
                $eleitor02_filename = $eleitor["filename"];

                $eleitor = pathinfo($documento->eleitor03);
                $eleitor03_basename = $eleitor["basename"];
                $eleitor03_extension = $eleitor["extension"];
                $eleitor03_filename = $eleitor["filename"];

                $documento_eleitor = new stdClass();
                $documento_eleitor->id_documento = $id_documento;
                $documento_eleitor->titulo_eleitor01_basename = $eleitor01_basename;
                $documento_eleitor->titulo_eleitor01_extension = $eleitor01_extension;
                $documento_eleitor->titulo_eleitor01_filename =  $eleitor01_filename;

                $documento_eleitor->titulo_eleitor02_basename = $eleitor02_basename;
                $documento_eleitor->titulo_eleitor02_extension = $eleitor02_extension;
                $documento_eleitor->titulo_eleitor02_filename =  $eleitor02_filename;

                $documento_eleitor->titulo_eleitor03_basename = $eleitor03_basename;
                $documento_eleitor->titulo_eleitor03_extension = $eleitor03_extension;
                $documento_eleitor->titulo_eleitor03_filename =  $eleitor03_filename;

                //salvando as informaçõe sobre o eleitor no banco de dados documento_eleitor
                $id_eleitor = EleitorService::salvar($documento_eleitor, "id", "documento_titulo_eleitor");

                $matricula = Service::get("aluno", "id_aluno", $documento->id_aluno);

                //salvando a imagem
                $_UP["pasta"] = "documentos/matricula/" . $matricula->matricula . '/';
                move_uploaded_file($_FILES["eleitor01"]["tmp_name"], $_UP["pasta"] . $documento_eleitor->titulo_eleitor01_basename);
                move_uploaded_file($_FILES["eleitor02"]["tmp_name"], $_UP["pasta"] . $documento_eleitor->titulo_eleitor02_basename);
                move_uploaded_file($_FILES["eleitor03"]["tmp_name"], $_UP["pasta"] . $documento_eleitor->titulo_eleitor03_basename);
            }
            //salvando na tabela documento certidao e salvando a image
            if ($documento->certidao01 || $documento->certidao02 || $documento->certidao03) {
                //pegando as informaçoes dos documentos
                $certidao = pathinfo($documento->certidao01);

                $id_documento = $id_documento;
                $certidao01_basename = $certidao["basename"];
                $certidao01_extension = $certidao["extension"];
                $certidao01_filename = $certidao["filename"];

                $certidao = pathinfo($documento->certidao02);
                $certidao02_basename = $certidao["basename"];
                $certidao02_extension = $certidao["extension"];
                $certidao02_filename = $certidao["filename"];

                $certidao = pathinfo($documento->certidao03);
                $certidao03_basename = $certidao["basename"];
                $certidao03_extension = $certidao["extension"];
                $certidao03_filename = $certidao["filename"];

                $documento_certidao = new stdClass();
                $documento_certidao->id_documento = $id_documento;
                $documento_certidao->certificado_casamento_nascimento01_basename = $certidao01_basename;
                $documento_certidao->certificado_casamento_nascimento01_extension = $certidao01_extension;
                $documento_certidao->certificado_casamento_nascimento01_filename =  $certidao01_filename;

                $documento_certidao->certificado_casamento_nascimento02_basename = $certidao02_basename;
                $documento_certidao->certificado_casamento_nascimento02_extension = $certidao02_extension;
                $documento_certidao->certificado_casamento_nascimento02_filename =  $certidao02_filename;

                $documento_certidao->certificado_casamento_nascimento03_basename = $certidao03_basename;
                $documento_certidao->certificado_casamento_nascimento03_extension = $certidao03_extension;
                $documento_certidao->certificado_casamento_nascimento03_filename =  $certidao03_filename;

                //salvando as informaçõe sobre o certidao no banco de dados documento_certidao ,,,,,
                $id_certidao = CertidaoService::salvar($documento_certidao, "id", "documento_certificado_casamento_nascimento");

                $matricula = Service::get("aluno", "id_aluno", $documento->id_aluno);

                //salvando a imagem teste;..
                $_UP["pasta"] = "documentos/matricula/" . $matricula->matricula . '/';
                move_uploaded_file($_FILES["certidao01"]["tmp_name"], $_UP["pasta"] . $documento_certidao->certificado_casamento_nascimento01_basename);
                move_uploaded_file($_FILES["certidao02"]["tmp_name"], $_UP["pasta"] . $documento_certidao->certificado_casamento_nascimento02_basename);
                move_uploaded_file($_FILES["certidao03"]["tmp_name"], $_UP["pasta"] . $documento_certidao->certificado_casamento_nascimento03_basename);
            }
        }
        $dados["documento"] = $id_documento;
        $dados["view"] = "mensagem/mensagem04";
        $this->load("template", $dados);
    }
    public function lista()
    {
        $dao = new GenericoDao();
        $dados["lista"] = $dao->getDocumentoAluno2();
        $dados["view"] = "documento/lista";
        $this->load("template", $dados);
    }
}
