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
            function soma( $a, $b) {
                $s = $a + $b;

                return $s;
            }

            $res = soma(5,4);
            echo "Resultado $res <br>";
            
            $res = soma(155,-5);
            echo "Resultado $res <br>";
            
        ?>
    </div> 
</body>
</html>