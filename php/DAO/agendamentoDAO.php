<?php
    
class AgendamentoDAO {
    
    function adicionarAgendamento(ModelAgendamento $agendamento){
        require_once('./conexao/config.php');
        require_once('./Model/ModelAgendamento.php');

        $hotelID = $agendamento->getHotelID();
        $usuariosID = $agendamento->getUsuariosID();
        $setorID = $agendamento->getSetoresID();
        $periodoID = $agendamento->getPeriodoID();
        $dataAgendamento = $agendamento->getDataAgendamento();
        $statusAgendamento= $agendamento->getStatusAgendamento();

        $stmt = $conn->prepare("INSERT INTO tb_agendamentos (hotel_id, usuarios_id, setores_id, periodo_id, dataAgendamento, statusAgendamento) VALUES (:hotel_id, :usuarios_id, :setores_id, :periodo_id, :dataAgendamento, :statusAgendamento);");
        $stmt-> bindParam(':hotel_id',$hotelID);
        $stmt-> bindParam(':usuarios_id',$usuariosID);
        $stmt-> bindParam(':setores_id',$setorID);
        $stmt-> bindParam(':periodo_id',$periodoID);
        $stmt-> bindParam(':dataAgendamento',$dataAgendamento);
        $stmt-> bindParam(':statusAgendamento',$statusAgendamento);
        $stmt->execute();
        if($stmt == true){
            echo "Dados inseridos!";
        }
        
    }


    }
?>