
<?php
extract($_REQUEST);
include("includes/database.php");
//$type = explode('.', $_FILES['userImage']['name']);
//    $type = $type[count($type) - 1];
$type="jpg";
$url = "Images/News/$title.$type";
move_uploaded_file($_FILES['userImage']['tmp_name'], $url);




$sql= "INSERT INTO `news` (`category`, `title`, `newsDesc`, `date`, `status`, `photo`) VALUES ('$cat', '$title', '$description','ndate', 1, '$url')";
$result = $con->query($sql);
$last_id = $con->insert_id;

if($result == True ){
	echo "<script>window.location.assign('index.php?asuccess=true');</script>";
}
else{
	echo "<script>window.location.assign('index.php?error=true');</script>";
}
?>
?>
