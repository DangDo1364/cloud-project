<?php

ob_start();

if(!empty($_POST))
{
    $name = '';

    if(isset($_POST['name']))
    {
        $name = $_POST['name'];
        $hinhanh = $_POST['hinhanh'];
    }
    
    if(!empty($name))
    {
        echo $name
        $sql = "INSERT INTO hang VALUES ("'.$name.'", "'.$hinhanh.'")";
        execute($sql);
        header('Location: category.php');
    }
}
?>