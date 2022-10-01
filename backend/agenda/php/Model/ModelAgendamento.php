<?php

class ModelAgendamento {

    private $id;
    private $idAluno;
    private $nomeAluno;
    private $setor;
    private $dataAgendamento;
  
    function getId() {
        return $this->id;
    }

    function getIdAluno() {
        return $this->idAluno;
    }

    function getNomeAluno() {
        return $this->nomeAluno;
    }

    function getSetor() {
        return $this->setor;
    }

    function getDataAgendamento() {
        return $this->dataAgendamento;
    }

    function getStatusAgendamento() {
        return $this->StatusAgendamento;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdAluno($idAluno) {
        $this->idAluno = $idAluno;
    }

    function setNomeAluno($nomeAluno) {
        $this->nomeAluno = $nomeAluno;
    }

    function setSetor($setor) {
        $this->setor = $setor;
    }

    function setDataAgendamento($dataAgendamento) {
        $this->dataAgendamento = $dataAgendamento;
    }

    function setStatusAgendamento($StatusAgendamento) {
        $this->StatusAgendamento = $StatusAgendamento;
    }




}

?>
