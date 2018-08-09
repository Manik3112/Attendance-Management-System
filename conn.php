<html>
<head>
<link rel="stylesheet" href="bootstrap.min.css" />
</head>
<?php

$conn = mysqli_connect("localhost","root","","blog");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>