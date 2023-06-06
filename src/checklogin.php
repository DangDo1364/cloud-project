<?php
require_once ('../config/config.php');
if(!empty($_POST['login']))
{
    $username = '';
    $password = '';

    if(isset($_POST['username']) && isset($_POST['password']))
    {   
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
    
    if(!empty($username) && !empty($password))
    {
        $con = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
        if ($con -> connect_error) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
        }
        $sql = 'SELECT * from taikhoan where username = '$username' and password = '$password'';
	    $query = mysqli_query($con,$sql);
        echo "Returned rows are: " . $query->num_rows;
	    $num_rows = mysqli_num_rows($query);
	    if ($num_rows==0) 
        {
            header('Location: login.php');           
        }
        else{
            header('Location: admin.php');
        }
    }
}
?>