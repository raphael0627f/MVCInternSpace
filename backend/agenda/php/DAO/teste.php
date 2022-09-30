<?php

include('../Model/ModelAgendamento.php');
include('./AgendamentoDAO.php');
$teste = new AgendamentoDAO();
$teste = $teste->adicionarAgendamento(123,'teste','teste','teste','teste');
?> 