<?php
if(isset($_POST["submit"]));
{
	include "database.php";
	$fullname = $_POST['name'];
	$email=$_POST['email'];
	$phoneno=$_POST['pnum'];
	$year=$_POST['year'];
	$branch=$_POST['branch'];
	$college=$_POST['clg'];
	$sql = "INSERT INTO `register` (name,email,pnum,year,branch,clg) VALUES ('$fullname',' $email','$phoneno','$year','$branch',' $college')";
	mysqli_query($link,$sql);
}
?>