<?php

ob_start();

require_once ('../config/dbhelper.php');

if(!empty($_POST))
{
    $id = $_POST['id'];
    $tenhang = $_POST['tenhang'];
    $sql = "DELETE FROM sanpham WHERE id = '".$id."'";
    execute($sql);
    header('Location: product.php?tenhang='.$tenhang.'');
}
?>