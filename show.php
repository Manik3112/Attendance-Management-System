<?php
	$sql="select * from invoice";
	$result = $conn->query($sql);
?>
<br>
<label class="label label-primary">Select to delelte Name:</label><br>
	<table border=1 style="width:100%;">
	<?php
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row['cid']."</td><td>".$row['project']."</td><td>".$row['description']."</td><td>".$row['amount']."</td></tr>";
			}
		}
	?>
	</table><br>
</form>