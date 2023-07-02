<?php
    $numero = $_POST['Numero'];
    construirTabla($numero);        


function construirTabla($numero){
    echo " <table border='1'> ";
    hallarMultiplos($numero);
    hallarFactorial($numero);
    echo "</table>";
}

function hallarMultiplos($numero) : void {
    for ($i = 0; $i <= 10; $i++){
        echo "<tr>";
        echo "<td>" . $numero . "x" . $i.":" . "</td>";
        echo "<td>" . $numero * $i . "</td>";
        echo "</tr>";
    }
}

function hallarFactorial($numero){
    $factorial = 1;

    for ($f = $numero; $f >= 1; $f--) {
        $factorial *= $f;
    }

    echo "<tr>";
    echo "<td>" . $numero."!". "</td>";
    echo "<td>" . $factorial . "</td>";
    echo "</tr>";
}