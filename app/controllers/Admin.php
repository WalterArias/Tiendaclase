<?php
  session_start();
class Admin extends Controlador
{
    private $sesion;
    public function __construct()
    {
        // $this->sesion = new Sesion();
    }
   
    public function index()
    {
        if (isset($_SESSION['login'])) {
            redireccionar('/Admin');
        } else {
            redireccionar('/home');
        }
    }
}