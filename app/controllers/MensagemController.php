<?php

namespace app\controllers;

use app\core\Controller;

class MensagemController extends Controller
{
     public function mensagem01()
     {
          $dados["view"] = "mensagem/mensagem01";
          $this->load("template", $dados);
     }
     public function mensagem02()
     {
          $dados["view"] = "mensagem/mensagem02";
          $this->load("template", $dados);
     }
     public function mensagem03()
     {
          $dados["view"] = "mensagem/mensagem03";
          $this->load("template", $dados);
     }
     public function mensagem04()
     {
          $dados["view"] = "mensagem/mensagem04";
          $this->load("template", $dados);
     }
}
