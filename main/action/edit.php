<?php 
$id = 0 ;

if($_SERVER['REQUEST_METHOD'] == "POST"){
	
	if( ! is_numeric($_POST['id'])){
		die("id must be a digit.") ;
	}else{
		$id = $_POST['id'] ;
	}
	
	$newName = $_POST['s_name'] ;
	$newPhone = $_POST['s_phone'] ;
	$newAddress = $_POST['s_address'] ;
	$newRoll = (int)$_POST['s_roll'] ; 

	
	$query = "UPDATE students SET 
					name = '$newName', 
					phone = '$newPhone', 
					address = '$newAddress', 
					roll = $newRoll 
				WHERE id = $id ";
	
	require_once "../../mysqli/connection.php" ;

	
	mysqli_query($connection, $query) ;

	
	if(mysqli_error_list($connection)){
		die("Error: " . mysqli_error_list($connection)[0]['error']) ;
	}


	if(mysqli_affected_rows($connection) == 1){
		
		header("Location: ../views/show.php?id=$id") ;
	}else{
		
		header("Location: ../views/edit.php?id=$id&message=Some error occurred while updating.") ;
	}

}

?>