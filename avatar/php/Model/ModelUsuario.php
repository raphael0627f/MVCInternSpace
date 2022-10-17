<?php
class ModelUsuario{
    private $id;
    private $nome;
    private $endereco;
    private $cpf;
    private $documento;
    private $filiacao;
    private $telefone;
    private $email;
    private $genero;
    
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getDocumento() {
        return $this->documento;
    }

    function getFiliacao() {
        return $this->filiacao;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->email;
    }

    function getGenero() {
        return $this->genero;
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

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setDocumento($documento) {
        $this->documento = $documento;
    }

    function setFiliacao($filiacao) {
        $this->filiacao = $filiacao;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }
}


?>