<?php
// Incluir el encabezado
$pageTitle = "Formulario de registro";
include "templates/header.php";
?>
<div class="container">
        <?php
            if(isset($_GET['mensaje'])) {
                // Mostrar el mensaje
                echo "<p>" . htmlspecialchars($_GET['mensaje']) . "</p>";
            }
        ?>
        <div class="row mt-5">
            <div class="col-lg-5">
                <div class="card text-bg-primary mb-3">
                    <div class="card-header">Registro de Estudiantes</div>
                    <div class="card-body">
                        <form action="../procesar_registro.php" method="POST" autocomplete="off">
                            <div class="mb-3">
                                <label for="ci" class="form-label">Carnet de Identidad</label>
                                <input type="text" class="form-control" id="ci" name="ci" placeholder="Numero de ci" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                            </div>

                            <div class="mb-3">
                                <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" placeholder="dd/mm/yyyy" required>
                            </div>
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Direccion</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
                            </div>
                            <div class="mb-3">
                            <input type="submit" value="Registrar" class="btn btn-warning">
                            </div>

                            
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <?php
                    include "views/tablaestudiantes.php";
                ?>
                
            </div>
        </div>
    

    
    </div>


<?php
// Incluir el pie de página
include "templates/footer.php";
?>
