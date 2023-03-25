<?php

    session_start();
    session_destroy();
    //unset($_SESSION['flag']);
    setcookie('flag', 'true', time()-1, '/');
    header('location: ../views/login.php');
?>