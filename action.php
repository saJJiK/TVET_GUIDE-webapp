<?php

require_once '../TVET_GUIDE/config.php';

$code = $_POST["code"];
$description = $_POST["des"];



$sql = "SELECT * FROM sector WHERE Code='$code'";
$result = mysqli_query($Connector, $sql);
if (mysqli_num_rows($result)>0){
     echo "<script>alert('This sector code is already in database')</script>";
    require_once '../TVET_GUIDE/index.php';
    return;
}else{}

$sql = "INSERT INTO sector VALUES('$code','$description')";
$result = mysqli_query($Connector, $sql);

if($result) {
    echo "<script>alert('You have successfully register')</script>";
    require_once '../TVET_GUIDE/index.php';
} else {
    echo "<script>alert('You have un-successfully register')</script>";
    require_once '../TVET_GUIDE/index.php';
}

