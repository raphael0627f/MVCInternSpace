<?php

class AgendamentoDAO {

    function adicionarAgendamento($idAluno, $nomeAluno, $setor, $horario, $dataAgendamento, $statusAgendamento ){
        include_once("../conexao/config.php");
        $stmt = $conn->prepare("INSERT INTO tb_agendamentos (idAluno, nomeAluno, setor, horario, dataAgendamento, statusAgendamento) VALUES (:idAluno, :nomeAluno, :setor, :horario, :dataAgendamento, :statusAgendamento)");
        $stmt-> bindParam(':idAluno',$idAluno);
        $stmt-> bindParam(':nomeAluno',$nomeAluno);
        $stmt-> bindParam(':setor',$setor);
        $stmt-> bindParam(':horario',$horario);
        $stmt-> bindParam(':dataAgendamento',$dataAgendamento);
        $stmt-> bindParam(':statusAgendamento',$statusAgendamento);
        $stmt->execute();
        if($stmt == true){
            echo "Dados inseridos!";
        }
        
    }


    }
?>