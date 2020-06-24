const RUTA_URL = "http://localhost:8080/tiendaclase/";
var enviar = function () {
  $("#frmlogin").on("submit", function (e) {
    e.preventDefault();
    var datos = new FormData($("#frmlogin")[0]);
    $.ajax({
      url: RUTA_URL + "home/ValidarIngreso",
      method: "POST",
      data: datos,
      processData: false,
      contentType: false
    })
      .done(function (data) {
        window.location.href = RUTA_URL + "admin";
      })
      .fail(function (data) {
        alert("operacion fallida !");
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
