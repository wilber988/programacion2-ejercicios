function mostrarPistas(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtPista").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("txtPista").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET",http://ajax.localhost/"obtenerPistas.php?q="+str, true);
  xhttp.send();   
}
