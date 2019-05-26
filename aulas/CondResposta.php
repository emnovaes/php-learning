<?php
    $ano = $_GET["ano"];
    $idade = date("Y") - $ano;

    echo "Ano informado :: $ano <br>";

    if ($idade >= 18) {
        echo "Você já pode dirigir, possui $idade anos";
    }
    else {
        echo "Impedido de dirigir, possui $idade anos";
    }