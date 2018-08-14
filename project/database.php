<?php
$link = mysqli_connect("localhost","root","","registration");
if(!$link){
	mysqli_connect_error("Registration Failed");
}
else
	echo "Registration successfull";

?>