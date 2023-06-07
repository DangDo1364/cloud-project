<?php
    ob_start();

    $mysqli = new mysqli("beliy-db.mysql.database.azure.com", "dangdo", 
    "01259977014Do@", "banxe");


    if(isset($_POST['username']) && isset($_POST['password']))
    {   
        $username = $_POST['username'];
        $password = $_POST['password'];
    }

    $sql = "SELECT * FROM taikhoan where username = '$username' and password = '$password' limit 1";
    if ($result = $mysqli->query($sql)) {
        while ($data = $result->fetch_object()) {
            $users[] = $data;
        }
        if ($users == null) {
            header("location: login.php?error=Not found", true, 301);          
        }
        else
        {
            header('location: admin.php', true, 301);
        }
    }
?>