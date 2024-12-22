<?php

include("db.php");

include("header.php");

?>

    <div id="form" class="container">
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th id="top">Acueducto</th>
                    <th>Nombre</th>
                    <th>Tipo de Infraestructura</th>
                    <th>Color</th>
                    <th>Latitud</th>
                    <th>Longitud</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM info";
                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result)){
                ?>
                <tr class="text-center">
                    <td><?php echo $row['acueducto'] ?> </td>
                    <td><?php echo $row['nombre'] ?> </td>
                    <td><?php echo $row['infraestructura'] ?> </td>
                    <td><?php echo $row['color'] ?> </td>
                    <td><?php echo $row['latitud'] ?> </td>
                    <td><?php echo $row['longitud'] ?> </td>
                    <td>
                        <a href="editar.php?id=<?php echo $row['id'] ?>"><img id="img" src="marker/lapiz.png" title="Editar"></a>
                        <a href="eliminar.php?id=<?php echo $row['id'] ?>"><img id="img" src="marker/papelera.png" title="Eliminar"></a>
                    </td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li id="pg" class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li id="pg" class="page-item"><a class="page-link" href="#">1</a></li>
                <li id="pg" class="page-item"><a class="page-link" href="#">2</a></li>
                <li id="pg" class="page-item"><a class="page-link" href="#">3</a></li>
                <li id="pg" class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>

    <footer>
    <?php
    include("leafle.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</footer>
</html>