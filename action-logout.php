<?php //11119006 - Bagus Susilo
    session_start();
    $_SESSION['username'] = '';
    unset($_SESSION['username']);
    session_unset();
    header("Location: login.php");
?>