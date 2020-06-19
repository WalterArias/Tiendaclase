<?php

    class Home extends Controlador
    {
        public function __construct()
        {
            $this->usuariomodelo = $this->modelo('UsuarioModelo');
        }

        public function index()
        {
            $this->vista('home/homevista');
        }
        
        public function ValidarIngreso()
        {
            $datos =[
               'usuario' => $_POST['usuario'],
               'password' =>  $_POST['password']];
            $datos = $this->usuariomodelo->validarIngreso($datos);
            if ($datos = true) {
                $this->vista('Admin/Adminvista');
            } else {
                echo  jsonencode('error en la validacion !');
            }
        }
    }