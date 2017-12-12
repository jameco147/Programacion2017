/*Enunciado. Realización de un BINGO SIN MEMORIA
Mediante la estructura WHILE o DO...WHILE realizaremos un bingo
La aplicación lanzará un prompt para esperar la acción del usuario
Si el usuario apreta "INTRO", es decir no hace nada, el programa muestra de forma infinita números aleatorios entre 1 y 90,
Si el usuario introduce "fin" o "FIN", el BINGO finalizará (NO UTILIZAR BREAK)*/

var accion = prompt("Aprieta la tecla intro");
var max = 90;
var min = 1;
var random = Math.round(Math.random() * (max-min) + min);



while (prompt(random).toUpperCase() != "FIN") {

  var random = Math.round(Math.random() * (max-min) + min);

}
