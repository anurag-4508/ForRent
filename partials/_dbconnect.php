<?php 
$server = "sql111.epizy.com";
$username="epiz_31665876";
$password="dYa0DaA7JG";
$database="epiz_31665876_forrent";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    echo "error".mysqli_connect_error();
}

?>