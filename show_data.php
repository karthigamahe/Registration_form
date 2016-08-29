<?php
$connect=mysqli_connect('localhost','root','','test');
if(mysqli_connect_errno($connect))
{echo 'Failed to connect';
}
$sql = "SELECT * FROM registration_form";
if ($result = mysqli_query($connect, $sql))
{
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="showdata.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="model.css">
</head>
<a href="index.php"><button style="margin-left:1300px;margin-top:20px;color:blue"><i class="material-icons">add </i></button></a><br><br>
<table id="tbl_show" border="1">
	<tr>
		<th>ID</th>
		<th>FIRSTNAME</th>
		<th>LASTNAME</th>
		<th>MOBILE</th>
		<th>EMAIL</th>
		<th>CITY</th>
		<th>ACTION</th>
	</tr>
<?php
while ($row = mysqli_fetch_assoc($result))
    {

		?>
    <tr>
    	<?php 
    	echo '<td> '.$row['ID'].'</td>';
    	echo '<td> '.$row['FIRSTNAME'].'</td>';
    	echo '<td> '.$row['LASTNAME'].'</td>';
    	echo '<td> '.$row['MOBILE'].'</td>';
    	echo '<td> '.$row['EMAIL'].'</td>';
    	echo '<td> '.$row['CITY'].'</td>';
    	echo  '<td>&nbsp;<a href="update.php?id= '.$row['ID'].'"><button onclick="edit()" style="border:none;font-size:24px;color:blue;background-color:white"> <i class="material-icons">border_color</i></button></a>&nbsp;&nbsp;<a href="delete.php?id= '.$row['ID'].'"><button id="btn_delete"  style="border:none;color:red;background-color:white"><i class="material-icons">close</i></button></a></td>';
	?>
    </tr>
	<?php
}
}
else 
{
    echo "0 results";
}
$connect->close();
?>     
	
</table>
</html>
