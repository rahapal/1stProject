<?php 
$id = 0 ;

if(is_numeric($_GET['id'])){
	$id = $_GET['id'] ;
}

if(! $id ){
	die("Please give some valid numeric id to edit. Pass id from Query String.(..?id=5)") ;
}

require_once "../../mysqli/connection.php" ;

if(isset($_GET['delete'])){
	
	if($_GET['delete'] == 1){
		mysqli_query($connection, "DELETE FROM hospital WHERE Patient_ID = $id") ;
		if(mysqli_affected_rows($connection) !=1){
			echo "Error occurred.";
			print_r(mysqli_error_list($connection));
				die();
		}
		header("Location: view.php") ;
	}
}

