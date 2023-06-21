<?php
header("Content-type: text/html; charset=utf-8");
require_once ('config.php');

// Kết nối sql và lưu data vào table
// insert,delete,update
function execute($sql)
{
    $mysqli = new mysqli(HOST, USERNAME, 
    PASSWORD, DATABASE);

    if ($con->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
 
    $mysqli -> set_charset("utf8");
    if ($mysqli->query($sql) === FALSE) 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;       
    }
    $mysqli -> close();
}

// Để hiện thị khi select
function executeResult($sql)
{
    $mysqli = new mysqli(HOST, USERNAME, 
    PASSWORD, DATABASE);

    $data = [];

    $mysqli -> set_charset("utf8");

    if ($result = $mysqli -> query($sql))
    {
        while ($row = $result->fetch_object()) 
        {
            $data[] = $row;
        }

        $result -> free_result();
    }

    $mysqli -> close();

    return $data;
}