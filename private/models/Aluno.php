<?php

class Aluno extends Model{

    protected $colunas = [
        'nome',
        'email',
        'senha',
        'dataNascimento',
        'genero',
        'telefone',
        'cpf',
        'documento',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf'
    ];

    protected $antesInserir = [
        'hash_password'
    ];
    
    public function validate($DATA){
        //$this->$errors = array();

        if(empty($DATA['nome']) || !preg_match('/^[a-zA-Z ]+$/', $DATA['nome'])){
            $this->errors['nome']="ESTE CAMPO SÓ ACEITA LETRAS";
        }

        if(empty($DATA['senha']) || $DATA['senha'] != $DATA['senha2']){
            $this->errors['password']="AS SENHAS NÃO CORRESPONDEM";
        }

        if(strlen($DATA['senha']) <= 7){
            $this->errors['password']="A SENHA TEM QUE TER NO MINIMO 8 CARACTERES";
        }

        if($this->where('email', $DATA['email'])){
            $this->errors['password']="EMAIL JA CADASTRADO";
        }

        if(count($this->errors)==0){
            return true;
        }
    }

    public function hash_password($data){
        $data['senha'] = password_hash($_POST['password'],PASSWORD_DEFAULT);
        return $data;
    }
    
}

?>