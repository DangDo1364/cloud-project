<?php

echo "Hello from the docker yooooo container";

$mysqli = new mysqli("beliy-db.mysql.database.azure.com", "dangdo", 
"01259977014Do@", "banxe");

$sql = 'SELECT * FROM taikhoan';

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->username . " " . $user->password;
    echo "<br>";
}
?>