
function espaciosVacios(){
  
  var nombre = document.getElementById('nombre').value;
  var apellidos = document.getElementById('apellido').value;
  var edad = document.getElementById('edad').value;
  var curso = document.getElementById('curso').value;
  var puntos = document.getElementById('punt').value;
  var correo = document.getElementById('correo').value;

  console.log(nombre.length);
  if (nombre.length == 0) {
    alert ("Error,  rellena el campo nombre");
  }

  if (apellidos.length == 0) {
    alert ("Error, rellena el campo apellidos");
  }

  if (edad.length == 0) {
    alert ("Error, rellena el campo edad");
  }

  if (curso.length == 0) {
    alert ("Error, rellena el campo curso");
  }

  if (puntos.length == 0) {
    alert ("Error, rellena el campo puntos");
  }

  if (correo.length == 0) {
    alert ("Error, rellena el campo correo");

  }

}
