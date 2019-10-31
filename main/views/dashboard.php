<?php

session_start();
if(!isset($_SESSION['Sushant']))
{
	header("location: index.php");
}
echo "<p style='color:white;font-family:Tahoma;font-size:30px;text-align:center;background: rgba(0,0,0,0.26) ;
	padding: 10px ;'>"."Welcome To The Damauli Hospital";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Patient</title>
	<link rel="stylesheet" type="text/css" href="../../css/style1.css">
</head>
<body>
<div class="home">
	<a href="./">Log Out</a>
	<a href="./view.php">View Patient List</a>
</div>
<div class="cont">
	<h2 class="headText">
		Add New Patient
	</h2>
	<p>
		<?php 

			if(isset($_GET['message'])){
				echo $_GET['message'] ;
			}
		?>
	</p>
	<form action = "../action/create.php" method = "POST">
		<table class='twoCols'>
			<tr>
				<td>Name:</td>
				<td colspan="2">
					<input type="text" name="s_name">
				</td>
			</tr>
			<tr>
				<td>Patient ID:</td>
				<td colspan="2">
					<input type="number" name="s_id">
				</td>
			</tr>
			<tr>
				<td>Address:</td>
				<td colspan="2">
					<input type="text" name="s_address">
				</td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td colspan="2">
					<input type="text" name="s_phone">
				</td>
			</tr>
			<tr>
				<td>Disease:</td>
				<td colspan="2">
					<input type="text" name="s_disease">
				</td>
			<tr class='buttons'>
				<td></td>
				<td><input type="submit" name="s_submit" value = "Save"></td>
				<td><a href="view.php">Cancel</a></td>
			</tr>
		</table>
	</form>
</div>
</form>
</body>
</html>