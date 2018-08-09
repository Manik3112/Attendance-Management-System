<br>
<?php
require("conn.php");
	$cid=$_POST['cid'];
	$pro=$_POST['pro'];
	$des=$_POST['des'];
	$amount=$_POST['amount'];
	$sql = "insert into invoice values('".$cid."','".$pro."','".$des."','".$amount."')";
	if ($conn->query($sql) === TRUE) {
		header("location:index.php?page=addsuccess");
	}
?>
	