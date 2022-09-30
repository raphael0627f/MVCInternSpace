<?php

class AgendamentoDAO {

    function adicionarAgendamento(ModelAgendamento $agendamento){
        $idAluno = $agendamento->getIdAluno();
        $nomeAluno = $agendamento->getNomeAluno();
        $setor = $agendamento->getSetor();
        $dataAgendamento = $agendamento->getDataAgendamento();
        $statusAgendamento = $agendamento->getStatusAgendamento();

        include_once("../conexao/config.php");
        $stmt = $conn->prepare("INSERT INTO tb_agendamentos (idAluno, nomeAluno, setor, dataAgendamento, statusAgendamento) VALUES (:idAluno, :nomeAluno, :setor, :dataAgendamento, :statusAgendamento)");
        $stmt->bindParam(':idAluno',$idAluno);
        $stmt->bindParam(':nomeAluno',$nomeAluno);
        $stmt->bindParam(':setor',$setor);
        $stmt->bindParam(':dataAgendamento',$dataAgendamento);
        $stmt->bindParam(':statusAgendamento',$statusAgendamento);    
        $stmt->execute();

        if($stmt == true){
            echo "Dados inseridos!";
        }
        
    }


    }
?>
