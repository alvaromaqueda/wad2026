<?php

    //Funciones para modificar arrays

    $frutas = array("naranja","plátano","manzana","frambuesa");

    var_dump($frutas);
    echo "<br>";

    $eliminado = array_pop($frutas);

    var_dump($eliminado);
    echo "<br>";

    var_dump($frutas);
    echo "<br>";

    array_push($frutas, "pera");

    var_dump($frutas);
    echo "<br>";

?>