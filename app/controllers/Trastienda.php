<?php

    class Trastienda extends Controlador
    {
        public function __construct()
        {
        }

        public function index()
        {
           
            $this->vista('Trastienda/tiendavista');
        }
    }
