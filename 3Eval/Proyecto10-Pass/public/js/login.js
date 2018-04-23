
function comprobarLogin(){


  var user = document.getElementById('nombre').value;
  var password = document.getElementById('pass').value;


  if (user.length == 0) {
    alert("No dejes el campo usuario vacío");
    return false;
  }

  if (password.length == 0) {
    alert("No dejes el campo contraseña vacío");
    return false;
  }


}
