<?php

    // $_GET >> recebe os par�metros da url
    // exemplo   .....php?a=5&b=10
    $n1 = $_GET['a'];
    $n2 = $_GET['b'];

    // concatenar
    // forma 1:: usando . (ponto)
    echo "<br>Parametros recebidos: " . $n1 . " e " . $n2;

    // concatenar
    // forma 2:: usando aspas dupla, neste caso, o php interpreta a vari�vel
    echo "<br>Parametros recebidos: $n1  e $n2";
