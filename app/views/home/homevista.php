<?php require RUTA_APP . '/views/inc/header.php' ;?>
<!-- Inicio del codigo del sitio -->
<div class="container-fluid">
    <!-- Barra de Navegacion -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="<?= RUTA_URL;?>/img/logo-caprichos.png" alt="LogoSimbolo de la Tienda" />aprichos
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item  active">
                    <a class="nav-link " href="#">Inicio </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tiendas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Cali</a>
                        <a class="dropdown-item" href="#">Medellin</a>
                        <a class="dropdown-item" href="#">Barranquilla</a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Quienes Somos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Mision</a>
                        <a class="dropdown-item" href="#">Vision</a>
                        <a class="dropdown-item" href="#">Valores</a>
                    </div>
                </li>


            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" size="50" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>



            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Administracion
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" data-toggle="modal" data-target="#login">Ingresar al sistema</a>
                        <a class="dropdown-item" href="#">Ver Carrito de Compras</a>
                        <a class="dropdown-item" href="#">Salir</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

</div>
<br>

<!--    Contenido del sitio   -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="card">
                <h5 class="card-header">Categorias</h5>
                <div class="card-body">
                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>




        <!-- lateral -->
        <div class="col-md-10">
            <div class="card">
                <h5 class="card-header">Productos</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">

                                <img src="<?= RUTA_URL; ?>/img/clasica.jpg">

                                <div class="card-body">
                                    Ropa dama <br>
                                    Precio <b>$ 5000</b>
                                    <button type="button" class="btn btn-success" id="agregar">Agregar al
                                        Carrito</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="card">

                                <img src="<?= RUTA_URL; ?>/img/sport.jpg">

                                <div class="card-body">
                                    Ropa dama <br>
                                    Precio <b>$ 5000</b>
                                    <button type="button" class="btn btn-success" id="agregar">Agregar al
                                        Carrito</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="card">

                                <img src="<?= RUTA_URL; ?>/img/sueter.jpg">

                                <div class="card-body">
                                    Ropa dama <br>
                                    Precio <b>$ 5000</b>
                                    <button type="button" class="btn btn-success" id="agregar">Agregar al
                                        Carrito</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="card">

                                <img src="<?= RUTA_URL; ?>/img/sport.jpg">

                                <div class="card-body">
                                    Ropa dama <br>
                                    Precio <b>$ 5000</b>
                                    <button type="button" class="btn btn-success" id="agregar">Agregar al
                                        Carrito</button>
                                </div>
                            </div>

                        </div>


                    </div>
                    <br>

                </div>
            </div>
        </div>


    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginLabel">Ingreso al Sistema</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmlogin" method="POST">
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input id="usuario" class="form-control" type="text" name="usuario"
                            placeholder='Usuario registrado' required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" name="password"
                            placeholder='Password del usuario' required>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <input id="enviar" class="btn btn-success" type="submit" value="Ingresar">

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

</div>
<br>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>

<script src="dist/js/adminlte.min.js"></script>

<script src="<?php echo RUTA_URL; ?>/js/modulos/inicio.js"></script>


<!-- Fin del codigo del sitio -->
<?php require RUTA_APP . '/views/inc/footer.php' ;?>