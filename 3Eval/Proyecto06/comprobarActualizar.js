function actualizarblanco(){


var nombre = document.getElementById('nuevonombre').value;
var apellido = document.getElementById('nuevoapellido').value;
var edad = document.getElementById('nuevoedad').value;
var curso = document.getElementById('nuevocurso').value;
var puntuacion = document.getElementById('nuevopunt').value;
var correo = document.getElementById('nuevocorreo').value;

  if (nombre.length == 0) {
    alert ("Error,  rellena el campo nombre");
    return false;
  }

  if (apellido.length == 0) {
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

  if (puntuacion.length == 0) {
    alert ("Error, rellena el campo puntuacion");
    return false;
  }

  if (correo.length == 0) {
    alert ("Error, rellena el campo correo");
    return false;
  }
}
