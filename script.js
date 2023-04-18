function mostrarContrasena(id, pass) {
    var x = document.getElementById(id);
    var y = document.getElementById(pass);
    if (x.type === "password") {
      x.type = "text";
      y.innerHTML = "Ocultar contraseña";
    } else {
      x.type = "password";
      y.innerHTML = "Ver contraseña";
    }
  }
  