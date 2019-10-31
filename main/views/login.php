<?php 

session_start();
if($_POST['username']=='Sushant' && $_POST['password']=='user')
{
	$_SESSION['Sushant']=$_POST['username'];
	header("location: dashboard.php");
}
else
{
	header("location: index.php?error=wrong username and password");
}

?>
</html>
