<?php
require("conn.php");
$sql=$_GET["sql"];
echo $sql;
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
		header("location:index.php?page=addsuccess");
	}
else{
	echo"fuck";
}
?>