<?php
    echo 0;
    require_once ('../config/config.php');
    $username = '123';
    $password = '';
    // check if isset username and password
    echo 2;
    // if(isset($_POST['username']) && isset($_POST['password']))
    // {   
    //     echo 1;
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
    // }
    // if(!empty($username) && !empty($password))
    // {
    //     echo 2;
    //     $con = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    //     if ($con->connect_error) {
    //         echo 3;
    //         echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    //         exit();
    //     }
    //     // $sql = 'SELECT * from taikhoan where username = '$username' and password = '$password'';
    //     // $query = mysqli_query($con,$sql);
    //     // echo "Returned rows are: " . $query->num_rows;
    //     // $num_rows = mysqli_num_rows($query);
    //     // if ($num_rows==0) 
    //     // {
    //     //     header('Location: admin.php');
    //     //     echo "Not found";
    //     //     // header("Location: login.php?error=Not found");          
    //     // }
    //     // else
    //     // {
    //     //     header('Location: admin.php');
    //     // }
    // }
?>