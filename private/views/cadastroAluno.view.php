<?php //$this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>
<link rel="stylesheet" type="text/css" href="../public/assets/css/cadastroAluno.css">
<body>
  <main>
    <div class="container">
      <section class="frm_cadastro">
        <form method="POST">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Nome</label>
              <input type="text" class="form-control" value="<?= get_var('nome') ?>" name="nome" placeholder="Nome">
            </div>
          </div>

          <div class="form-row">

            <div class="form-group col-md-6">
              <label>E-mail</label>
              <input type="email" value="<?= get_var('email') ?>" name="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group col-md-3">
              <label>Senha</label>
              <input type="password" value="<?= get_var('password') ?>" name="password" class="form-control" placeholder="Senha">
              
            </div>

            <div class="form-group col-md-3">
              <label>Confirmação da Senha</label>
              <input type="password" value="<?= get_var('password2') ?>" name="password2" class="form-control" placeholder="Senha">
              
            </div>
          </div>

          <div class="form-row">

            <div class="form-group col-md-3">
              <label>Data de Nascimento</label>
              <input type="date" class="form-control" value="<?= get_var('dtnascimento') ?>" name="dtnascimento" placeholder="Data de Nascimento">
            </div>

            <div class="form-group col-md-3">
              <label>Gênero</label>
              <select name="genero" class="form-control">
                <option <?= get_select('genero','') ?> value='' selected>Selecione..</option>
                <option <?= get_select('genero','Masculino') ?> value='Masculino'>Masculino</option>
                <option <?= get_select('genero','Feminino') ?> value='Feminino'>Feminino</option>
                <option <?= get_select('genero','Não Informar') ?> value='Não Informar'>Não Informar</option>
                <option <?= get_select('genero','Outros') ?> value='Outros'>Outros</option>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label>Telefone</label>
              <input type="text" class="form-control" value="<?= get_var('telefone') ?>" name="telefone" placeholder="Telefone">
            </div>
          </div>

          <div class="form-row">

            <div class="form-group col-md-3">
              <label>CPF</label>
              <input type="text" class="form-control" value="<?= get_var('cpf') ?>" name="cpf" placeholder="CPF">
            </div>

            <div class="form-group col-md-3">
              <label>Documento</label>
              <input type="text" class="form-control" value="<?= get_var('documento') ?>" name="documento" placeholder="Documento">
            </div>
          </div>

          <div class="form-row">

            <div class="form-group col-md-2">
              <label>CEP</label>
              <input type="text" class="form-control" value="<?= get_var('cep') ?>" name="cep">
            </div>

            <div class="form-group col-md-10">
              <label>Logradouro</label>
              <input type="text" class="form-control" value="<?= get_var('logradouro') ?>" name="logradouro">
            </div>
          </div>

          <div class="form-row">

            <div class="form-group col-md-2">
              <label>Número</label>
              <input type="text" class="form-control" value="<?= get_var('numero') ?>" name="numero">
            </div>
            
            <div class="form-group col-md-10">
              <label>Complemento</label>
              <input type="text" class="form-control" value="<?= get_var('complemento') ?>" name="complemento">
            </div>
          </div>

          <div class="form-row">

            <div class="form-group col-md-6">
              <label>Bairro</label>
              <input type="text" class="form-control" value="<?= get_var('bairro') ?>" name="bairro">
            </div>

            <div class="form-group col-md-6">
              <label>Cidade</label>
              <input type="text" class="form-control" value="<?= get_var('cidade') ?>" name="cidade">
            </div>
          </div>

          <div class="form-row">
            
            <div class="form-group col-md-1">
              <label>UF</label>
              <input type="text" class="form-control" value="<?= get_var('uf') ?>" name="uf">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Cadastrar</button>
          <button type="button" class="btn btn-warning">Cancelar</button>
        </form>
      </section>
      <div>
  </main>
  <?php $this->view('includes/footer'); ?>