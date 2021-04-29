<?php
    session_start();
    if(isset($_SESSION['reg'])){
        session_unset();
        session_destroy();
        header('Location: ../index.php');
    }
    else{
        header("Location: ../index.php");
        die();
    }
?>
