<?php

include_once ("db_connection.php");
global $conn;


$userid = $_POST['username_input'];
$password = $_POST['password_input'];



$login_status = "Unsuccessful";

if (($userid )== "" || trim($password) == ""){

    echo "Please enter a valid input,", "<br>";
    $url = "http://localhost/safari/admin_login.php";
    header("Refresh: 2; URL= $url");
 //   header("HTTP/1.1 404 Not Found");
}

else {
    $sql = " Select ad_id, pass \n". " from admin \n". " where admin.ad_id='$userid' AND admin.pass='$password' ";



   $result = mysqli_query($conn,$sql);
    $row_num = mysqli_num_rows($result);
   if ($row_num == 1)
    {$login_status = "successful";}



}

if ($login_status == "successful")
{
    echo $login_status;
    $url = "http://localhost/safari/adminland.php";
    header("Location: $url");
}
else{
   // echo $login_status;

    $url = "http://localhost/safari/admin%20_login.php";
    header ("Location: $url");
}