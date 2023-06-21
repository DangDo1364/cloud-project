<?php
if(!empty($_POST))
{
    $tenhang = $_POST['tenhang'];
    $sql = 'delete from hang where tenhang = "'.$tenhang.'"';
    execute($sql);
    header('Location: category.php');    
}
?>