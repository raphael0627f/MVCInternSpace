function clearRadioSelection(radioName) {
    // Obter todos os botões de rádio com o mesmo nome
    var radioButtons = document.getElementsByName(radioName);

    // Percorrer cada botão de rádio
    for (var i = 0; i < radioButtons.length; i++) {
        // Desmarcar o botão de rádio
        radioButtons[i].checked = false;
    }
}    