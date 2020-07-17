<?php require RUTA_APP . '/views/inc/header2.php'; ?>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">


                <div class="panel" id="vistatabla">
                    <div class="panel-header">
                        <b>Cliente</b> <button type="button" id="nuevo" class="btn btn-success" data-toggle='tooltip'
                            title=' Agregar un cliente'> <i class="icon-plus"></i> </button>
                    </div>
                    <div class="panel-body">
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


                <div class="panel" id="formulario">
                    <div class="panel-header">
                        <b>Cliente</b>
                    </div>
                    <div class="panel-body">
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
                                            <option>A</option>
                                            <option>I</option>

                                        </select>
                                    </label>
                                    <br>
                                    <label for="my-input">Fecha Ingreso</label>
                                    <input id="fecha" class="form-control" type="date" name="fecha">
                                    <label for="my-input">Deuda</label>
                                    <input id="deuda" class="form-control" type="text" name="deuda">


                                </div>
                            </div>
                            <div class="panel-footer">
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

<!-- jQuery 3 -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<!-- AdminLTE App -->
<script src="<?php echo RUTA_URL; ?>/js/adminlte.min.js"></script>

<script type="text/javascript"
    src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/datatables.min.js"></script>

<script src="<?php echo RUTA_URL; ?>/js/modulos/cliente.js"></script>

<?php require RUTA_APP . '/views/inc/footer2.php'; ?>