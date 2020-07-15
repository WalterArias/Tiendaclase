<?php

    class Home extends Controlador
    {
        private $sesion;
        public function __construct()
        {
            //$this->sesion = new Sesion();
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
                    /*       $this->sesion->init();
                             $this->sesion->add('login', $datos[0]->usuario_login);
                             $this->sesion->add('nombre', $datos[0]->usuario_nombre);
                             $this->sesion->add('apellido', $datos[0]->usuario_apellido); */
                    session_start();
                    $login =  $datos[0]->usuario_login;
                    $_SESSION['login'] = $login;
                    echo json_encode('true');
                }


                // echo json_encode($datos);
            }
        }
    }