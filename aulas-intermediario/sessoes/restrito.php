<?php
    session_start();

    if($_SESSION['logado']){
        echo "<h1>Usuário Logado</h1>";
        echo "<a href='sair.php'>Sair do Sistema</a>";
    }
    else {
        echo "<h1>Página Restrita!</h1>";
        echo "<a href='index.php'>Logar no Sistema</a>";
    }
?>
