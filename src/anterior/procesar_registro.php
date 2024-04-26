<?php
// Incluir la clase ConexionMySQL y Estudiante
require_once 'ConexionMySQL.php';
require_once 'model/estudiante.php';

// Obtener los datos del formulario
$ci = $_POST['ci'];
$nombre = $_POST['nombre'];
$fecha_nac = $_POST['fecha_nac'];
$direccion = $_POST['direccion'];
$error=[];
if(is_null($ci)){
    array_push($error, "El numero de carnet es requerido");
}
if(!is_numeric($ci)){
    array_push($error, "El numero de carnet debe ser un numero");
}
if (count($error)>0){
    for ($i=0; $i < count($error); $i++) { 
        echo "".$error[$i]."";
    }
    die;
}
// Crear una instancia de la clase ConexionMySQL y conectar a la base de datos
$conexion = new ConexionMySQL();
$conexion->conectar();

// Crear una instancia de la clase Estudiante con los datos del formulario
$estudiante = new Estudiante($ci, $nombre, $fecha_nac, $direccion);

// Insertar el estudiante en la base de datos
$insert_query = "INSERT INTO estudiante (ci, nombre, fecha_nac, direccion) VALUES ('$ci', '$nombre', '$fecha_nac', '$direccion')";
if ($conexion->conexion->query($insert_query) === TRUE) {
    $mensaje = "¡Estudiante registrado exitosamente.!";
    //header("Location: formulario.php?mensaje=" . urlencode($mensaje));
    header("Location: formularioCliente/formulario.php?mensaje=" . urlencode($mensaje));
    exit;
} else {
    echo "Error al registrar estudiante: " . $conexion->conexion->error;
}

// Desconectar la conexión
$conexion->desconectar();
?>
