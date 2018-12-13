<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página web</title>
        <?php header("Location: lib/funciones.php"); ?>
    </head>
    <body>
<?php

function holaMundo($nombre){
    echo '<p>Buenos días ' . $nombre . '(' . strlen($nombre) . ')' .'</p>';
}

echo "Bienvenido a PHP";
$asocc = array(
    "nif" => "4",
    "edad" => 30,
    "soltero" => true
);

$diasSemana = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];
$arrayArray = [
        [1,2,3,4],
        [3,6,9,10]
];

//Recorrido de una matriz por filas con foreach
foreach($arrayArray as $k => $array){
    $acu = 0;
    foreach ($array as $item){
        $acu += $item;
    }
    echo '<p>Cantidad fila ' . ($k+1) . ' = ' . $acu . '</p>';
}

//Recorrido de una matríz por filas con for
for($i = 0; $i < count($arrayArray); $i++){
    $acu = 0;
    for($j = 0; $j < count($arrayArray[$i]); $j++){
        $acu += $arrayArray[$i][$j];
    }
    echo '<p>Cantidad fila ' . ($i+1) . ' = ' . $acu . '</p>';
}

//Recorrido de una matríz por columnas
for($i = 0; $i < count($arrayArray[0]); $i++){
    $acu = 0;
    for($j = 0; $j < count($arrayArray); $j++){
        $acu += $arrayArray[$j][$i];
    }
    echo '<p>Cantidad columna ' . ($i+1) . ' = ' . $acu . '</p>';
}

foreach ($asocc as $item){
    echo $item;
}

foreach($asocc as $k => $v){
    echo '<p>' . $k . " => " . $v . '</p>';
}

foreach($diasSemana as $dia){
    echo '<p>' . $dia . '</p>';
}

holaMundo('pepito');
?>
    </body>
</html>