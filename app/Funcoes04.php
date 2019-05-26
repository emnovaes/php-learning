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
            function soma(&$eds) { // & no PHP recebe a referência da variável

                $eds += 5555;

                return $eds;
            }
            $x = 5;
            echo "Value $x<br>";

            $res = soma($x);

            echo "Resultado $x<br>";

            
        ?>
    </div> 
</body>
</html>