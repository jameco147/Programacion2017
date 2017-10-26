var letraRandom=" ";
var letraIntro=" ";
var introduceNum=0;
var contador=0;

//Generación de letra aleatoria
var max=122;
var min=97;
letraRandom=Math.random() * (max-min) + min;
letraRandom=Math.round(letraRandom);
letraRandom= String.fromCharCode(letraRandom);

//alert (letraRandom);

while (contador < 5){

  letraIntro=prompt("Introduce una letra", " ");

  introduceNum=letraIntro.charCodeAt(0);

  if ((introduceNum > 122) || (introduceNum < 97)){
    alert ("Tiene que ser una letra minúscula");
  }

  if (letraRandom == letraIntro){
    alert ("¡Has acertado!");
    break;
  }
  else {
    alert ("¡Has fallado, sigue intentándolo!")
  }

  contador++;

  if (contador >= 5){
    alert ("Número de intentos superado, has perdido.")
  }

}
