<?php
require_once('./DAO/AgendamentoDAO.php');
class ControllerAgendamento{
    
    function adicionarAgendamentoController(ModelAgendamento $agendamento){
        
        $agendamentoDAO = new AgendamentoDAO();
        $agendamentoDAO->adicionarAgendamento($agendamento);
    }


}


?>