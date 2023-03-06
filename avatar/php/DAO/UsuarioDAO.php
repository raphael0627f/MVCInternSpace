<?php
    
class UsuarioDAO {
    
    function adicionarUsuario(ModelUsuario $usuario){
        require_once('./conexao/config.php');
        require_once('./Model/ModelUsuario.php');

        $nome = $usuario->getNome();
        $endereco = $usuario->getEndereco();
        $cpf = $usuario->getCpf();
        $documento = $usuario->getDocumento();
        $filiacao = $usuario->getFiliacao();
        $telefone = $usuario->getTelefone();
        $email = $usuario->getEmail();
        $genero = $usuario->getGenero();

        $stmt = $conn->prepare("INSERT INTO tb_usuarios (nome, endereco, cpf, documento, filiacao, telefone, email, genero) VALUES (:nome, :endereco, :cpf, :documento, :filiacao, :telefone, :email, :genero);");
        $stmt-> bindParam(':nome',$nome);
        $stmt-> bindParam(':endereco',$endereco);
        $stmt-> bindParam(':cpf',$cpf);
        $stmt-> bindParam(':documento',$documento);
        $stmt-> bindParam(':filiacao',$filiacao);
        $stmt-> bindParam(':telefone',$telefone);
        $stmt-> bindParam(':email',$email);
        $stmt-> bindParam(':genero',$genero);
        $stmt->execute();
        if($stmt == true){
            echo "Dados inseridos!";
        }
        
    }


    }
?>