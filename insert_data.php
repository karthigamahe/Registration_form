<?php
$connect=mysqli_connect('localhost','root','','test');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
// create a variable
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$city=$_POST['city'];
//Execute the query
mysqli_query($connect,"INSERT INTO registration_form (FIRSTNAME,LASTNAME,MOBILE,EMAIL,CITY)
		        VALUES ('$firstname','$lastname','$mobile','$email','$city')");
				
	if(mysqli_affected_rows($connect) > 0){
	//echo "<p>Employee Added</p>";
	header("Location: show_data.php");


} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error ($connect);
}

?>