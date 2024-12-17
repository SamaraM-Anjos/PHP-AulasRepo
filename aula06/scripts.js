document.addEventListener("DOMContentLoaded",()=>{
    var selectClasse = document.getElementById("classe");
    selectClasse.addEventListener("change", carregaAnimais);
});
const pegaValorClasse = () => document.getElementById("classe").value;
  
let criaOptionsAnimais = (resposta) =>{
    var selectAnimal = document.getElementById("nomeAnimal");
    limpaSelect(selectAnimal);
    console.log(resposta);
    for(var animal of resposta){
        var optionAni = document.createElement("option");
        optionAni.setAttribute("value", animal);
        optionAni.textContent = animal;
        selectAnimal.appendChild(optionAni);
    }
}
function limpaSelect(campo){
    var opt;
    while(opt = campo.firstChild){
        campo.removeChild(opt);
    }
}
function carregaAnimais(){
    var formulario= new FormData();

    formulario.append("nomeAnimal", pegaValorClasse());
    fetch("http://localhost/PHP-Aulas/PHP-AulasRepo/aula06/animais.php",{
        mode: 'no-cors',
        method:"POST", headers:{"content-type":"application-json",  "Access-Control-Allow-Origin": 'origin-list'}, body:formulario})
        .then(async resposta=>{
            var animais = await resposta.json();
            criaOptionsAnimais(animais);
        })
        .catch(error=>console.log(error));
}