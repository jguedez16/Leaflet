<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="src/Leyenda.css">
        <script src="src/leyenda.js"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container d-flex flex-wrap">
            <ul class="nav">
                <li class="nav-item">
                    <a href="index.php">INICIO</a>
                </li>
                <li class="nav-item">
                    <a href="agregar.php">VER REGISTROS</a>
                </li>
                <li>
                    <a class="nav-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">AGREGAR NUEVO REGISTRO</a>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">REGISTRO DE INFORMACIÓN</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">                
                            <div class="card card-body">
                                <form action="guardar.php" method="post">
                                    <div class="mb-3">
                                        <label class="form-label">Acueducto:</label>
                                        <input class="form-control" type="text" name="acueducto" placeholder="Acueducto" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nombre:</label>
                                        <input class="form-control" type="text" name="nombre" placeholder="Nombre" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tipo de Infraestructura:</label>
                                        <br>
                                        <select class="form-select" name="infraestructura">
                                            <option value=" ">Seleccionar</option>
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
                                            <option value=" ">Seleccionar</option>
                                            <option value="Naranja">Naranja</option>
                                            <option value="Verde">Verde</option>
                                            <option value="Rojo">Rojo</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Latitud:</label>
                                        <input class="form-control" type="float" name="latitud" placeholder="Latitud" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Longitud:</label>
                                        <input class="form-control" type="float" name="longitud" placeholder="Longitud" required>
                                    </div>
                                    <div class="mb-3 text-center">
                                        <input class="btn btn-primary" type="submit" name="enviar" value="Enviar">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <!--<li>
                    <form class="d-flex" role="search" method="get">
                        <input class="form-control me-2" name="busqueda" type="search" placeholder="Buscar lugar" aria-label="Search">
                        <button class="btn btn-info" type="submit">Buscar</button>
                    </form>
                </li> -->

                

            </ul>
        </div>
  </nav>
