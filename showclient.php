<?php
	$sql="select * from client";
	$result = $conn->query($sql);
?>
<br>
<label class="label label-primary">All Clients</label><br>
	<table border=1 style="width:100%;">
	<?php
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row['cid']."</td><td>".$row['name']."</td><td>".$row['client']."</td></tr>";
			}
		}
	?>
	</table><br>
</form>