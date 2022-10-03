<?php
require('../database/config.php');
$stmt = $conn->prepare("SELECT * from tb_agendamentos WHERE statusAgendamento = 1");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../frontend/ADMAgenda.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>ADM</title>
</head>

<body>
    <header>
        <img src="../assets/FCSN_Capacitar_BRANCO.png" alt="Não foi possivel carregar a imagem">
        <a id="nome">Giovanna</a>
        <input type="image" alt="imagem" id="imagem">
    </header>
    <div id="cartao">
        <span id="text-span">Gestão Agendameto:</span>
        <div id="bodyTB">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"># Aluno</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Setor</th>
                    <th scope="col">Data</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php foreach ($results as $res) { ?>
                        <th scope="row"><?= $res->id; ?></th>
                        <td><?= $res->idAluno; ?></td>
                        <td><?= $res->nomeAluno; ?></td>
                        <td><?= $res->setor; ?></td>
                        <td><?= $res->dataAgendamento; ?></td>
                        <td>
                            <a href="#">
                                <button type="button" class="btn btn-success">Confirmar</button>
                            </a>
                            <a href="#">
                                <button type="button" class="btn btn-danger">Negar</button>
                            </a>
                        </td>
                </tr>
            <?php } ?>
            </tbody>
    </div>
    </table>
    </div>
    </div>
</body>

</html>