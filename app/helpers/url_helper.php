<?php
//helper que redirecciona las paginas
function redireccionar()
{
    header('location:'.RUTA_URL.$pagina);
}