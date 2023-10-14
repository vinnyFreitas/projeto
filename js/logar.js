

const entradas = document.querySelectorAll('.entradas');
const botaoEntrar = document.querySelector("#button-login");

const getStorage = localStorage.getItem('usuario');
const userObj = JSON.parse(getStorage)

botaoEntrar.addEventListener("click", event => {
    event.preventDefault();
    

    if(entradas[0].value === "" || entradas[1].value === ""){
        modalShow("Preencha todos os campos vazios");
        return
    }
   

    
    if (entradas[0].value !== userObj.cpf || entradas[1].value !== userObj.senha) {
        modalShow("Login e senha não conferem")
        return;

    }


    window.open("index.html", "_self")
})



const buttonExit = document.querySelector("#fechar-modal")
buttonExit.addEventListener("click", () => {
    
    modal.classList.toggle("hide");
    fade.classList.toggle("hide");
  })