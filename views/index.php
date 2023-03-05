<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista usuarios</title>
</head>

<body>
    <h1>client list</h1>
    <table class="content ">
        <thead>
            <tr>
                <th>nome</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php require_once './controllers/clientContorller.php' ?>
                <?php foreach ($resultData as $data): ?>
                    <tr>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['nome'] ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php ; ?>
            </tbody>
    </table>
</body>

</html>