<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funcoes</title>
</head>
<body>
    <div>
        <?php
            function soma() {
                $p = func_get_args();
                $n = func_num_args();

                $s = 0;
                for ($i=0; $i < $n ; $i++) { 
                    $s += $p[$i];
                }

                return $s;
            }

            $res = soma(5,4,5,5);            
            echo "Resultado $res <br>";
            
        ?>
    </div> 
</body>
</html>