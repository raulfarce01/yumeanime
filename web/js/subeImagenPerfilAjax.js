function subeImagen(img, idUser) {

    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../model/subeImagenUser.php?cambiaFoto="+img+"&idUser="+idUser);
    xhttp.send();

  }