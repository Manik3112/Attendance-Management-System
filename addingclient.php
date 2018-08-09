<br>
<?php
require("conn.php");
	$cid=$_POST['cid'];
	$pro=$_POST['cname'];
	$des=$_POST['add'];
	$amount=$_POST['amount'];
	$sql = "insert into client values('".$cid."','".$pro."','".$des."')";
	if ($conn->query($sql) === TRUE) {
		header("location:index.php?page=addsuccess");
	}
?>
	