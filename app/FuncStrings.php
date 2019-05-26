
<?php
    
    $tipoPedido = "compra";
    $valor = 4.5;
    
    // formatação
    echo "------------------------------------<br>";
    $texto = "O Valor de sua $tipoPedido e R$ $valor <br>";
    echo $texto;

    $texto = "O Valor de sua $tipoPedido e R$ " . number_format($valor,2) . " <br>";
    echo $texto;

    $texto = "O Valor de sua %s e R$ %.2f <br>";
    printf($texto,$tipoPedido,$valor) ;
    
    echo "------------------------------------<br>";
    $texto = "Agora uma otima funcao para quebra de textos longos<br>";
    echo $texto;
    $texto = wordwrap($texto,10,"<br>",false);
    echo $texto;
    echo "------------------------------------<br>";
    $texto = "'                     ...Edson...                     '<br>";
    echo $texto;
    $texto = "                     ...Edson...                     <br>";
    echo strlen($texto). "<br>";
    echo trim($texto). "<br>";
    echo "------------------------------------<br>";
    // array
    $newArray = array(1,5,9,10);
    print_r($newArray);
    echo "<br>";
    $texto = "Agora uma funcao para separar conteudos em vetor";
    echo $texto . "<br>";
    print_r(explode(" ",$texto));
    echo "<br>";
    $newTexto = "Agora;uma;funcao;para;separar;conteudos;em;vetor";
    echo $newTexto . "<br>";
    print_r (explode(";",$newTexto));
    echo "<br>";
    echo "------------------------------------<br>";
    $texto = "Agora uma funcao para letras em MAIUSCULAS e minusculas";
    echo $texto . "<br>";
    echo strtolower($texto) . "<br>";
    echo strtoupper($texto) . "<br>";
    echo "<br>";
    echo "------------------------------------<br>";
    $texto = "Tratativa de substring em PHP";
    echo $texto . "<br>";
    echo substr($texto,0,1) . "<br>";
    echo substr($texto,0,15) . "<br>";
    echo substr($texto,0,30) . "<br>";

    echo str_repeat("-",80);
    
?>