<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\core\Validacao;
use app\models\dao\GenericoDao;
use app\models\service\AlunoService;
use app\models\service\CursoService;
use app\models\service\Service;

class CursoController extends Controller
{

    private $campo = "id_curso";
    private $tabela = "curso";

    public function index()
    {
        $dados["lista_curso"] = Service::lista($this->tabela);
        $dados["view"] = "curso/index";
        $this->load("template", $dados);
    }
    public function novo()
    {
        $dados["curso"] = Flash::getForm();
        $dados["view"] = "curso/novo";
        $this->load("template", $dados);
    }

    public function salvar()
    {
        $curso = new \stdClass();
        $curso->id_curso = $_POST["id_curso"];
        $curso->descricao = strtoupper($_POST["nome_curso"]);



        Flash::setForm($curso);
        if (CursoService::salvar($curso, $this->campo, $this->tabela)) {
            $this->redirect(URL_BASE . "curso");
        } else {

            if (!$curso->id_curso) {
                $this->redirect(URL_BASE . "curso/novo");
            } else {
                $this->redirect(URL_BASE . "curso/editar");
            }
        }
    }
    public function editar($id)
    {
        $curso = Service::get($this->tabela, $this->campo, $id);
        if (!$curso) {
            $this->redirect(URL_BASE . "curso");
        }
        $dados["curso"] = $curso;
        $dados["view"] = "curso/novo";
        $this->load("template", $dados);
    }
    public function excluir($id)
    {
        $dao = new GenericoDao();
        $curso = $dao->countAluno($id);
        if ($curso->id_curso >= 1) {
            $this->redirect(URL_BASE . "mensagem/mensagem01");
        } else {
            Service::excluir($this->tabela, $this->campo, $id);
            $this->redirect(URL_BASE . "curso");
        }
    }
}
