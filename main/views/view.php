<?php 


require_once "../../mysqli/connection.php" ;


$sql = 'select * from hospital ' ;

$result = mysqli_query($connection, $sql) ;

$assocArray = mysqli_fetch_all( $result, MYSQLI_ASSOC) ;



?>
<!DOCTYPE html>
<html>
<head>
	<title> List of Patients</title>
	<link rel="stylesheet" type="text/css" href="../../css/style1.css">
</head>
<body>
<?php 

?>
<div class="home">
	<a href="dashboard.php">Add New</a>
</div>
<div class="cont">
	<h2 class='headText'>Patient's List</h2>
	<br>
	<table class ='details'>
		<tr>
			<th> Patient ID </th>
			<th> Name </th>
			<th> Address </th>
			<th> Phone </th>
			<th> Disease </th>
			<th> action </th>
		</tr>
		
		<?php foreach($assocArray as $data){ ?>
			
			<tr>
				<?php 
				
				?>
				<td><?= $data['Patient_ID']?></td>
				<td><?= $data['Name']?></td>
				<td><?= $data['Address']?></td>
				<td><?= $data['Phone']?></td>
				<td><?= $data['Disease']?></td>
				<td>
					<a href="edit.php?id=<?= $data['Patient_ID']?>&delete=1" style='background: rgba(255, 0,0,0.2)'>Delete</a>
				</td>
			</tr>
			
		<?php } ?>
		
	</table>
</div>

</body>
</html>
