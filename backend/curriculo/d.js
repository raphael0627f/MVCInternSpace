function a(){console.log(document.querySelectorAll("input.experiencia"))}

class curriculo {
    constructor(){
        let nome = null
        let email = null
        let telefone = null
        let genero = null
        let data = null
        let local = null
        let experiencia = null
        let instituicao = null
    }
    
}

// Coletará os dados inseridos nos campos
// Retornará array
function coletarDados(campo) {

    campo = coletarDados(document.querySelectorAll("input.experiencia"))
    dados = []

    for (let i = 0; i < campo.length; i++) {
        const element = campo[i];
        campo = document.querySelectorAll(campo);
        dados.append(campo[element].value)
    };

    alert(dados);
}