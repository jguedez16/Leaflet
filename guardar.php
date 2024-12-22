<?php

include("db.php");

if(isset($_POST['enviar'])){
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
        
        header("location: index.php");
        
    }else{

        $query = "INSERT INTO info (acueducto, nombre, infraestructura, color, longitud, latitud) VALUES ('$acueducto', '$nombre', '$infraestructura', '$color', '$longitud', '$latitud')";
        $result = mysqli_query($conn, $query);
    
        $_SESSION['message'] = 'Registro realizado existosamente';
        $_SESSION['message_type'] = 'success';

        header ("location: index.php");
    }


}

?>



