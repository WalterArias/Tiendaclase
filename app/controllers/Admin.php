<?php

class Admin extends Controlador
{
    public function __construct()
    {
        
        // $this->clientemodelo = $this->modelo('ClienteModelo');
    }
   
    public function index()
    {
        session_start();
        if (isset($_SESSION['login'])) {
            $this->vista('Admin/AdminVista');
        } else {
            die('falla en la variable de session');
        }
    }
}