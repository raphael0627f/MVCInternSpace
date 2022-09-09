 <?php
    require('config.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("INSERT INTO aluno (nome,email) VALUES (:nome, :email)");
    $stmt-> bindParam(':nome',$nome);
    $stmt-> bindParam(':email',$email);
    $stmt->execute();

    echo "Dados inseridos!";
?>