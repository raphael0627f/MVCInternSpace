<?php
include('../DAO/AgendamentoDAO.php');

$idAluno = 1;
$nomeAluno = 'DANIEL';
$setor = 'GOV';
$horario = '22:59';
$dataAgendamento = '21/02/21212';
$status = 1;


$agendamento = new AgendamentoDAO();
$agendamento->adicionarAgendamento($idAluno, $nomeAluno, $setor, $horario, $dataAgendamento, $status);


?>