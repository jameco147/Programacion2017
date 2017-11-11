var num1 =4;
var num2= 2;
var texto1= "";
var texto2= "";

do{
  texto1= prompt ("Introduce el primer número par");
  texto2= prompt ("Introduce el segundo número par");

  num1= parseInt (texto1);
  num2= parseInt (texto2);
}while (isNaN (num1) || isNaN (num2) || num1 %2 !=0 ||  num2 %2 !=0 || num1==num2 );


alert ("Todo correcto");
