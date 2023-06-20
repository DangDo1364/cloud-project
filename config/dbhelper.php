<?php
header("Content-type: text/html; charset=utf-8");
require_once ('config.php');

// Kết nối sql và lưu data vào table
// insert,delete,update
function execute($sql)
{
    $con = new mysqli(HOST, USERNAME, 
    PASSWORD, DATABASE);

    if ($con->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
 
    mysqli_set_charset($con, 'UTF8');
    mysqli_query($con, $sql);
    mysqli_close($con);
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
        echo "Returned rows are: " . $result -> num_rows;
        
        $result -> free_result();
    }

    while ($row = mysqli_fetch_array($result,1))
    {
      
        $data[] = $row;
    }
  
    mysqli_close($con);
    return $data;
}