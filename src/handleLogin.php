<?php

echo "Hello from the docker yooooo container <br>";

$mysqli = new mysqli("beliy-db.mysql.database.azure.com", "dangdo", 
"01259977014Do@", "banxe");

$sql = "SELECT * FROM taikhoan where username = 'dangdo' and password = '123456' limit 1";

if(isset($_POST['username']) && isset($_POST['password']))
{   
    $username = $_POST['username'];
    $password = $_POST['password'];
}

echo $username . " " . $password;
die();

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
    print_r($users[0]->username);
    die();
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->username . " " . $user->password;
    echo "<br>";
}
?>