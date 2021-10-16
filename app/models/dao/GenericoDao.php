<?php

namespace app\models\dao;

use app\core\Model;

class GenericoDao extends Model
{


    public function countAluno($id_curso)
    {
        $sql = "select COUNT(a.id_curso) as id_curso
                    from aluno a
                    where a.id_curso = :id";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id", $id_curso);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
    public function countMatricula($matricula)
    {
        $sql = "select COUNT(a.matricula) as qtde_matricula
                        from aluno a
                        where a.matricula = :matricula";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":matricula", $matricula);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
    public function matricula_aluno($id_aluno)
    {
        $sql = "SELECT A.matricula AS MATRICULA_ALUNO
                    FROM aluno a
                WHERE A.id_aluno =  :id_aluno";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_aluno", $id_aluno);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
    public function getAlunoCurso($id_aluno)
    {
        $sql = "SELECT a.id_aluno, a.matricula, c.descricao, c.id_curso
                    FROM aluno a
                    join curso c on a.id_curso = c.id_curso
                    where a.id_aluno = :id_aluno";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_aluno", $id_aluno);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
    public function salvarDocumento($id_aluno, $id_curso, $protocolo)
    {
        $sql = "INSERT INTO DOCUMENTO(id_aluno, id_curso, protocolo) values(:id_aluno, :id_curso, :protocolo)";
        $qry = $this->db->prepare($sql);
        $qry->bindValue("id_aluno", $id_aluno);
        $qry->bindValue("id_curso", $id_curso);
        $qry->bindValue("protocolo", $protocolo);
        $qry->execute();
        return $this->db->lastInsertId();
    }
    public function getDocumentoAluno($id_documento)
    {
        $sql = "SELECT alu.nome as nome_aluno, 
                        alu.matricula,
                        cur.descricao as curso,
                        doc.protocolo
                FROM documento doc 
                join aluno alu on doc.id_aluno = alu.id_aluno
                join curso cur on doc.id_curso = cur.id_curso
                WHERE DOC.id_documento = :id_documento ";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_documento", $id_documento);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
    public function getDocumentoAluno2()
    {
        $sql = "SELECT alu.nome as nome_aluno, 
                        alu.matricula,
                        cur.descricao as curso,
                        doc.protocolo
                FROM documento doc 
                join aluno alu on doc.id_aluno = alu.id_aluno
                join curso cur on doc.id_curso = cur.id_curso";
        $qry = $this->db->prepare($sql);
        $qry->execute();
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }



    public function CobrancaInsert($ID, $MENSAGEM1, $MENSAGEM2, $MENSAGEM3, $MENSAGEM4, $MENSAGEM5)
    {
        $sql = "insert into FOX_SISTEMA_MENSAGEM (ID, MENSAGEM1, MENSAGEM2, MENSAGEM3, MENSAGEM4, MENSAGEM5)
        values (:ID, :MENSAGEM1, :MENSAGEM2, :MENSAGEM3, :MENSAGEM4, :MENSAGEM5, :TIPO_MENSAGEM)";

        $qry = $this->db->prepare($sql);

        $qry->bindValue(":ID", $ID);
        $qry->bindValue(":MENSAGEM1", "$MENSAGEM1");
        $qry->bindValue(":MENSAGEM2", "$MENSAGEM2");
        $qry->bindValue(":MENSAGEM3", "$MENSAGEM3");
        $qry->bindValue(":MENSAGEM4", "$MENSAGEM4");
        $qry->bindValue(":MENSAGEM5", "$MENSAGEM5");
        return $qry;
        exit;
        $qry->execute();
    }
    public function CobrancaMaxId()
    {
        $sql = "select max(id)
                from FOX_SISTEMA_MENSAGEM";
        $qry = $this->db->prepare($sql);
        $qry->execute();
        return $qry->fetch(\PDO::FETCH_OBJ);
    }
}
