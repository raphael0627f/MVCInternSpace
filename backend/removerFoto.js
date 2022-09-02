function apagarValor(idItem){
    console.log(idItem)
    item = document.getElementById(idItem)
    item.setAttribute("value",null)
}