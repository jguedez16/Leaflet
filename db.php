<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$conn = mysqli_connect(
    '127.0.0.1',
    'root',
    '',
    'prueba_leaflet'
);

?>