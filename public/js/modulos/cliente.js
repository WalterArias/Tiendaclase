const RUTA_URL = "http://localhost:8080/tiendaclase/cliente/";

var listarcliente = function () {
  var tabla = $("#mitabla").DataTable({
    ajax: {
      url: RUTA_URL + "llenarTablaCliente",
      dataSrc: "",
    },
    columns: [
      {
        defaultContent:
          "<button type='button' class ='editar btn btn-secundary' data-toggle='tooltip' data-placement='top' title='Edita un cliente'> <i class='icon-edit'></i></button>",
      },
      {
        defaultContent:
          "<button type='button' class ='eliminar btn btn-secondary' data-toggle='tooltip' data-placement='top' title='Elimina un cliente'> <i class='icon-trash'></i></button>",
      },
      {
        defaultContent:
          "<button type='button' class ='imprimir btn btn-secondary' data-toggle='tooltip' data-placement='top' title='Imprimir'> <i class='icon-print'></i></button>",
      },
      { data: "idcliente" },
      { data: "clientenombre" },
      { data: "clienteapellidos" },
    ],
    columnDefs: [
      { width: "5%", targets: 0 },
      { width: "5%", targets: 1 },
      { width: "5%", targets: 2 },
    ],
  });
  editar("#mitabla tbody", tabla);
};

var nuevo = function () {
  $("#nuevo").on("click", function () {
    mostrarForm(true);
  });
};

var editar = function (tbody, table) {
  $(tbody).on("click", "button.editar", function () {
    var dato = table.row($(this).parents("tr")).data();
    mostrarForm(true);
    var idcliente = $("#id").val(dato.idcliente);
    var nombre = $("#nombre").val(dato.clientenombre);
    var apellido = $("#apellido").val(dato.clienteapellidos);
  });
};

var guardar = function () {
  $("form").on("submit", function (e) {
    e.preventDefault();
    var datos = new FormData($("form")[0]);
    $.ajax({
      method: "POST",
      url: RUTA_URL + "crearCliente",
      data: datos,
      processData: false,
      contentType: false,
    })
      .done(function (data) {
        console.log(data);
        //aca iran los mensajes
      })
      .fail(function (data) {
        console.log(data);
      });
  });
};

var limpiar = function () {
  $("#id").val("");
  $("#nombre").val("");
  $("#apellido").val("");
};

var cancelar = function () {
  $("#cancelar").on("click", function () {
    limpiar();
    mostrarForm(false);
    $("#mitabla").DataTable().ajax.reload();
  });
};

var mostrarForm = function (estado) {
  if (estado) {
    $("#formulario").show();
    $("#vistatabla").hide();
  } else {
    $("#formulario").hide();
    $("#vistatabla").show();
  }
};

$(document).ready(function () {
  listarcliente();
  nuevo();
  editar();
  guardar();
  cancelar();
  limpiar();
  mostrarForm(false);
});
