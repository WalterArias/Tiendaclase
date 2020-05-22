<?php require RUTA_APP . '/views/inc/header.php' ;?>
<!-- Inicio del codigo del sitio -->
<div class="container-fluid">
    <!-- Barra de Navegacion -->
    <nav class="navbar navbar-expand-lg">
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
            <div class="col-md-1"></div>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ingresar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="<?php echo RUTA_URL . '/home_tienda' ?>">>Ingresar al sistema</a>

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
                                    <button type="button" class="btn btn-success">Agregar al Carrito</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="card">

                                <img src="<?= RUTA_URL; ?>/img/sport.jpg">

                                <div class="card-body">
                                    Ropa dama <br>
                                    Precio <b>$ 5000</b>
                                    <button type="button" class="btn btn-success">Agregar al Carrito</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="card">

                                <img src="<?= RUTA_URL; ?>/img/sueter.jpg">

                                <div class="card-body">
                                    Ropa dama <br>
                                    Precio <b>$ 5000</b>
                                    <button type="button" class="btn btn-success">Agregar al Carrito</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="card">

                                <img src="<?= RUTA_URL; ?>/img/sport.jpg">

                                <div class="card-body">
                                    Ropa dama <br>
                                    Precio <b>$ 5000</b>
                                    <button type="button" class="btn btn-success">Agregar al Carrito</button>
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

</div>
<br>



<!-- Fin del codigo del sitio -->
<?php require RUTA_APP . '/views/inc/footer.php' ;?>