<?php
    session_start();

    $login = "emnovaes";
    $senha = "123456";

    If ($login == "emnovaes" and $senha == "123456"){
        $_SESSION['logaldo'] = true;
        
        echo "Locado";
    }
    else {
        echo "não Logado";
    }

?>