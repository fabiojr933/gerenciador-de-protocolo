<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Flash;
use app\models\service\Service;
use app\models\service\UsuarioService;

class UsuarioController extends Controller
{

    private $campo = "id_usuario";
    private $tabela = "usuario";

    public function index()
    {
        $dados["lista_usuario"] = Service::lista($this->tabela);
        $dados["view"] = "usuario/index";
        $this->load("template", $dados);
    }
    public function novo()
    {
        $dados["usuario"] = Flash::getForm();
        $dados["view"] = "usuario/novo";
        $this->load("template", $dados);
    }
    public function salvar()
    {
        $usuario = new \stdClass();
        $usuario->id_usuario = $_POST["id_usuario"];
        $usuario->nome = strtoupper($_POST["nome_usuario"]);
        $usuario->email = $_POST["email_usuario"];
        $usuario->senha = md5($_POST["senha_usuario"]);
        $usuario->data_cadastro = date('Y-m-d');

        Flash::setForm($usuario);
        if (UsuarioService::salvar($usuario, $this->campo, $this->tabela)) {
            $this->redirect(URL_BASE . "usuario");
        } else {

            if (!$usuario->id_usuario) {
                $this->redirect(URL_BASE . "usuario/novo");
            } else {
                $this->redirect(URL_BASE . "usuario/editar");
            }
        }
    }
    public function editar($id)
    {
        $usuario = Service::get($this->tabela, $this->campo, $id);
        if (!$usuario) {
            $this->redirect(URL_BASE . "usuario");
        }
        $dados["usuario"] = $usuario;
        $dados["view"] = "usuario/novo";
        $this->load("template", $dados);
    }
    public function excluir($id)
    {
        Service::excluir($this->tabela, $this->campo, $id);
        $this->redirect(URL_BASE . "usuario");
    }
}
