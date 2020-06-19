<?php
/*
Controlador de la interaccion con el usuario de la tienda
@author Walter Arias
@version 0.1
*/
class Usuario extends Controlador
{
    public function __construct()
    {
        $this->clientemodelo = $this->modelo('ClienteModelo');
    }

    /*
     Método que muestra la VISTA correspondiente
     @param N/A
     @return /views/ClienteVista
     @throws Respuesta Negativa renderizando la vista
     */
    public function index()
    {
        $this->vista('Admin/Adminvista');
    }
    
    
    /*
    Método que consulta la BD para poder llenar el DATATABLE
    @param N/A
    @return Archivo Json con todos los clientes
    @throws Respuesta Negativa de la base de datos
    */
    public function llenarTablaCliente()
    {
        $datos = $this->clientemodelo->obtenerClientes();
        echo json_encode($datos);
    }


    /*
    Método que Crea o inserta un cliente en la base de datos, usando el modelo correspondiente
    @param los datos que llegan del formulario
    @return Respuesta de la base de datos en formato JSON para JS
    @throws Respuesta Negativa de la base de datos
    */
    public function crearCliente()
    {
        $id=$_POST['id'];
        
        if (empty($id)) {
            $datos = [
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'direccion' => $_POST['direccion'],
                'email' => $_POST['email'],
                'estado' => $_POST['estado'],
                'fecha' => $_POST['fecha'],
                'deuda' => $_POST['deuda']
        ];
            $datos = $this->clientemodelo->crearCliente($datos);
            echo json_encode($datos);
        } else {
            $datos = [
                'id' => $_POST['id'],
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'direccion' => $_POST['direccion'],
                'email' => $_POST['email'],
                'estado' => $_POST['estado'],
                'fecha' => $_POST['fecha'],
                'deuda' => $_POST['deuda']
                    
        ];
            $datos = $this->clientemodelo->actualizarCliente($datos);
            echo json_encode($datos);
        }
    }
   


    /*
    Método que Elimina un cliente en la base de datos, usando el modelo correspondiente
    @param El id del cliente que llegan del formulario
    @return Respuesta de la base de datos en formato JSON para JS
    @throws Respuesta Negativa de la base de datos
    */
    public function eliminarCliente()
    {
        $datos =[
            'id_cliente' => $_POST['id']
        ];

        $datos = $this->clientemodelo->eliminarCliente($datos);
        echo json_encode($datos);
    }
}