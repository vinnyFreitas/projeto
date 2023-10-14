<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/cadastro.css">
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
  <title>Área de Cadastro</title>
  
</head>

<body>
  <section>
    <article id="fade" class="hide"></article>
    <article id="modal" class="hide">
        <article class="modal-header">
            <h2 id="mensagem"></h2>
            <button id="fechar-modal"> Fechar </button>
        </article>    
    <article>
</section>
  <a href="index.html"><img class="logo-user" src="assets/img/logos/telecall-logo-redblue.png"
      alt="logotelecall" /></a>
  <main class="container" id="container">
    <h1>Cadastre-se</h1>
    <section class="form-container sign-up-container">
      <form class="form-style">
        <label for="celular">Telefone Celular:</label>
        <input class="entradas" type="text" id="celular" name="celular" placeholder="Telefone Celular:" />
        <label for="Fixo">Telefone Fixo:</label>
        <input class="entradas" type="text" id="fixo" name="Fixo" placeholder="Telefone Fixo" />
        <label for="Endereço">Endereço Completo:</label>
        <input class="entradas" type="text" id="endereco"  name="Endereço" placeholder="Endereço Completo:" />
        <label for="Login">Login:</label>
        <input class="entradas" type="login" id="entrar" name="login" placeholder="Login:" />
        <label for="Senha">Senha:</label>
        <input class="entradas pass" id="senha" type="password" placeholder="Senha" />
        <img src="assets/img/carossel/eye.png" id="olho" class="olho">
        <label for="confirme_senha">Confire sua senha</label>
        <input class="entradas pass" id="confirmeSenha" type="password" name="confirme_senha" placeholder="Confirme sua senha" />
        <button id="botao-enviar" class="button-form">Enviar </button>
      </form>
    </section>
    <section class="form-container sign-in-container">


      <form class="form-style">
        <label for="Nome">Nome</label>
        <input class="entradas" type="text" id="name" name="Nome" placeholder="Nome" />
        <label for="Sobrenome">Sobrenome</label>
        <input class="entradas" type="text" id="sobreNome" name="Sobrenome" placeholder="Sobrenome" />
        <label for="Data_de_nascimento">Data de Nascimento</label>
        <input class="entradas" type="date" id="date" name="Data_de_nascimento" placeholder="Data de Nascimento" />
        <label for="genero">Genero</label>
        <select class="entradas" name="genero" id="genero">
          <option value="" disabled selected>Selecione o sexo</option>
          <option value="masculino">Masculino</option>
          <option value="feminino">Feminino</option>
          <option value="outros">Outros</option>
        </select>
        <label for="Nome_materno">Nome Materno</label>
        <input class="entradas" type="text" id="nomeMaterno" name="Nome_materno" placeholder="Nome Materno" />
        <label for="CPF">CPF</label>
        <input class="entradas" type="text" id="cpf" name="CPF" placeholder="CPF/CNPJ" />
      </form>



    </section>
    <section class="overlay-container">
      <section class="overlay">
        <section class="overlay-panel overlay-left">
          <h1 class="titulo"> Seus dados estão corretos?</h1>
          <p class="text">Retorne aqui e confira! </p>
          <button class="ghost" id="Login">Retornar</button>
        </section>
        <section class="overlay-panel overlay-right">
          <h1 class="titulo">Ir para a segunda parte</h1>
          <p class="text"> Falta pouco para finalizar seu cadastro!</p>
          <button  class="ghost" id="Cadastro">Proxima</button>
        </section>
      </section>
    </section>
  </main>
  <script src="js/dados.js"></script>
  <script src="js/cadastramento.js"></script>
  <script src="js/transitionForm.js"></script>
  
</body>

</html>