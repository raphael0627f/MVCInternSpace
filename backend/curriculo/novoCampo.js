function novoInput(pai, button, placeholder,limite) {

    number = parseInt(button.getAttribute("data-number"))
    number += 1
    button.setAttribute("data-number",number)
    console.log(number)

    // Criando o div que englobará os elementos novos, desta forma todos podem ser apagados de uma vez
    div = newElement('div')
    div.id = number

    botaoAdd = button

    // Caixa de texto
    caixa = newElement('input')
    caixa.setAttribute("class", `${pai.id}`)
    caixa.type = "text"
    caixa.setAttribute("placeholder",placeholder)
    caixa.required = true

    // Botão para apagar o div 
    botaoDelete = newElement('button')
    botaoDelete.innerHTML = "-"
    botaoDelete.type = "button"
    botaoDelete.id = number
    botaoDelete.setAttribute("class", "botao")
    botaoDelete.onclick = function () {console.log(this);removeElement(pai, button, document.getElementById(this.id)); }

    // Elemento para quebra de linha 
    lineBreak = newElement('br')

    // Atribuindo o div a um pai, e atribuindo os outros elementos a esse div 
    pai.appendChild(div)
    div.appendChild(caixa)
    div.appendChild(botaoDelete)

    // Desabilitar botão de adicionar
    if (number >= limite) {
        botaoAdd.disabled = true;
    }
}

// Criar novo elemento
function newElement(elementType) {
    element = document.createElement(elementType);
    return element
}

// Apagar elemento
function removeElement(pai, button, element) {
    
    botaoAdd = button
    number = this.id

    pai.removeChild(element)
    
    number -= 1
    botaoAdd.setAttribute("data-number",number)

    // Reabilitar botão de adicionar
    if(number <= 2){
        botaoAdd.disabled = false;
    }
}