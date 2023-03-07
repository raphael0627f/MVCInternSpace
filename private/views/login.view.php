<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>
<link rel="stylesheet" type="text/css" href="../public/assets/css/login.css">

<body>
    <main>
        <div class="cartao">
            <!-- Form-->
            <form action="../backend/login/login.php" method="post">
                <span id="login-h1">Login</span>
                <input name="email" id="input-e-mail" type="email" placeholder="e-mail" required>
                <br>
                <input name="senha" id="input-senha" type="password" placeholder="Senha" required>
                <br>
                <div class="container-botoes">
                    <input type="submit" name="confirmar" id="confirmar" value="Confirmar">
                    <a href="esq-a-senha.html" class="esq-a-senha">Esqueceu a senha?</a>
                </div>
            </form>
        </div>
    </main>

</body>

<?php $this->view('includes/footer'); ?>