var palabras = ["ornitorrinco", "piscina", "verano", "espacio", "universo"];
var numAleatorio = 0;
var max=4;
var min=0;
var letraIntro=document.getElementById("entrada"); //caja donde introduzco la letra
var numIntro=0;
var cntFallos=document.getElementById("intentos");
var i=0;
var letraEncontrada=false;
var ahorcado= document.getElementById("palabra");
var resultado=document.getElementById("resultado");
numAleatorio=Math.random() * (max-min) + min;
numAleatorio=Math.round(numAleatorio);
var generada = palabras[numAleatorio];
var boton=document.getElementById("button");

console.log(generada);

// Generación de palabra con tantos ceros como la longitud de la palabra generada
for ( i = 0; i < generada.length; i++) {
  ahorcado.value= ahorcado.value+"0";
}
//alert (ahorcado);

function comprobar(){

  numIntro=letraIntro.value.charCodeAt(0);

 //Compruebo que es una letra minúscula
  if ((numIntro > 122) || (numIntro < 97)){
    alert ("Tiene que ser una letra minúscula");
    cntFallos++;
  }
  else {
    //Recorro palabra generada buscando la letra introducida.
    letraEncontrada=false;
    for ( i = 0; i < generada.length; i++) {
      //Si la letra exixte, se cambia
      if (letraIntro.value == generada.charAt(i)) {
          ahorcado.value= ahorcado.value.substr(0,i) + letraIntro.value + ahorcado.value.substr(i+1) ;
          letraEncontrada=true;
      }
    }

    //letra encontrada
    if(letraEncontrada){
      letraIntro.value="";
    } else {
      cntFallos.value++;
      letraIntro.value="";
    }
  }



if(cntFallos.value>=5)
{
  resultado.value="Has perdido";


}

if((ahorcado.value == generada))
{
  resultado.value="CORRECTO";
  boton=document.getElementById("button").disabled=true;

}
}
