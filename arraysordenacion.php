<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prácticas PHP</title>
</head>

<body>
    <?php

        //Arrays y ordenación

        $dias=array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");

        var_dump($dias);
        echo "<br>";

        sort($dias);
        var_dump($dias);
        echo "<br>";

        //asort($dias);
        //rsort($dias);
        //var_dump($dias);
        //echo "<br>";

        $numeros = array(10,11,8,103,99,54);
        var_dump($numeros);
        echo "<br>";

        shuffle($numeros);

        //ksort($numeros);
        //var_dump($numeros);
        //echo "<br>";

        $arraynombres = array("Javier" => "29", "Patricia" => "18", "Jose" => "24");
        var_dump($arraynombres);
        echo "<br>";

        ksort($arraynombres);
        var_dump($arraynombres);
        echo "<br>";

    ?>
</body>
</html>