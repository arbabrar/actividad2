<?php
    require_once '../model/estudiante.php';
    $estudiante = new Estudiante("4656","dasdads","130/213","adadads");
    $resultados = $estudiante->getRegistros();
?>
    <h2 class="text-center">Estudiantes Registrados</h2>
            <table class="table">
                <thead>
                    <tr class="table-dark">
                        <th>Carnet de Identidad</th>
                        <th>Nombre</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Dirección</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                   
                    if ($resultados->num_rows > 0) {
                        while ($fila = $resultados->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $fila['ci'] . "</td>";
                            echo "<td>" . $fila['nombre'] . "</td>";
                            echo "<td>" . $fila['fecha_nac'] . "</td>";
                            echo "<td>" . $fila['direccion'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No hay estudiantes registrados.</td></tr>";
                    }

                  
                    ?>
                </tbody>
            </table>
            
            





    

?>