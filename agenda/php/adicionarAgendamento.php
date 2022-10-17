<?php
require_once('Controller/controllerAgendamento.php');
require_once('Model/ModelAgendamento.php');


$model= new ModelAgendamento();

$model->setHotelID($_POST['hotel']);
$model->setUsuariosID(1);
$model->setSetoresID($_POST['setor']);
$model->setPeriodoID($_POST['periodo']);
$model->setDataAgendamento(date("Y-m-d", strtotime($_POST['dataEnviada'])));
$model->setStatusAgendamento(2);
$agendamento = new ControllerAgendamento();
$agendamento->adicionarAgendamentoController($model);

?>