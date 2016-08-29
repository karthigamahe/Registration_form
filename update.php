<?php

$con=mysqli_connect('localhost', 'root','','test');
if(mysqli_connect_errno($con))
{echo 'Failed to connect';
}
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql = "SELECT * FROM registration_form where Id=$id";
	$result = $con->query($sql);
	$row  = $result->fetch_assoc();
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="update.css">
</head>
<h2 class="heading">EDIT</h2>
<form action="update_data.php" method="POST">
	<div id="container">
		<input class="input_form" type=hidden name=id value="<?php  echo $row['ID']; ?>" >
		<input class="input_form" type=text name=firstname value="<?php  echo $row['FIRSTNAME']; ?>" ><br><br>
		<input class="input_form" type=text name=lastname value="<?php  echo $row['LASTNAME']; ?>" ><br><br>
		<input class="input_form" type=text name=mobile value="<?php  echo $row['MOBILE']; ?>" ><br><br>
		<input class="input_form" type=text name=email value="<?php  echo $row['EMAIL']; ?>" ><br><br>
		<input class="input_form" type=text name=city value="<?php  echo $row['CITY']; ?>" ><br><br>
		<input class="input_form"  style="background-color:#4CAF50" type="submit" name="edit" value="edit">
	</div>
</form>
</html>


<?
/*if(isset($_POST['edit']))
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
}*/
?>



