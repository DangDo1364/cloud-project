<?php 
    ob_start();

    require_once ('../config/dbhelper.php');

    session_start();
    // print_r($_SESSION['USER']);
    // die();
    if($_SESSION['USER'] == '')
    {
        // die("1111");
        header('Location: login.php');    
    }
?>
