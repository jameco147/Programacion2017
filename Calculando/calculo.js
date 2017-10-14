var num = 0;
num = prompt ("Introduce un valor del 1 al 100", '');
num = parseInt (num);
var cont = 1;


while (num > 100 | num < 1){
  num = prompt ("Introduce un valor del 1 al 100", '');
}
while(cont <= 10){
  console.log (num + " X "    + cont + " = " + num*cont  );

  cont++;

}
