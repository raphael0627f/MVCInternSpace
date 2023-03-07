<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>
<link rel="stylesheet" type="text/css" href="../public/assets/css/login.css">

<body>
    <main>
        <div class="cartao">
            <!-- Form-->
            <form action="" method="post">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <span id="login-h1">Login</span>
                        <input name="email" id="input-e-mail" value="<?= get_var('email') ?>" class="form-control" type="email" placeholder="e-mail" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input name="senha" id="input-senha" value="<?= get_var('senha') ?>" class="form-control" type="password" placeholder="Senha" required>
                    </div>
                </div>
                <div class="container-botoes">
                    <button type="submit" class="btn btn-primary" id="a">Confirmar</button>
                    <a href="esq-a-senha.html" class="esq-a-senha">Esqueceu a senha?</a>
                </div>
            </form>
        </div>
    </main>

</body>

<?php $this->view('includes/footer'); ?>