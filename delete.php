<?php
echo "sas";
$con=mysqli_connect('localhost', 'root','','test');
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql = "SELECT * FROM registration_form where Id=$id";
	$result = $con->query($sql);
	$row  = $result->fetch_assoc();
}
if(isset($_POST['delete']))
{
	$id = $_POST['id'];
	$firstname =  $_POST['firstname'];
	$lastname =  $_POST['lastname'];
	$mobile =  $_POST['mobile'];
	$email =  $_POST['email'];
	$city =  $_POST['city'];
}
$sql = "DELETE FROM registration_form WHERE ID=$id";

if (mysqli_query($con, $sql)) 
{
	//echo "<script>"
	header("Location: show_data.php");
} else 
{
	echo "Error deleting record: " . mysqli_error($con);
}


?>