<?php
	$sql="select * from client";
	$result = $conn->query($sql);
?>
<br>
<form class="col-sm-4" action="invoice.php" class="form-control" method="GET">
<label class="label label-primary">Select Client Name:</label><br>
	<select class="form-control" name="cid">
	<?php
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		echo "<option class='form-control' value=".$row['cid'].">".$row['name']."</option>";
			}
		}
	?>
		
	</select>
<br>
<label class="label label-primary">Enter Inovice Number:</label><br><input class="form-control" type="number" name="ino" /><br><br>
<input type="submit" class="btn-default btn" value="submit" /><br>
</form>