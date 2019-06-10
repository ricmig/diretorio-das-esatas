var esata1Hide = document.querySelector(".esata1Hide");
var esata1Display = document.querySelector("#esata1Display");

var esata2Hide = document.querySelector(".esata2Hide");
var esata2Display = document.querySelector("#esata2Display");

var esata3Hide = document.querySelector(".esata3Hide");
var esata3Display = document.querySelector("#esata3Display");

var esata4Hide = document.querySelector(".esata4Hide");
var esata4Display = document.querySelector("#esata4Display");

var esata5Hide = document.querySelector(".esata5Hide");
var esata5Display = document.querySelector("#esata5Display");

var esata6Hide = document.querySelector(".esata6Hide");
var esata6Display = document.querySelector("#esata6Display");

var esata7Hide = document.querySelector(".esata7Hide");
var esata7Display = document.querySelector("#esata7Display");

var esata8Hide = document.querySelector(".esata8Hide");
var esata8Display = document.querySelector("#esata8Display");

var esata9Hide = document.querySelector(".esata9Hide");
var esata9Display = document.querySelector("#esata9Display");

var esata9Hide = document.querySelector(".esata9Hide");
var esata9Display = document.querySelector("#esata9Display");

var esata10Hide = document.querySelector(".esata10Hide");
var esata10Display = document.querySelector("#esata10Display");

var esata11Hide = document.querySelector(".esata11Hide");
var esata11Display = document.querySelector("#esata11Display");

var esata12Hide = document.querySelector(".esata12Hide");
var esata12Display = document.querySelector("#esata12Display");

var esata13Hide = document.querySelector(".esata13Hide");
var esata13Display = document.querySelector("#esata13Display");

var esata14Hide = document.querySelector(".esata14Hide");
var esata14Display = document.querySelector("#esata14Display");

var esata15Hide = document.querySelector(".esata15Hide");
var esata15Display = document.querySelector("#esata15Display");

var esata16Hide = document.querySelector(".esata16Hide");
var esata16Display = document.querySelector("#esata16Display");

var esata17Hide = document.querySelector(".esata17Hide");
var esata17Display = document.querySelector("#esata17Display");

var esata18Hide = document.querySelector(".esata18Hide");
var esata18Display = document.querySelector("#esata18Display");

var esata19Hide = document.querySelector(".esata19Hide");
var esata19Display = document.querySelector("#esata19Display");

var esata20Hide = document.querySelector(".esata20Hide");
var esata20Display = document.querySelector("#esata20Display");

var esata21Hide = document.querySelector(".esata21Hide");
var esata21Display = document.querySelector("#esata21Display");

var esata22Hide = document.querySelector(".esata22Hide");
var esata22Display = document.querySelector("#esata22Display");

var displayHide = document.querySelector(".displayHide");

    // esata1Hide.addEventListener("mouseover", function(){
    //     esata1Display.style.color = "red";
    // });

    function hideDisplay(esataHide, esataDisplay){
        esataHide.addEventListener("mouseover", function(){
            esataDisplay.style.display = "inline-block";
        })
        esataHide.addEventListener("mouseout", function(){
            esataDisplay.style.display = "none";
        })
    }

      hideDisplay(esata1Hide, esata1Display);
      hideDisplay(esata2Hide, esata2Display);
      hideDisplay(esata3Hide, esata3Display);
      hideDisplay(esata4Hide, esata4Display);
      hideDisplay(esata5Hide, esata5Display);
      hideDisplay(esata6Hide, esata6Display);
      hideDisplay(esata7Hide, esata7Display);
      hideDisplay(esata8Hide, esata8Display);
      hideDisplay(esata9Hide, esata9Display);
      hideDisplay(esata10Hide, esata10Display);
      hideDisplay(esata11Hide, esata11Display);
      hideDisplay(esata12Hide, esata12Display);
      hideDisplay(esata13Hide, esata13Display);
      hideDisplay(esata14Hide, esata14Display);
      hideDisplay(esata15Hide, esata15Display);
      hideDisplay(esata16Hide, esata16Display);
      hideDisplay(esata17Hide, esata17Display);
      hideDisplay(esata18Hide, esata18Display);
      hideDisplay(esata19Hide, esata19Display);
      hideDisplay(esata20Hide, esata20Display);
      hideDisplay(esata21Hide, esata21Display);
      hideDisplay(esata22Hide, esata22Display);
 
 var enviar = false; 
 var erroLi = document.querySelector('#erros');
 var inputNome = document.querySelector('#inputNomeFantasia');
 var inputCnpj = document.querySelector('#inputCNPJ');
 var inputRazaoSocial = document.querySelector('#inputRazaoSocial');


inputNome.onblur = function(){
    erroLi.innerHTML = '';
    erronome = document.createElement('li');
    if(inputNome.value.length <= 5 && inputNome.value != ''){
        erronome.innerHTML = 'o nome precisa ter no mínimo cinco caracteres';
        erroLi.classList.add('alert', 'alert-danger');
        erroLi.appendChild(erronome);
        } else{
        erroLi.classList.remove('alert', 'alert-danger');
        enviar = true;
    } 
}

inputCnpj.onblur = function(){
    erroLi.innerHTML = '';
    erronome = document.createElement('li');
    if(inputCnpj.value.length != 14 && inputCnpj.value != '' 
    ||inputCnpj.value == "00000000000000"
    ||inputCnpj.value == "11111111111111"
    ||inputCnpj.value == "22222222222222"
    ||inputCnpj.value == "33333333333333"
    ||inputCnpj.value == "44444444444444"
    ||inputCnpj.value == "55555555555555"
    ||inputCnpj.value == "66666666666666"
    ||inputCnpj.value == "77777777777777"
    ||inputCnpj.value == "88888888888888"
    ||inputCnpj.value == "99999999999999"
    ){
        erronome.innerHTML = 'O cnpj está incorreto. Ele precisa conter 14 caracteres';
        erroLi.classList.add('alert', 'alert-danger');
        erroLi.appendChild(erronome);
        } else{
        erroLi.classList.remove('alert', 'alert-danger');
        enviar = true;
    } 
}

$("#inputCNPJ").mask("99.999.999/9999-99");
$("#telefoneEmpresa").mask("(00) 0000-0000");
$("#telefoneResponsavel").mask("(00) 0000-00000");

