<?php require RUTA_APP . '/views/inc/header2.php'; ?>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-1">
            </div>

            <div class="col-md-11">
                <div class="card" id="vistatabla">
                    <div class="card-header">
                        <b>Cliente</b> <button type="button" id="nuevo" class="btn btn-success" data-toggle='tooltip'
                            title=' Agregar un cliente'> <i class="icon-plus"></i> </button>
                    </div>
                    <div class="card-body">
                        <table id="mitabla" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>id</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                </tr>
                            </thead>
                        </table>

                    </div>

                </div>


                <div class="card" id="formulario">
                    <div class="card-header">
                        <b>Cliente</b>
                    </div>
                    <div class="card-body">
                        <form class="formeditar" method="POST">
                            <div class="row">
                                <div class="col-md-5">

                                    <label for="my-input">Identificacion</label>
                                    <input id="id" class="form-control" type="text" name="id" readonly>
                                    <label for="my-input">Nombre</label>
                                    <input id="nombre" class="form-control" type="text" name="nombre" required>
                                    <label for="my-input">Apellidos</label>
                                    <input id="apellido" class="form-control" type="text" name="apellido" required>
                                    <label for="my-input">Dirección</label>
                                    <input id="direccion" class="form-control" type="text" name="direccion" required>
                                    <label for="my-input">Email</label>
                                    <input id="email" class="form-control" type="email" name="email" required>

                                </div>
                                <div class="col-md-5">
                                    <label class="form-check-label">
                                        <label>Estado del cliente</label>
                                        <select class="form-control" id="estado" name="estado">
                                            <option>Activo</option>
                                            <option>Inactivo</option>

                                        </select>
                                    </label>
                                    <br>
                                    <label for="my-input">Fecha Ingreso</label>
                                    <input id="fecha" class="form-control" type="date" name="fecha">
                                    <label for="my-input">Deuda</label>
                                    <input id="deuda" class="form-control" type="text" name="deuda">


                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" type="button" id="imprimir"><i class="icon-print"></i>
                                    Imprimir</button>
                                <button class="btn btn-primary" type="button" id="cancelar"><i class="icon-reply"></i>
                                    Cancelar</button>

                                <input id="guardar" class="btn btn-success" type="submit" value="Guardar">
                        </form>
                    </div>

                </div>
            </div>

        </div>
</div>
</section>
</div>

<?php require RUTA_APP . '/views/inc/footer2.php'; ?>