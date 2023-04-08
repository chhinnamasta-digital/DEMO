<?php
    session_start();
    unset($_SESSION['session_userId']);
    header("Location: login.php");

?>