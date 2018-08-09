<?php
require("conn.php");
if(isset($_GET['page']))
{
	if($_GET['page']=='client')
		{
			include("client.php");
		}
	if($_GET['page']=='add')
		{
			include("add.php");
		}
	if($_GET['page']=='show')
		{
			include("show.php");
		}
	if($_GET['page']=='showclient')
		{
			include("showclient.php");
		}
	if($_GET['page']=='addclient')
		{
			include("addclient.php");
		}
	if($_GET['page']=='addsuccess')
		{
			echo '<br><div class="label label-success">Details Saved.</div><br><br>
	<a href="index.php?page=client"><button class="btn-primary btn col-sm-2">Print Invoice</button></a>
	<a href="index.php?page=show"><button class="btn-primary btn col-sm-2">show Invoice</button></a>
	<a href="index.php?page=add"><button class="btn-primary btn col-sm-2">Add Invoice</button><a>
	<a href="index.php?page=delete"><button class="btn-primary btn col-sm-2">Remove Invoice</button></a><br><br>
	<a href="index.php?page=addclient"><button class="btn-primary btn col-sm-2">Add Client</button></a>
	<a href="index.php?page=showclient"><button class="btn-primary btn col-sm-2">Show Client</button></a>
	';
		}
		
	if($_GET['page']=='delete')
		{
			include("delete.php");
		}
}
else{
?>
	<a href="index.php?page=client"><button class="btn-primary btn col-sm-2">Print Invoice</button></a>
	<a href="index.php?page=show"><button class="btn-primary btn col-sm-2">show Invoice</button></a>
	<a href="index.php?page=add"><button class="btn-primary btn col-sm-2">Add Invoice</button><a>
	<a href="index.php?page=delete"><button class="btn-primary btn col-sm-2">Remove Invoice</button></a><br><br>
	<a href="index.php?page=addclient"><button class="btn-primary btn col-sm-2">Add Client</button></a>
	<a href="index.php?page=showclient"><button class="btn-primary btn col-sm-2">Show Client</button></a>
<?php
}
?>


