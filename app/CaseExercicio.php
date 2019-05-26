<?php
    $n      = $_GET['num'];
    $oper   = $_GET['oper'];

    
    switch ($oper) {
        case 1:
            $r = $n * 2;
            break;
        case 2:
            $r = $n ^ 3;
            break;
        case 3:
            $r = sqrt($n);
            break;
        
        default:
            # code...
            break;
    }
    echo "resultado $r"

?>