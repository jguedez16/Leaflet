<?php

include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM info WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $acueducto = $row['acueducto'];
        $nombre = $row['nombre'];
        $infraestructura = $row['infraestructura'];
        $color = $row['color'];
        $longitud = $row['longitud'];
        $latitud = $row['latitud'];
    }
}

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $acueducto = $_POST['acueducto'];
    $nombre = $_POST['nombre'];
    $infraestructura = $_POST['infraestructura'];
    $color = $_POST['color'];
    $longitud = $_POST['longitud'];
    $latitud = $_POST['latitud'];

    $acueducto = ucfirst(strtolower($acueducto));
    $nombre = ucfirst(strtolower($nombre));
    $infraestructura = ucfirst(strtolower($infraestructura));

    
    if($infraestructura == " "){
        $_SESSION['message'] = 'Debe seleccionar un tipo de infraestructura';
        $_SESSION['message_type'] = 'danger';
        
        header("location: agregar.php");
        
    }else{

        $query = "UPDATE info SET acueducto='$acueducto', nombre='$nombre', infraestructura='$infraestructura', color='$color', latitud='$latitud',`longitud`='$longitud' WHERE id = $id";
        $result = mysqli_query($conn, $query);
    
        $_SESSION['message'] = 'Registro actualizado existosamente';
        $_SESSION['message_type'] = 'success';

        header ("location: agregar.php");
    }
}

include("header.php");

?>

    <div id="form" class="container">
        <div class="row">
            <div class="col-4">
                <div class="card card-body">
                    <h3>Formulario de registro</h3>
                    <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="post">
                        <div class="mb-3">
                            <label class="form-label">Acueducto:</label>
                            <input class="form-control" type="text" name="acueducto" value ="<?php echo $acueducto ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nombre:</label>
                            <input class="form-control" type="text" name="nombre"  value= "<?php echo $nombre ?>" required>
                        </div>
                         <div class="mb-3">
                            <label class="form-label">Tipo de Infraestructura:</label>
                            <br>
                            <select name="infraestructura" required>
                                <option value="<?php echo $infraestructura ?>"><?php echo $infraestructura ?></option>
                                <option value="Estación de bombeo">Estación de Bombeo</option>
                                <option value="Planta de tratamiento">Planta de Tratamiento</option>
                                <option value="Represa">Represa</option>
                                <option value="Tanque">Tanque</option>
                                <option value="Válvula">Válvula</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Color:</label>
                            <br>
                            <select class="form-select" name="color">
                                <option value="<?php echo $color ?>"><?php echo $color ?></option>
                                <option value="Naranja">Naranja</option>
                                <option value="Verde">Verde</option>
                                <option value="Rojo">Rojo</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Latitud:</label>
                            <input class="form-control" type="float" name="latitud" value= "<?php echo $latitud ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Longitud:</label>
                            <input class="form-control" type="float" name="longitud" value= "<?php echo $longitud ?>" required>
                        </div>
                        <div class="mb-3 text-center">
                            <input class="btn btn-primary" type="submit" name="update" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</footer>
</html>