<?php

include("db.php");

?>

<script>

var map = L.map('map').setView([10.510353712739688, -66.8865232171149], 13);

var est_bombeo = L.icon({
    iconUrl: 'marker/Estacion de bombeo.png',
    iconSize:     [50, 50], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [3, -25] // point from which the popup should open relative to the iconAnchor
});

var EB_naranja = L.icon({
    iconUrl: 'marker/EB-naranja.png',
    iconSize:     [50, 50], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [3, -25] // point from which the popup should open relative to the iconAnchor
});

var EB_verde = L.icon({
    iconUrl: 'marker/EB-verde.png',
    iconSize:     [50, 50], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [3, -25] // point from which the popup should open relative to the iconAnchor
});

var EB_rojo = L.icon({
    iconUrl: 'marker/EB-rojo.png',
    iconSize:     [50, 50], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [3, -25] // point from which the popup should open relative to the iconAnchor
});

var p_tratamiento = L.icon({
    iconUrl: 'marker/Planta de tratamiento.png',
    iconSize:     [40, 40], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [3, -25] // point from which the popup should open relative to the iconAnchor
});

var PT_naranja = L.icon({
    iconUrl: 'marker/PT-Naranja.png',
    iconSize:     [40, 40], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [3, -25] // point from which the popup should open relative to the iconAnchor
});

var PT_verde = L.icon({
    iconUrl: 'marker/PT-verde.png',
    iconSize:     [40, 40], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [3, -25] // point from which the popup should open relative to the iconAnchor
});

var PT_rojo = L.icon({
    iconUrl: 'marker/PT-rojo.png',
    iconSize:     [40, 40], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [3, -25] // point from which the popup should open relative to the iconAnchor
});

var represa = L.icon({
    iconUrl: 'marker/Represa.png',
    iconSize:     [40, 40], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [3, -25] // point from which the popup should open relative to the iconAnchor
});

var represa_naranja = L.icon({
    iconUrl: 'marker/Represa-naranja.png',
    iconSize:     [40, 40], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [3, -25] // point from which the popup should open relative to the iconAnchor
});

var represa_verde = L.icon({
    iconUrl: 'marker/Represa-verde.png',
    iconSize:     [40, 40], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [3, -25] // point from which the popup should open relative to the iconAnchor
});

var represa_rojo = L.icon({
    iconUrl: 'marker/Represa-rojo.png',
    iconSize:     [40, 40], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [3, -25] // point from which the popup should open relative to the iconAnchor
});

var tanque = L.icon({
    iconUrl: 'marker/Tanque.png',
    iconSize:     [40, 40], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [0, -25] // point from which the popup should open relative to the iconAnchor
});

var tanque_naranja = L.icon({
    iconUrl: 'marker/Tanque-naranja.png',
    iconSize:     [40, 40], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [0, -25] // point from which the popup should open relative to the iconAnchor
});

var tanque_verde = L.icon({
    iconUrl: 'marker/Tanque-verde.png',
    iconSize:     [40, 40], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [0, -25] // point from which the popup should open relative to the iconAnchor
});

var tanque_rojo = L.icon({
    iconUrl: 'marker/Tanque-rojo.png',
    iconSize:     [40, 40], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [0, -25] // point from which the popup should open relative to the iconAnchor
});

var valvula = L.icon({
    iconUrl: 'marker/Valvula.png',
    iconSize:     [50, 40], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [3, -25] // point from which the popup should open relative to the iconAnchor
});

var valvula_naranja = L.icon({
    iconUrl: 'marker/Valvula-naranja.png',
    iconSize:     [50, 40], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [3, -25] // point from which the popup should open relative to the iconAnchor
});

var valvula_verde = L.icon({
    iconUrl: 'marker/Valvula-verde.png',
    iconSize:     [50, 40], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [3, -25] // point from which the popup should open relative to the iconAnchor
});

var valvula_rojo = L.icon({
    iconUrl: 'marker/Valvula-roja.png',
    iconSize:     [50, 40], // size of the icon
    iconAnchor:   [20, 35], // point of the icon which will correspond to marker's location
    popupAnchor:  [3, -25] // point from which the popup should open relative to the iconAnchor
});

var todos = L.layerGroup();
var base1 = L.layerGroup();
var base2 = L.layerGroup();
var base4 = L.layerGroup();
var base6 = L.layerGroup();

<?php

$query = "SELECT * FROM info";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($result)){
    echo "L.marker([" . $row['latitud'] . ", " . $row['longitud'] . "],";
    
    if(($row['infraestructura'] == "Valvula" || $row['infraestructura'] == "Válvula") && $row['color'] == "Naranja"){
        echo "{icon: valvula_naranja}";
    }

    if(($row['infraestructura'] == "Valvula" || $row['infraestructura'] == "Válvula") && $row['color'] == "Verde"){
        echo "{icon: valvula_verde}";
    }

    if(($row['infraestructura'] == "Valvula" || $row['infraestructura'] == "Válvula") && $row['color'] == "Rojo"){
        echo "{icon: valvula_rojo}";
    }

    if(($row['infraestructura'] == "Valvula" || $row['infraestructura'] == "Válvula") && $row['color'] == ""){
        echo "{icon: valvula}";
    }

    if(($row['infraestructura'] == "Estacion de bombeo" || $row['infraestructura'] == "Estación de bombeo") && $row['color'] == "Naranja"){
        echo "{icon: EB_naranja}";
    }

    if(($row['infraestructura'] == "Estacion de bombeo" || $row['infraestructura'] == "Estación de bombeo") && $row['color'] == "Verde"){
        echo "{icon: EB_verde}";
    }

    if(($row['infraestructura'] == "Estacion de bombeo" || $row['infraestructura'] == "Estación de bombeo") && $row['color'] == "Rojo"){
        echo "{icon: EB_rojo}";
    }

    if(($row['infraestructura'] == "Estacion de bombeo" || $row['infraestructura'] == "Estación de bombeo") && $row['color'] == ""){
        echo "{icon: est_bombeo}";
    }

    if($row['infraestructura'] == "Planta de tratamiento" && $row['color'] == "Naranja"){
        echo "{icon: PT_naranja}";
    }

    if($row['infraestructura'] == "Planta de tratamiento" && $row['color'] == "Verde"){
        echo "{icon: PT_verde}";
    }

    if($row['infraestructura'] == "Planta de tratamiento" && $row['color'] == "Rojo"){
        echo "{icon: PT_rojo}";
    }

    if($row['infraestructura'] == "Planta de tratamiento" && $row['color'] == ""){
        echo "{icon: p_tratamiento}";
    }

    if($row['infraestructura'] == "Represa" && $row['color'] == "Naranja"){
        echo "{icon: represa_naranja}";
    }

    if($row['infraestructura'] == "Represa" && $row['color'] == "Verde"){
        echo "{icon: represa_verde}";
    }

    if($row['infraestructura'] == "Represa" && $row['color'] == "Rojo"){
        echo "{icon: represa_rojo}";
    }

    if($row['infraestructura'] == "Represa" && $row['color'] == ""){
        echo "{icon: represa}";
    }

    if($row['infraestructura'] == "Tanque" && $row['color'] == "Naranja"){
        echo "{icon: tanque_naranja}";
    }

    if($row['infraestructura'] == "Tanque" && $row['color'] == "Verde"){
        echo "{icon: tanque_verde}";
    }

    if($row['infraestructura'] == "Tanque" && $row['color'] == "Rojo"){
        echo "{icon: tanque_rojo}";
    }

    if($row['infraestructura'] == "Tanque" && $row['color'] == ""){
        echo "{icon: tanque}";
    }
    
    echo ")";

    if($row['acueducto'] == "Base 1"){
        echo ".addTo(base1).addTo(todos)";

    }else

    if($row['acueducto'] == "Base 2"){
        echo ".addTo(base2).addTo(todos)";
    }

    if($row['acueducto'] == "Base 4"){
        echo ".addTo(base4).addTo(todos)";
    }

    if($row['acueducto'] == "Base 6"){
        echo ".addTo(base6).addTo(todos)";
    }
    
    echo ".bindPopup('";
                    echo "<div>";
                        echo '<div class"container">';
                            if($row['color'] == "Naranja"){
                                echo '<img src="marker/naranja.png">';
                            }else 
                            if($row['color'] == "Verde"){
                                echo '<img src="marker/verde.png">';
                            }else{
                                echo '<img src="marker/rojo.png">';
                            }
                        echo "</div>";
                        echo '<table id="tabla">';
                            echo "<tbody>";
                                echo "<tr>";
                                    echo '<td id="titulo">ACUEDUCTO: </td>';
                                    echo '<td id="contenido">' . $row['acueducto'] . '</td>';
                                echo "</tr>";
                                echo "<tr>";
                                    echo'<td id="titulo">NOMBRE: </td>';
                                    echo '<td id="contenido">' . $row['nombre'] . '</td>';
                                echo "</tr>";
                                echo "<tr>";
                                    echo '<td id="titulo">TIPO DE INFRAESTRUCTURA: </td>';
                                    echo '<td id="contenido">' . $row['infraestructura'] . '</td>';
                                echo "</tr>";
                                echo "<tr>";
                                    echo '<td id="titulo">LATITUD: </td>';
                                    echo '<td id="contenido">' . $row['latitud'] . '</td>';
                                echo "</tr>";
                                echo "<tr>";
                                    echo '<td id="titulo">LONGITUD: </td>';
                                    echo '<td id="contenido">' . $row['longitud'] . '</td>';
                                echo "</tr>";
                            echo "</tbody>";
                        echo "</table>";
                    echo "</div>')\n";
}

?>


var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19
}).addTo(map);

var baseMaps = {
};

var layerControl = L.control.layers(baseMaps).addTo(map);

layerControl.addOverlay(todos, "Todos");
layerControl.addOverlay(base1, "Base 1");
layerControl.addOverlay(base2, "Base 2");
layerControl.addOverlay(base4, "Base 4");
layerControl.addOverlay(base6, "Base 6");


const legend = L.control({
    position: "topright",
})

legend.onAdd = function (map) {
    var div = L.DomUtil.create('div', 'info legend');
    div.innerHTML += '<h3>' +
                      '<button type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">' +
                      'Leyenda' +
                      '</button>' +
                      '</h3>' +
                      '<div>' +
                      '<div class="collapse collapse-horizontal" id="collapseWidthExample">' +
                      '<div>' +
                      '<table id="tabla">' +
                      '<head>' +
                      '<tr>' +
                      '<td><i><img src="marker/Estacion de bombeo.png"></i></td>' +
                      '<td>ESTACIÓN DE BOMBEO</td>' +
                      '</tr>' +
                      '<tr>' +
                      '<td><i><img src="marker/Planta de tratamiento.png"></i></td>' +
                      '<td>PLANTA DE TRATAMIENTO</td>' +
                      '</tr>' +
                      '<tr>' +
                      '<td><i><img src="marker/Represa.png"></i></td>' +
                      '<td>REPRESA</td>' +
                      '</tr>' +
                      '<tr>' +
                      '<td><i><img src="marker/Tanque.png"></i></td>' +
                      '<td>TANQUE</td>' +
                      '</tr>' +
                      '<tr>' +
                      '<td><i><img src="marker/Valvula.png"></i></td>' +
                      '<td>VÁLVULA</td>' +
                      '</tr>' +
                      '</tbody>' +
                      '</table>' +
                      '<hr>' +
                      '<table id="tabla1">' +
                      '<tbody>' +
                      '<tr>' +
                      '<td style="width: 25%"><img src="marker/circuloNaranja.png"></td>' +
                      '<td>NARANJA</td>' +
                      '</tr>' +
                      '<tr>' +
                      '<td><img src="marker/circuloVerde.png"></td>' +
                      '<td>VERDE</td>' +
                      '</tr>' +
                      '<tr>' +
                      '<td><img src="marker/circuloRojo.png"></td>' +
                      '<td>ROJO</td>' +
                      '</tr>' +
                      '</tbody>' +
                      '</table>' +
                      '</div>' +
                      '</div>' +
                      '</div>';
    return div;
};

legend.addTo(map);


</script>

