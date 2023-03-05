<?php $this->view('includes/header'); ?>
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
              <input type="text" class="form-control" name="nome" placeholder="Nome">
            </div>
          </div>

          <div class="form-row">

            <div class="form-group col-md-6">
              <label>E-mail</label>
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>

            <div class="form-group col-md-3">
              <label>Senha</label>
              <input type="password" name="password" class="form-control" placeholder="Senha">
              
            </div>

            <div class="form-group col-md-3">
              <label>Confirmação da Senha</label>
              <input type="password2" name="password2" class="form-control" placeholder="Senha">
              
            </div>
          </div>

          <div class="form-row">

            <div class="form-group col-md-3">
              <label>Data de Nascimento</label>
              <input type="date" class="form-control" name="dtnascimento" placeholder="Data de Nascimento">
            </div>

            <div class="form-group col-md-3">
              <label>Gênero</label>
              <select name="genero" class="form-control">
                <option default value='' selected>Selecione..</option>
                <option value='Masculino'>Masculino</option>
                <option value='Feminino'>Feminino</option>
                <option value='Não Informar'>Não Informar</option>
                <option value='Outros'>Outros</option>
              </select>
            </div>

            <div class="form-group col-md-3">
              <label>Telefone</label>
              <input type="text" class="form-control" name="telefone" placeholder="Telefone">
            </div>
          </div>

          <div class="form-row">

            <div class="form-group col-md-3">
              <label>CPF</label>
              <input type="text" class="form-control" name="cpf" placeholder="CPF">
            </div>

            <div class="form-group col-md-3">
              <label>Documento</label>
              <input type="text" class="form-control" name="documento" placeholder="Documento">
            </div>
          </div>

          <div class="form-row">

            <div class="form-group col-md-2">
              <label>CEP</label>
              <input type="text" class="form-control" name="cep">
            </div>

            <div class="form-group col-md-10">
              <label>Logradouro</label>
              <input type="text" class="form-control" name="logradouro">
            </div>
          </div>

          <div class="form-row">

            <div class="form-group col-md-2">
              <label>Número</label>
              <input type="text" class="form-control" name="numero">
            </div>
            
            <div class="form-group col-md-10">
              <label>Complemento</label>
              <input type="text" class="form-control" name="complemento">
            </div>
          </div>

          <div class="form-row">

            <div class="form-group col-md-6">
              <label>Bairro</label>
              <input type="text" class="form-control" name="bairro">
            </div>

            <div class="form-group col-md-6">
              <label>Cidade</label>
              <input type="text" class="form-control" name="cidade">
            </div>
          </div>

          <div class="form-row">
            
            <div class="form-group col-md-1">
              <label>UF</label>
              <input type="text" class="form-control" name="uf" value="RJ" placeholder="RJ">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Cadastrar</button>
          <button type="button" class="btn btn-warning">Cancelar</button>
        </form>
      </section>
      <div>
  </main>
  <?php $this->view('includes/footer'); ?>