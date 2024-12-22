<?php

include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM info WHERE id = $id";
    $result = mysqli_query($conn, $query);

    header("location: agregar.php");
}

?>
