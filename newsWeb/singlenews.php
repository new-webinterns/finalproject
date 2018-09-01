
<?php
include("includes/header.php");
?>
<?php 
include("includes/braking.php");
?>
<?php 
include("includes/menu.php");
?> 
<div class="col-smn-12" style="border:2px; solid #ddd; padding:10px;">
<div class="content">
<div class="news001">
<?php
include("includes/database.php");
$id=base64_decode($_GET['id']); 
$sql="SELECT * FROM news where id='$id'";
$res=mysql_query($sql); 
$arr=mysql_fetch_assoc($res);
?> 
<h5> 
Publish Date :
<?php 
echo $arr['date'] ;
?>
|| category : 
<?php
echo $arr['category'] ;
?>
</h5>
<br/>
<h2>
<u>
<?php
echo $arr['title'];
?>
</u>
</h2>
<br/>
<img id="image" class="img-responsive-singlepage" src="../admin/
<?php
echo $arr['photo'];
?>
" alt="">
<p style="text-align:justify;">
<?php 
echo $arr['discription'];
?>
</p>
</div>
</div> 
</div>
<?php 
include("includes/sidebarleft1.php"); 
?>
<?php
include("includes/footer.php");
?>
