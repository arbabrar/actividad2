<?php

class ConexionMySQL {
    private $host = "mysql";
    private $base_datos = "lamp_db";
    private $usuario = "lamp_user";
    private $password = "lamp_password";

    public $conexion;

   

    public function conectar() {
        // Intenta establecer la conexión
        $this->conexion = new mysqli($this->host, $this->usuario, $this->password, $this->base_datos);
        
        // Verifica si hay errores de conexión
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
        
        
    }

    public function desconectar() {
        // Cierra la conexión si está abierta
        if ($this->conexion) {
            $this->conexion->close();
        }
    }
}
