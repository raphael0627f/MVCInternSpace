class curriculo {
    constructor(foto, nome, email, telefone, genero, data, local, experiencia, instituicao) {
        this.foto = foto
        this.nome = nome
        this.email = email
        this.telefone = telefone
        this.genero = genero
        this.data = data
        this.local = local
        this.experiencia = experiencia
        this.instituicao = instituicao
    }

}

function construirCurriculo() {
    
    foto = coletarDados("input#foto")
    nome = coletarDados("input#nome")
    email = coletarDados("input#email")
    telefone = coletarDados("input#telefone")
    genero = coletarDados("input#genero:checked", "radio")
    data = coletarDados("input#data")
    local = coletarDados("input#localizacao")
    experiencia = coletarDados("input#experiencia")
    instituicao = coletarDados("input#instituicao")

    console.log(
        "\n",
        "Foto: " + foto + "\n",
        "Nome: " + nome + "\n",
        "E-mail: " + email + "\n",
        "Tel: " + telefone + "\n",
        "Genero: " + genero + "\n",
        "Data: " + data + "\n",
        "Localização: " + local + "\n",
        "Experencia: " + experiencia + "\n",
        "Instituição: " + instituicao + "\n"
    );
}





/*
Função que facilitará a coleta dos dados presentes nos inputs. Essa função é usada para recolher dados seguindo
regras, como: 
1. retornar null se nenhum valor for inserido
2. retornar array caso haja mais de um dado (ex.: experiencia profissional)

*/
function coletarDados(target, tipoSelector) {

    valor = []
    allNull = true

    // Usar tipos de seletores diferentes dependendo do tipo do elemento
    if (tipoSelector == null) {
        objeto = document.querySelectorAll(target);

        // Adicionando os valores ao array de valores
        objeto.forEach(element => {
            console.log(element)
            // Adicionando somente se houver algum valor
            if (element.value != "" && element.value != null) {

                allNull = false
                console.log(element.value)
                valor.push(element.value)

            }else if(allNull == true){
                    valor = null
                }

        });


    } 
    // Executa se o input for radio button
    else if (tipoSelector == "radio") {
        objeto = document.querySelector(target);

        // Se nenhuma opção estiver selecionada, retornará null
        if (objeto == null) {
            valor = null
        }else{
            valor = objeto.value
        }

    }

    return valor // Finaliza função retornando o valor

}


// Limpar seleção de radio buttons
function limparSelecao(target) {

    radio = document.querySelectorAll(target)


    radio.forEach(element => {
        element.checked = false
    });

    radio.checked = false

}
