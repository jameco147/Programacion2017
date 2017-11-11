var palabras = ["ornitorrinco", "piscina", "verano", "espacio", "universo"];
var numAleatorio = 0;
var max=4;
var min=0;
var letraIntro="";
var numIntro=0;
var cntFallos=0;
var i=0;
var letraEncontrada;
numAleatorio=Math.random() * (max-min) + min;
numAleatorio=Math.round(numAleatorio);

var generada = palabras[numAleatorio];
alert (generada);

// Generación de palabra con tantos ceros como la longitud de la palabra generada
var ahorcado="";


for ( i = 0; i < generada.length; i++) {
  ahorcado= ahorcado+"0";
}
//alert (ahorcado);

while ((cntFallos < 5) && (ahorcado != generada)) {

  letraIntro=prompt("Introduce una letra", " ");

  numIntro=letraIntro.charCodeAt(0);

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
      if (letraIntro == generada.charAt(i)) {
          ahorcado= ahorcado.substr(0,i) + letraIntro + ahorcado.substr(i+1) ;
          letraEncontrada=true;
      }
    }

    //letra encontrada
    if(letraEncontrada){
      alert ("Letra Encontrada: " + ahorcado);
    } else {
      cntFallos++;
      alert ("Letra NO Encontrada,llevas:  " + cntFallos + " fallos");
    }
  }
}


if(cntFallos>=5)
{
  alert ("Has perdido");
}

if((ahorcado == generada))
{
  alert ("CORRECTO");
}
