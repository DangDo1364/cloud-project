<?php

echo "Hello from the docker yooooo container";

$mysqli = new mysqli("beliy-db.mysql.database.azure.com", "dangdo", 
"01259977014Do@", "banxe");

$sql = "SELECT * FROM taikhoan where username = 'dangdo' and password = '123456'";

if ($result = $mysqli->query($sql)) {
    if($result -> num_rows > 0)
    {
        header('Location: admin.php');
    }
    else
    {
        header('Location: login.php');
    }
    $result -> free_result();

    
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->username . " " . $user->password;
    echo "<br>";
}
?>