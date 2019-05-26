<pre>
<?php
    // formas de declaração
    $arr[1] = 1;
    $arr[2] = 3;
    $arr[3] = 67;

    print_r($arr);
    echo  "<br>";
    $arr = array(2,6,8);

    print_r($arr);
    echo  "<br>";

    //inclui novos indices no vetor
    $arr[] = 15;
    $arr[] = 0;
    print_r($arr);
    echo  "<br>";

    $arr = range(10,20,2); // iniciando no 10, até o número 20, incrementa de 2 em 2 (como uma reserva de cache do oracle)

    print_r($arr);
    echo  "<br>";

    unset($arr[2]); // retira do vetor a posição de indice 2
    print_r($arr);
    echo  "<br>";

    // usando foreach
    foreach ($arr as $key => $value) {
        echo "$value ';'";
    }

    echo  "<br>";
    echo  "Array com chave assiciativa";
    echo  "<br>";

    $arr = array(
        "nome" => "Edson",
        "idade" => 41,
        "peso" => 84
    );
    print_r($arr);
    echo  "<br>";

    foreach ($arr as $key => $value) {
        echo "o campo $key eh $value <br>";
    }

    //vetor bi-dimensional
    $arr = array(
        array("nome" => "edson","idade" => 41),
        array("nome" => "rosangela","idade" => 39),
        array("nome" => "gabriela","idade" => 8),
        array("nome" => "nicolas","idade" => 4)
    );

    foreach ($arr as $key => $value) {
        echo "o campo $key eh $value sendo: <br>";

        foreach ($value as $key => $newValue) {
            echo ">>o campo $key eh $newValue <br>";
        }
            
    }

    //alterando estrutura do array
    $arr = array(5,7);
    print_r($arr);
    echo  "<br>";
    
    //adiciona elemento no final
    array_push($arr,5);
    print_r($arr);
    echo  "<br>";
    
    //retira elemento no final
    array_pop($arr);
    print_r($arr);
    echo  "<br>";
    
    //adiciona elemento no inicio
    array_unshift($arr,555);
    print_r($arr);
    echo  "<br>";
    
    //retira elemento no inicio
    array_shift($arr);
    print_r($arr);
    echo  "<br>";

    //ordenar os arrays
    //> ordenando apenas o pelo conteudo, mantendo o indice (0,1,2 ...)
    $arr = array(5,99,7,1);
    //crescente
    print_r($arr);
    echo  "<br>";

    sort($arr);
    print_r($arr);
    echo  "<br>";
    
    //decresente
    rsort($arr);
    print_r($arr);
    echo  "<br>";

    //> ordenando também a associação do campo e o pelo conteudo
    $arr = array(5,99,7,1);
    //cresente
    asort($arr);
    print_r($arr);
    echo  "<br>";
    //decresente
    arsort($arr);
    print_r($arr);
    echo  "<br>";
    
    //> ordenando pelo indice
    //cresente
    ksort($arr);
    print_r($arr);
    echo  "<br>";
    //decresente
    krsort($arr);
    print_r($arr);
    echo  "<br>";
    
?>
</pre>