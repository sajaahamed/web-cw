
<?php

$host="localhost";
$user="root";
$pass="";
$db="users";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>
