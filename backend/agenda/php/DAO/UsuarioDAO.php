<?php

class UsuarioDAO {

function adicionarUsuario(     
    $id,
    $nome,
    $endereco,
    $CPF,
    $identidade,
    $telefone,
    $email,
    $sexo,
    $experiencia,
    $instituicao,
    $cargo,
    $periodo,
    $formacaoAcademica,
    $competencias,
    $idioma1,
    $idioma2,
    $curso
    ){
        include_once("../conexao/config.php");
        $stmt = $conn->prepare("INSERT INTO tb_usuarios VALUES (
                :nome,
                :endereco,
                :CPF,
                :identidade,
                :telefone,
                :email,
                :sexo,
                :experiencia,
                :instituicao,
                :cargo,
                :periodo,
                :formacaoAcademica,
                :competencias,
                :idioma1,
                :idioma2,
                :curso

        )");
        $stmt-> bindParam(':nome',$nome);
        $stmt-> bindParam(':email',$email);
        $stmt-> bindParam(':nome', $nome);
        $stmt-> bindParam(':endereco', $endereco);
        $stmt-> bindParam(':CPF', $CPF);
        $stmt-> bindParam(':identidade', $identidade);
        $stmt-> bindParam(':telefone', $telefone);
        $stmt-> bindParam(':email', $email);
        $stmt-> bindParam(':sexo', $sexo);
        $stmt-> bindParam(':experiencia', $experiencia1);
        $stmt-> bindParam(':instituicao', $instituicao);
        $stmt-> bindParam(':cargo', $cargo);
        $stmt-> bindParam(':periodo', $periodo);
        $stmt-> bindParam(':formacaoAcademica', $formacaoAcademica);
        $stmt-> bindParam(':competencias', $competencias);
        $stmt-> bindParam(':idioma1', $idioma1);
        $stmt-> bindParam(':idioma2', $idioma2);
        $stmt-> bindParam(':curso', $curso);
        $stmt-> bindParam(':email',$email);
        $stmt->execute();
        
    }
}
?>
