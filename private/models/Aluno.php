<?php

class Aluno extends Model{
    public function validate($DATA){
        //$this->$errors = array();

        if(empty($DATA['nome']) || !preg_match('/^[a-zA-Z ]+$/', $DATA['nome'])){
            $this->errors['nome']="ESTE CAMPO SÓ ACEITA LETRAS";
        }

        if(empty($DATA['password']) || $DATA['password'] != $DATA['password2']){
            $this->errors['password']="AS SENHAS NÃO CORRESPONDEM";
        }

        if(strlen($DATA['password']) <= 7){
            $this->errors['password']="A SENHA TEM QUE TER NO MINIMO 8 CARACTERES";
        }

        if(count($this->errors)==0){
            return true;
        }
    }
}

?>