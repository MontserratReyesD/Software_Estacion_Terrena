var buttonAltura = document.getElementById("cal_altura");
//var valor = document.getElementById("altu_es");
//const inputPeso = document.getElementById("peso");
var inputAltura = document.getElementById("tamano_cohete");
var inputTiempo = document.getElementById("tiempo");
buttonAltura.addEventListener("click", calcular);
/*
document.getElementById("cal_altura").onclick= function (){
    this.disabled = true;
    var tiempo = inputTiempo.value * inputTiempo.value;
    var altura = 4.9 * tiempo;
    document.getElementById("altu_es").value =altura;
}
*/

function calcular (){
    
   // const gravedad = 9.8;
    //var valor = inputAltura.value * inputTiempo.value;
   // alert(valor);
   //console.log(valor);
    //document.getElementById("altu_es").value =valor;
    

    var tiempo = inputTiempo.value * inputTiempo.value;
    var altura = 4.9 * tiempo;
    document.getElementById("altu_es").value =altura;
    buttonAltura.disabled=true;
   
    }
   


