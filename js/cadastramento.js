const usuario = {

}

const botaoEnviar = document.querySelector("#botao-enviar");

botaoEnviar.addEventListener("click", evemt => {
    event.preventDefault();
    usuario.nome = `${entradas[6].value} ${entradas[7].value}`;
    usuario.login = entradas[3].value;
    usuario.cpf = entradas[11].value;
    usuario.senha = entradas[4].value;
    usuario.cel = entradas[0].value;
    usuario.fixo = entradas[1].value;
    const userJson = JSON.stringify(usuario);
    localStorage.setItem("usuario", userJson);
    
    

}) 



//4 senha, 6 nome, 7 sobrenome, 11 cpf, 3 login

// regex telefone:^([0-9]{2})[0-9]{4}[0-9]{4}$
//regex celular:^([0-9]{2})[9]{1}[0-9]{4}[0-9]{4}$
//regex cpf ou cnpj: (^\d{3}\.\d{3}\.\d{3}\-\d{2}$)|(^\d{2}\.\d{3}\.\d {3}\/\d{4}\-\d{2}$)
