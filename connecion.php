<?php
$_SERVER ="localhost";
$username="root";
$password="";
$db="reponsiveform3";

$conn=mysqli_connect("localhost","root","","reponsiveform3");
if ($conn) {
    # code...
    echo"connectio ok";
}
else{
    echo"connectio failed".mysqli_connect_error();
}




?>