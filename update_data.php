<?php
if(isset($_POST['edit']))
{
	$id = $_POST['id'];
	$firstname =  $_POST['firstname'];
	$lastname =  $_POST['lastname'];
	$mobile =  $_POST['mobile'];
	$email =  $_POST['email'];
	$city =  $_POST['city'];
$con=mysqli_connect('localhost', 'root','','test');
$sql = "UPDATE registration_form SET FIRSTNAME = '$firstname', LASTNAME = '$lastname', MOBILE = '$mobile', EMAIL = '$email', CITY = '$city' WHERE ID = '$id'";

if (mysqli_query($con, $sql)) 
{
	header("Location: show_data.php");
} else 
{
	echo "Error updating record: " . mysqli_error($con);
}
}
?>	