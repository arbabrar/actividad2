<?php
 require_once '../controller/db/ConexionMySQL.php';
class Estudiante{
    private $ci;
    private $nombre;
    private $fecha_nac;
    private $direccion;
    private $conexion = new ConexionMySQL();
    public function __construct($ci, $nombre, $fecha_nac, $direccion) {
        $this->ci = $ci;
        $this->nombre = $nombre;
        $this->fecha_nac = $fecha_nac;
        $this->direccion = $direccion;

    }

    public function Estudiante(){

    }

    public function getCi() {
        return $this->ci;
    }

    public function setCi($ci) {
        $this->ci = $ci;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getFechaNac() {
        return $this->fecha_nac;
    }

    public function setFechaNac($fecha_nac) {
        $this->fecha_nac = $fecha_nac;
    }
    public function getRegistros(){
        $this->conexion->conectar();
        $consulta = "SELECT * FROM estudiante";
        $result= $this->conexion->conexion->query($consulta);;
        $this->conexion->desconectar();
        return  $result;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

}
 