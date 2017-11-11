var num= 0;
var texto= "";
var arbol= "*";

//Petición de número entre 2 y 6
while (isNaN (num) || num > 6 || num < 2) {
  texto= prompt ("Dí un número entre 2 y 6");
  num= parseInt (texto);
}

//Si llega aquí es porque tenemos un número entre 2 y 6

//
for (var i = 0; i < num; i++) {
  console.log (arbol);
  arbol=arbol+"*";
}
