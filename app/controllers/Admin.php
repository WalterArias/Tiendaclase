<?php

class Admin extends Controlador
{
    public function __construct()
    {
        // $this->clientemodelo = $this->modelo('ClienteModelo');
    }
   
    public function index()
    {
        ob_start();
        session_start();
        if (isset($_SESSION["nombre"])) {
            $this->vista('Admin/AdminVista');
        } else {
            $this->vista('Home/HomeVista');
        }
    }
}