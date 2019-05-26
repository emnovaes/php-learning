<?php
    session_start();

    $login = "emnovaes";
    $senha = "123456";

    If ($login == "emnovaes" and $senha == "123456"){
        $_SESSION['logado'] = true;
        header("location:restrito.php");
    }
    else {
        echo "não Logado";
    }

?>