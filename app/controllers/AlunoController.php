<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\dao\GenericoDao;
use app\models\service\AlunoService;
use app\models\service\Service;
use DirectoryIterator;

class AlunoController extends Controller
{

    private $campo = "id_aluno";
    private $tabela = "aluno";

    public function index()
    {
        $dados["lista_aluno"] = Service::lista($this->tabela);
        $dados["view"] = "aluno/index";
        $this->load("template", $dados);
    }
    public function novo()
    {
        $dados["curso"] = Service::lista("curso");
        $dados["aluno"] = Flash::getForm();
        $dados["view"] = "aluno/novo";
        $this->load("template", $dados);
    }

    public function salvar()
    {
        $aluno = new \stdClass();
        $aluno->id_aluno = $_POST["id_aluno"];
        $aluno->nome = strtoupper($_POST["nome_aluno"]);
        $aluno->email = $_POST["email_aluno"];
        $aluno->endereco = strtoupper($_POST["endereco_aluno"]);
        $aluno->matricula = strtoupper($_POST["matricula_aluno"]);
        $aluno->bairro = strtoupper($_POST["bairro_aluno"]);
        $aluno->cidade = strtoupper($_POST["cidade_aluno"]);
        $aluno->telefone = $_POST["telefone_aluno"];
        $aluno->id_curso = $_POST["curso"];
        $aluno->data_cadastro = date('Y-m-d');


        // verefica se tem uma matricula igual ja cadastrada
        $dao = new GenericoDao();

        $matricula_cadastrada =  $dao->countMatricula($aluno->matricula);

        if ($aluno->id_aluno) {
            $matricula_aluno_banco = $dao->matricula_aluno($aluno->id_aluno);
            if ($aluno->matricula <> $matricula_aluno_banco->MATRICULA_ALUNO) {
                if ($matricula_cadastrada->qtde_matricula >= 1) {
                    $this->redirect(URL_BASE . "mensagem/mensagem02");
                }
            } else {
                Flash::setForm($aluno);
                if (AlunoService::salvar($aluno, $this->campo, $this->tabela)) {
                    $this->redirect(URL_BASE . "aluno");
                } else {
                    if (!$aluno->id_aluno) {
                        $this->redirect(URL_BASE . "aluno/novo");
                    } else {
                        $this->redirect(URL_BASE . "aluno/editar");
                    }
                }
            }
        } else {
            if (!$aluno->id_aluno == "" || $matricula_cadastrada->qtde_matricula >= 1) {
                $this->redirect(URL_BASE . "mensagem/mensagem02");
            } else {
                Flash::setForm($aluno);
                if (AlunoService::salvar($aluno, $this->campo, $this->tabela)) {
                    mkdir("documentos/matricula/" . $aluno->matricula, 0777, true);
                    $this->redirect(URL_BASE . "aluno");
                } else {
                    if (!$aluno->id_aluno) {
                        $this->redirect(URL_BASE . "aluno/novo");
                    } else {
                        $this->redirect(URL_BASE . "aluno/editar");
                    }
                }
            }
        }
    }
    public function editar($id)
    {
        $aluno = Service::get($this->tabela, $this->campo, $id);
        if (!$aluno) {
            $this->redirect(URL_BASE . "aluno");
        }
        $dados["curso"] = Service::lista("curso");
        $dados["aluno"] = $aluno;
        $dados["view"] = "aluno/novo";
        $this->load("template", $dados);
    }
    public function excluir($id)
    {
        $dao = new GenericoDao();
        $matricula = $dao->matricula_aluno($id);

        $documento = Service::get("documento", "id_aluno", $id);


        if ($documento->id_documento) {
            Service::excluir("documento_certificado_casamento_nascimento", "id_documento", $documento->id_documento);
            Service::excluir("documento_certificado_ensino_medio", "id_documento", $documento->id_documento);
            Service::excluir("documento_cpf", "id_documento", $documento->id_documento);
            Service::excluir("documento_foto_aluno", "id_documento", $documento->id_documento);
            Service::excluir("documento_historico_escolar", "id_documento", $documento->id_documento);
            Service::excluir("documento_reservista", "id_documento", $documento->id_documento);
            Service::excluir("documento_rg", "id_documento", $documento->id_documento);
            Service::excluir("documento_titulo_eleitor", "id_documento", $documento->id_documento);
            Service::excluir("documento", "id_documento", $documento->id_documento);

            //deletando os arquivos da pasta
            foreach (new DirectoryIterator('documentos/matricula/' . $matricula->MATRICULA_ALUNO) as $fileInfo) {
                if (!$fileInfo->isDot()) {
                    unlink($fileInfo->getPathname());
                }
            }
            rmdir("documentos/matricula/" . $matricula->MATRICULA_ALUNO . "/");
        }
        Service::excluir($this->tabela, $this->campo, $id);
        $this->redirect(URL_BASE . "aluno");
    }
}
