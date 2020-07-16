<?php

    class Home extends Controlador
    {
        private $sesion;
        public function __construct()
        {
            $this->usuariomodelo = $this->modelo('UsuarioModelo');
        }
        
        
        public function index()
        {
            $this->vista('Home/Homevista');
        }
                
       
        public function ValidarIngreso()
        {
            if (isset($_POST['usuario']) && isset($_POST['password'])) {
                $usuario= filter_var(trim($_POST['usuario']), FILTER_SANITIZE_STRING);
                $clave= filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
                $datos =[
                    'usuario' => strtolower($usuario),
                    'password' =>  $clave];
                $datos = $this->usuariomodelo->validarIngreso($datos);
                if ($datos[0]->usuario_login!='') {
                    session_start();
                    $_SESSION['login'] =  $datos[0]->usuario_login;
                    $_SESSION['nombre'] =  $datos[0]->usuario_nombre;
                    $_SESSION['apellido'] =  $datos[0]->usuario_apellido;
                    $_SESSION['email'] =  $datos[0]->usuario_email;
                    echo json_encode('true');
                } else {
                    echo json_encode('false');
                }
            } else {
                echo json_encode('false');
            }
        }
    }