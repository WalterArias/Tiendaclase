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
                $clavehash = password_hash($clave, PASSWORD_DEFAULT);
                $datos =[
                    'usuario' => $usuario,
                    'password' =>  $clavehash];
            } else {
                echo json_encode('La información no cumple los criterios');
            }
        
            $datos = $this->usuariomodelo->validarIngreso($datos);
            if (isset($datos)) {
                echo json_encode($datos);
                var_dump($datos);
            } else {
                echo json_encode('Datos Invalidos !');
            }
        }
    }