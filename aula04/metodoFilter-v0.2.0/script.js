document.addEventListener("DOMContentLoaded", () => {
    var selectEstado = document.getElementById('estado');
    selectEstado.addEventListener ('change', carregaCidades);
});

let carregaCidades = () =>{
    var corpo = {
        "estado" : PegaValorEstado ()
    };
    fetch ('https://localhost/aula04/metodoFilter-v0.2.0/cidade.php', {
        method : "POST",
        header: {
            'content-type' : "Application-json"
        },
        body: JSON.stringify(corpo)
    })
    .then (resposta => {
        criaOptionsCidade(resposta);
    })
    .catch((Error) => console.log(Error));
}