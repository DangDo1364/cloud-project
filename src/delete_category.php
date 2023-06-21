<?php

ob_start();

require_once ('../config/dbhelper.php');

if(!empty($_POST))
{
    $tenhang = $_POST['tenhang'];
    echo $tenhang;
    $sql = "delete from hang where tenhang = ".$tenhang."";
    execute($sql);
    header('Location: category.php');    
}
?>