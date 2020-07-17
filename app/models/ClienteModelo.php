<?php

class ClienteModelo
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function obtenerClientes()
    {
        $this->db->query('SELECT * from Cliente');
        $resultados = $this->db->registros();
        return $resultados;
    }


    public function mostrarUnCliente()
    {
        $this->db->query('SELECT * from Cliente where idcliente = 10');
        $resultados = $this->db->registros();
        return $resultados;
    }

    
    public function crearcliente($datos)
    {
        $this->db->query('INSERT INTO cliente (clientenombre, clienteapellidos, direccion,email,fechaingreso,deuda,estado) VALUES (:nombre,  :apellido, :direccion,
         :email, :fecha, :deuda, :estado);');
        
        // Vinculamos los valores que llegan del formulario con la consulta sql
        $this->db->bind(':nombre', $datos['nombre']);
        $this->db->bind(':apellido', $datos['apellido']);
        $this->db->bind(':direccion', $datos['direccion']);
        $this->db->bind(':email', $datos['email']);
        $this->db->bind(':fecha', $datos['fecha']);
        $this->db->bind(':deuda', $datos['deuda']);
        $this->db->bind(':estado', $datos['estado']);
        // Ejecutamos la consulta
        if ($this->db->execute()) {
            return 'Inserción exitosa';
        } else {
            return 'Error en la inserción';
        }
    }
   
    public function actualizarCliente($datos)
    {
        $this->db->query('UPDATE cliente SET clientenombre = :nombre, clienteapellidos = :apellido, direccion = :direccion,
        email = :email, fechaingreso=:fecha, deuda = :deuda, estado= :estado
        WHERE idcliente = :id');

        // Vinculamos los valores
        $this->db->bind(':id', $datos['id']);
        $this->db->bind(':nombre', $datos['nombre']);
        $this->db->bind(':apellido', $datos['apellido']);
        $this->db->bind(':direccion', $datos['direccion']);
        $this->db->bind(':email', $datos['email']);
        $this->db->bind(':fecha', $datos['fecha']);
        $this->db->bind(':deuda', $datos['deuda']);
        $this->db->bind(':estado', $datos['estado']);

        // Ejecutar
        if ($this->db->execute()) {
            return 'Actualizó con exito';
        } else {
            return 'Error en la actualización';
        }
    }
    
    public function eliminarCliente($datos)
    {
        $this->db->query('DELETE FROM cliente WHERE idcliente = :id');
        $this->db->bind(':id', $datos['id_cliente']);

        // Ejecutar
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function contarClientesActivos()
    {
        $this->db->query("SELECT COUNT(*) FROM cliente WHERE estado = 'A'");
        $resultados = $this->db->registros();
        return $resultados;
    }
    public function contarClientesInactivos()
    {
        $this->db->query("SELECT COUNT(*) FROM cliente WHERE estado = 'I'");
        $resultados = $this->db->registros();
        return $resultados;
    }
    
    public function contarClientesTotal()
    {
        $this->db->query('SELECT count(*) from Cliente');
        $resultados = $this->db->registros();
        return $resultados;
    }
}