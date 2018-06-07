function comprobar() {
  var valor=document.getElementById('nombre').value;
  var valor2=document.getElementById('edad').value;
  var valor3=document.getElementById('apellidos').value;
  var valor4=document.getElementById('curso').value;
  var valor5=document.getElementById('puntuacion').value;
  if (valor == "") {
    alert("Rellena el campo nombre");
    return false;
  } else if (valor2 == "") {
    alert("Rellena el campo edad");
    return false;
  } else if (valor3 == "") {
    alert("Rellena el campo apellidos");
    return false;
  } else if (valor4 == "") {
    alert("Rellena el campo edad");
    return false;
  } else if (valor5 == "") {
    alert("Rellena el campo puntuacion");
    return false;
  } else {
    return true;
  }
}
