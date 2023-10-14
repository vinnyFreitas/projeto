
const form = document.form

// Salvar Dados
const botao = document.querySelector("#botao-enviar");

const entradas = document.querySelectorAll(".entradas"); // return list [...]
const regexCpf = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/;
const regexPass = /^[a-zA-Z0-9]{8}$/;
const regexNumber = /^([0-9]{2})[0-9]{4}[0-9]{4}$/;
const regexCel = /^([0-9]{2})[9]{1}[0-9]{4}[0-9]{4}$/;

botao.addEventListener("click", event => {
  event.preventDefault();

  if (verificarCampos() != undefined) {
    modalShow(verificarCampos())
    return;

  }
  if (!regexCpf.test(entradas[11].value)) {
    modalShow("CPF inválido");
    return;
  }
  if(!regexCel.test(entradas[0].value)){
    modalShow ("Número de Celular inválido");
    return;
  }
  if(!regexNumber.test(entradas[1].value)){
    modalShow ("Número de Telefone Fixo Inválido");
    return;
  }
  if(!regexPass.test(entradas[4].value)){
    modalShow ("Deve conter no minimo 8 Caracteres");
    return;
  }


  
  if (entradas[4].value != entradas[5].value) {
    modalShow("Senhas não conferem")
    return;
  }
  

  window.open("usuario.html", "_self")

})

const verificarCampos = () => {
  let msg;
  
  entradas.forEach(entrada => {
    if (entrada.value === "") {
      msg = "Preencha todos os campos"
    }
  
  })
  return msg;
}

const buttonExit = document.querySelector("#fechar-modal")
buttonExit.addEventListener("click", () => {
    
    modal.classList.toggle("hide");
    fade.classList.toggle("hide");
  })
  