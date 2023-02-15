<?php

class Cliente {

    private $id;
    private $nome;
    private $endereco;
    private $CPF;
    private $identidade;
    private $telefone;
    private $email;
    private $sexo;
    private $experiencia1;
    private $experiencia2;
    private $experiencia3;
    private $instituicao;
    private $cargo;
    private $periodo;
    private $formacaoAcademica;
    private $competencias;
    private $idioma1;
    private $idioma2;
    private $curso;

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getCPF() {
        return $this->CPF;
    }

    function getIdentidade() {
        return $this->identidade;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getExperiencia1() {
        return $this->experiencia1;
    }

    function getExperiencia2() {
        return $this->experiencia2;
    }

    function getExperiencia3() {
        return $this->experiencia3;
    }

    function getInstituicao() {
        return $this->instituicao;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getPeriodo() {
        return $this->periodo;
    }

    function getFormacaoAcademica() {
        return $this->formacaoAcademica;
    }

    function getCompetencias() {
        return $this->competencias;
    }

    function getIdioma1() {
        return $this->idioma1;
    }

    function getIdioma2() {
        return $this->idioma2;
    }

    function getCurso() {
        return $this->curso;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setCPF($CPF) {
        $this->CPF = $CPF;
    }

    function setIdentidade($identidade) {
        $this->identidade = $identidade;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setExperiencia1($experiencia1) {
        $this->experiencia1 = $experiencia1;
    }

    function setExperiencia2($experiencia2) {
        $this->experiencia2 = $experiencia2;
    }

    function setExperiencia3($experiencia3) {
        $this->experiencia3 = $experiencia3;
    }

    function setInstituicao($instituicao) {
        $this->instituicao = $instituicao;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }

    function setFormacaoAcademica($formacaoAcademica) {
        $this->formacaoAcademica = $formacaoAcademica;
    }

    function setCompetencias($competencias) {
        $this->competencias = $competencias;
    }

    function setIdioma1($idioma1) {
        $this->idioma1 = $idioma1;
    }

    function setIdioma2($idioma2) {
        $this->idioma2 = $idioma2;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }


}

?>