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
var fail=parseInt(prompt("¿Cuantos fallos quieres tener?"))

while (fail>10 || fail<5){
  alert("Tiene que ser un número entre 5 y 10")
  var fail=parseInt(prompt("¿Cuantos fallos quieres tener?"))

}

var rendirse="fin";

var generada = palabras[numAleatorio];
console.log (generada);

// Generación de palabra con tantos ceros como la longitud de la palabra generada
var ahorcado="";

for ( i = 0; i < generada.length; i++) {
  ahorcado= ahorcado+"0";
}

//
while ((cntFallos < fail) && (ahorcado != generada)) {

  letraIntro=prompt("Introduce una letra", " ");

  if (letraIntro == rendirse) {
    cntFallos=fail;

  }

  //Detecto si la letra introducida no es un numero.
   if (isNaN (letraIntro)){
    numIntro=parseInt(letraIntro.charCodeAt(0));
  }
  else {
    numIntro=0;
  }

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


if(cntFallos >= fail)
{
alert ("Has perdido");
}


if((ahorcado == generada))
{
  alert ("CORRECTO");
}
