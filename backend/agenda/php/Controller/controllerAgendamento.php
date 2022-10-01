<?php
class ControllerAgendamento{
    function adicionarAgendamentoController(ModelAgendamento $agendamento){
        include('../php/DAO/AgendamentoDAO.php');
        $agendamentoDAO = new AgendamentoDAO();
        $agendamentoDAO->adicionarAgendamento($agendamento);
    }


}


?>