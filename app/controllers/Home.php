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
            if (isset($_POST['usuario'])&& isset($_POST['password'])) {
                $usuario= filter_var(trim($_POST['usuario']), FILTER_SANITIZE_STRING);
                $clave= filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
                $datos =[
                    'usuario' => $usuario,
                    'password' =>  $clave];
                $datos = $this->usuariomodelo->validarIngreso($datos);
                echo json_encode($datos);
            }
        }
    }