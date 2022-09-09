function a() { console.log(document.querySelectorAll("input.experiencia")) }

class curriculo {
    constructor(nome, email, telefone, genero, data, local, experiencia, instituicao) {
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

    nome = coletarDados("input.nome")
    email = coletarDados("input.email")
    telefone = coletarDados("input.telefone")
    genero = coletarDados("input[name='genero']:checked", "radio")
    data = coletarDados("input.data")
    local = coletarDados("input.localizacao")
    experiencia = coletarDados("input.experiencia")
    instituicao = coletarDados("input.instituicao")

    console.log(
        "Nome:" + nome + "\n",
        "E-mail: " + email + "\n",
        "Tel:" + telefone + "\n",
        "Genero:" + genero + "\n",
        "Data:" + data + "\n",
        "Localização:" + local + "\n",
        "Experencia:" + experiencia + "\n",
        "Instituição:" + instituicao + "\n"
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
    // Usar tipos de seletores diferentes dependendo do tipo do elemento
    if (tipoSelector == null) {
        objeto = document.querySelectorAll(target);
        console.log(objeto)

        for (index = 0; index < objeto.length; index++) {
            elemento = objeto[index]
            allNull = true

            if (elemento.value != null) {
                valor.push(elemento.value)
                allNull = false
            }
            if (allNull == true) {
                valor = null
            }

        }

    } else if (tipoSelector == "radio") {
        objeto = document.querySelector(target);
        console.log(objeto)

        if (objeto == null) {
            valor = null
        }

    }

    return valor

}

