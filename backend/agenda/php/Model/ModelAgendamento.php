<?php

class modelAgendamento {

    private $id;
    private $idAluno;
    private $nomeAluno;
    private $setor;
    private $horario;
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

    function getHorario() {
        return $this->horario;
    }

    function getDataAgendamento() {
        return $this->dataAgendamento;
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

    function setHorario($horario) {
        $this->horario = $horario;
    }

    function setDataAgendamento($dataAgendamento) {
        $this->dataAgendamento = $dataAgendamento;
    }



}

?>