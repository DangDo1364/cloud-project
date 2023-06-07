<?php

echo "Hello from the docker yooooo container <br>";

$mysqli = new mysqli("beliy-db.mysql.database.azure.com", "dangdo", 
"01259977014Do@", "banxe");


if(isset($_POST['username']) && isset($_POST['password']))
{   
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$sql = "SELECT * FROM taikhoan where username = '$username' and password = '$password' limit 1";
echo "d7";
if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
    if ($users == null) {
        echo "<script>window.location.href='login.php';</script>";
        exit;
    }
    else
    {
        echo "<script>window.location.href='admin.php';</script>";
        exit;
    }
}


?>