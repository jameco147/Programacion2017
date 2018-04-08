
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
    return false;
  }

  if (apellidos.length == 0) {
    alert ("Error, rellena el campo apellidos");
    return false;
  }

  if (edad.length == 0) {
    alert ("Error, rellena el campo edad");
    return false;
  }

  if (curso.length == 0) {
    alert ("Error, rellena el campo curso");
    return false;
  }

  if (puntos.length == 0) {
    alert ("Error, rellena el campo puntos");
    return false;
  }

  if (correo.length == 0) {
    alert ("Error, rellena el campo correo");
    return false;

  }

}
