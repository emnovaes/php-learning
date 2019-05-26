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

                echo "Soma entre os numeros $s";
            }

            soma(5,4);
            soma(155,-5)

            
        ?>
    </div> 
</body>
</html>