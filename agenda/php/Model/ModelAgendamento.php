<?php

class ModelAgendamento {

    private $id;
    private $hotelID;
    private $usuariosID;
    private $setoresID;
    private $periodoID;
    private $dataAgendamento;
    private $statusAgendamento;
  
    function getId() {
        return $this->id;
    }

    function getHotelID() {
        return $this->hotelID;
    }

    function getUsuariosID() {
        return $this->usuariosID;
    }

    function getSetoresID() {
        return $this->setoresID;
    }

    function getPeriodoID() {
        return $this->periodoID;
    }

    function getDataAgendamento() {
        return $this->dataAgendamento;
    }

    function getStatusAgendamento() {
        return $this->statusAgendamento;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setHotelID($hotelID) {
        $this->hotelID = $hotelID;
    }

    function setUsuariosID($usuariosID) {
        $this->usuariosID = $usuariosID;
    }

    function setSetoresID($setoresID) {
        $this->setoresID = $setoresID;
    }

    function setPeriodoID($periodoID) {
        $this->periodoID = $periodoID;
    }

    function setDataAgendamento($dataAgendamento) {
        $this->dataAgendamento = $dataAgendamento;
    }

    function setStatusAgendamento($statusAgendamento) {
        $this->statusAgendamento = $statusAgendamento;
    }

}

?>
