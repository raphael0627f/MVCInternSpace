id = 0
function novoInput(pai,nomepai){

    // Criando um id único para cada elemento
    idAtual = globalThis.id

    // Criando o div que englobará os elementos novos, desta forma todos podem ser apagados de uma vez
    div = newElement('div')
    div.id = idAtual

    // Caixa de texto
    caixa = newElement('input')
    caixa.setAttribute("class",`${nomepai}`)
    caixa.type = "text"

    // Botão para apagar o div 
    botaoDelete = newElement('button')
    botaoDelete.innerHTML = "-"
    botaoDelete.type = "button"
    botaoDelete.id = idAtual
    botaoDelete.onclick = function () { removeElement(pai, document.getElementById(this.id)); }

    // Elemento para quebra de linha 
    lineBreak = newElement('br')

    // Atribuindo o div a um pai, e atribuindo os outros elementos a esse div 
    pai.appendChild(div)
        div.appendChild(caixa)
        div.appendChild(botaoDelete)


    globalThis.id += 1
}

// Criar novo elemento
function newElement(elementType) {
    element = document.createElement(elementType);
    return element
}

// Apagar elemento
function removeElement(pai,element){
    pai.removeChild(element)
}