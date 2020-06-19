const RUTA_URL = "http://localhost:8080/tiendaclase/vcbvcusuario/";
var enviar = function () {
  $("#frmldddogin").on("submit", function (e) {
    e.preventDefault();
    var datos = new FormData($("frmlogin")[0]);
    $.ajax({
      url: RUTA_URL + "indeddx",
      method: "POST",
      data: datos,
      processData: false,
      contentType: false,
    })
      .done(function (data) {
        console.log(data);
      })
      .fail(function (data) {
        alert("operacion fallida !");
        mostrarForm(false);
      });
  });
};

var agregar = function () {
  $("#agregar").on("click", function () {
    alert("articulo agregado al carro !");
  });
};

$(document).ready(function () {
  enviar();
  agregar();
});
