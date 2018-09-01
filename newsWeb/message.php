<?php 
include("includes/header.php");
?>
<?php
include("includes/braking.php");
?>
<?php 
include("includes/menu.php");
?>
<div class="col-smn-12" style=""> 
<div class="content"> 
<div class="news001">
<?php 
if(isset($_POST['submit']))
{
    include("includes/database.php");
    $id=rand(1000,999999);
    $name=$_POST['name'];
    $email=$_POST['email'];
    $date= date('d.m.Y');
    $massege=$_POST['massege'];
    $sql="INSERT into message set name='$name', email='$email', date='$date', message='$massege'";
    $result=mysql_query($sql,$con);
    if(!$result)
    {
        echo"<h3 style='color:red;'>Error!</h3>".mysql_error();
    }
    else
    {
        echo"<h3 style='color:green;'>Massege Successfully Posted!</h3>";
    }
}
?>
<div class="">
<div class="Compose-Message"> 
<div class="panel panel-default">
<div class="panel-heading"> 
Compose New Message
</div> 
<div class="panel-body">
<div class="alert alert-info"> Please fill details to send a new message </div>
<form action="" method="POST" enctype="multipart/form- data">
<div class="form-horizontal">
<div class="form-group">
<label class="col-md-2 control-label">Name</label>
<div class="col-md-8"> 
<div class="input-group"> 
<span class="input-group-addon"> 
<i class="">
</i>
</span> 
<input type="text" class="form-control" required placeholder="Name" name="name"> 
</div>
</div>
</div>
<div class="form-group"> 
<label class="col-md-2 control-label">Email</label>
<div class="col-md-8">
<div class="input-group">
<span class="input-group-addon"> 
<i class="">
</i> 
</span>
<input type="email" class="form-control" required placeholder="Email" name="email"> 
</div> 
</div>
</div> 
<div class="form-group">
<label class="col-md-2 control-label">Message</label>
<div class="col-md-8"> 
<div class="input-group">
<span class="input-group-addon"> 
<i class="">
</i> 
</span> 
<textarea style='height:200px; ' class="form-control" required placeholder="Massege" name="massege"></textarea>
</div>
</div> 
</div>
<div class="registration">
 label class="checkbox-custom check-success">
<input type="checkbox" required value="aggreed" name="term" id="checkbox1"> 
<label for="checkbox1">I agree to the Terms of Service and Privacy Policy</label> 
</label>
</div>
<div class="row">
<div class="col-sm-8 col-sm-offset-2"> 
<button class="btn-success btn" name="submit" type="submit">Submit</button> 
</div> 
</div> 
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php
include("includes/sidebarleft.php");
?>
<?php
include("includes/footer.php");
?>
