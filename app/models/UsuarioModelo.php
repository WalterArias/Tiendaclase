<?php

class UsuarioModelo
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function obtenerUsuarios()
    {
        $this->db->query('SELECT * from Usuario');
        $resultados = $this->db->registros();
        return $resultados;
    }

    public function contarUsuarios()
    {
        $this->db->query('SELECT count(*) from Usuario');
        $resultados = $this->db->registros();
        return $resultados;
    }

    public function mostrarUnUsuario()
    {
        $this->db->query('SELECT * from Usuario where idUsuario = 10');
        $resultados = $this->db->registros();
        return $resultados;
    }

    
    public function crearUsuario($datos)
    {
        $this->db->query('INSERT INTO Usuario (Usuarionombre, Usuarioapellidos, direccion,email,fechaingreso,deuda,estado) VALUES (:nombre,  :apellido, :direccion,
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
   
    public function actualizarUsuario($datos)
    {
        $this->db->query('UPDATE Usuario SET Usuarionombre = :nombre, Usuarioapellidos = :apellido, direccion = :direccion,
        email = :email, fechaingreso=:fecha, deuda = :deuda, estado= :estado
        WHERE idUsuario = :id');

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
    
    public function eliminarUsuario($datos)
    {
        $this->db->query('DELETE FROM Usuario WHERE idUsuario = :id');
        $this->db->bind(':id', $datos['id_Usuario']);

        // Ejecutar
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    /**
     * validarIngreso
     *
     * @param  mixed $datos
     * @return void
     */
    public function validarIngreso($datos)
    {
        $this->db->query('SELECT * FROM Usuario WHERE usuario_login = :usuario ');
        $this->db->bind(':usuario', $datos['usuario']);
        $resultados = $this->db->registros();
        if (count($resultados)<=0) {
            return false;
        } else {
            if (password_verify($datos['password'], $resultados[0]->usuario_pass)) {
                return $resultados;
            } else {
                return false;
            }
        }
    }
}