<?php
$servername="localhost";
$username="db21_005";
$password="db21_005";
$dbname="db21_005";
$conn= new mysqli($servername,$username,$password);
mysqli_set_charset($conn, "utf8");
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}
else
{
    echo "Connection successfully";
}
if(!$conn->select_db($dbname))
{
    die("Connection failed: ".$conn->connect_error);
}
else
{
    echo "Connection db successfully";
}
?>