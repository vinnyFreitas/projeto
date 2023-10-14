const buttonTema = document.getElementById('chk');

buttonTema.addEventListener('click', () => {
    if (localStorage.getItem('tema') != "white") {
        themesWhite()
    } else {
        themesBlack()
    }
})

const verificationThemes = () => {
    if (localStorage.getItem('tema') != 'white') {
        themesBlack()
    } else {
        themesWhite()
    }
}

const themesBlack = () => {
    const body = document.body;
    body.style.setProperty("--bg-color-primary", "black")
    body.style.color = "white";
    localStorage.setItem('tema', 'black');
}

const themesWhite = () => {
    const body = document.body;
    body.style.setProperty("--bg-color-primary", "#DEDEDE")
    body.style.color = "black";
    localStorage.setItem('tema', 'white');
}

verificationThemes()












