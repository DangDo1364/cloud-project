<?php
ob_start();
require_once ('../config/dbhelper.php');

if(!empty($_POST)){
    $hinhanh = '';
    
    if(isset($_POST['hinhanh']))
    {
        $name = $_POST['name'];
        $hinhanh = $_POST['hinhanh'];
    }
    
    if(!empty($hinhanh))
    {      
        $sql = "UPDATE hang SET logo = '".$hinhanh."'  WHERE tenhang = '".$name."'";
        execute($sql);
        header('Location: category.php');   
    }
}

?>