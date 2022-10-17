const formAgendamento = document.getElementById("formAgendamento")

if(formAgendamento){
    formAgendamento.addEventListener("submit", async(event) =>{
        event.preventDefault();
        //recebendo os dados do HTML
        const dadosForm = new FormData(formAgendamento)

        //enviando os dados para o PHP
        const dados = await fetch("",{
            method: "POST",
            body: dadosForm
        })
    })
}
