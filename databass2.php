<?php
$Sname="localhost";
$Uname="root";
$password="";

$conn = new mysqli($Sname, $Uname, $password);

if($conn->connect_error) {
    die("connection failed: ". $conn->connect_error);
}
echo "connection passed";