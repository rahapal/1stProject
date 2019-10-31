<?php 


require_once "../../mysqli/connection.php" ;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	$patient_id = $_POST['s_id'] ;
	$name = $_POST['s_name'] ;
	$address = $_POST['s_address'] ;
	$phone = $_POST['s_phone'] ;
	$disease = $_POST['s_disease'] ;

	$sql = "insert into hospital(Patient_ID, Name,Address, Phone,Disease) values( $patient_id,'$name', '$address', '$phone', '$disease' )" ;
	
	mysqli_query($connection, $sql) ;
	
	if(mysqli_affected_rows($connection) > 0){
		echo "data added successfully" ;
		header("Location: ../views/view.php?message=Patient with id number: $patient_id added successfully.") ;
	}else{
		echo "error" ;
		var_dump(mysqli_error_list($connection)) ;
	}
}

?>