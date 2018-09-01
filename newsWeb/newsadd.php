<?php
include("includes/header.php");
?> 
<?php
include("includes/navbar-header.php");
?>
<?php 
include("includes/sidebar.php");
?>

<div class="container">
<div class="bs-example5" data-example-id="default-media">
<div class="media"> 
<div class="media-body">
<h2 class="media-heading">Hello 
<?php session_start();
echo $_SESSION['username'];
?> 
Welcome to Admin Panel !!!
</h2> <br>
</div> 
<div class="clearfix">
</div> 
</div>
</div>
</div>


<?php 
if(isset($_POST['submit']))
{
    include("includes/database.php");
    $id=rand(1000,999999);
    $category=$_POST['category'];
    $status=$_POST['status'];
    $date= date("d.m.y"); 
    $title=$_POST['title'];
    $discription=$_POST['discription'];
    $des="images/news/".$id.'_'.$category.".jpg"; $src=$_FILES['photo']['tmp_name'];
    copy($src,$des);
    $sql="INSERT into news set category='$category',status='$status', date='$date', title='$title', newsDesc='$discription', photo='$des'"; $result=mysql_query($sql,$con); 
    if(!$result)
    {
        echo"<h3 style='color:red;'>Error!</h3>".mysql_error();
    }
    else
    {
        echo"<h3 style='color:green;'>News Successfully Added!</h3>";
    }
}
?>
<br/>

<div class="container">
<h4 style='color:#06D995;
text-align:center;'>Enter your News Details below</h4>
<div class="panel-body"> 
<form action="saveNews.php" method="POST" enctype="multipart/form-data">
<div class="form-horizontal">
<div class="form-group"> 
<label class="col-md-2 control-label">Category </label>

<div class="col-sm-8"> 


<select name="cat">
                            <?php include("includes/database.php");
                      $tm    = "SELECT distinct catName FROM category";
                        $tmresult = $con->query($tm); 
                       while($row = $tmresult->fetch_assoc()){
                             echo "<option value='".$row['catName']."'>".$row['catName']."</option>";}        
                      ?>
                            
                            </select>
                            <br>

    </div>
    </div>
   <!-- <label class="col-md-2 control-label">Status </label>
    <div class="radios">
    <label for="radio-01" class="label_radio">
    <input type="radio" name="status" checked value="1" > Yes </label>
    <label for="radio-02" class="label_radio">
    <input type="radio" name="status" value="0" > No </label>
    </div>
    <br/> -->
    <div class="form-group">
    <label class="col-md-2 control-label">Title</label>
    <div class="col-md-8">
    <div class="input-group">
    <span class="input-group-addon">
    <i class="">
    </i>
    </span>
    <input type="text" class="form-control1" required placeholder="Title" name="title">
    </div>
    </div>
    </div>

<br/>
    <div class="form-group">
    <label class="col-md-2 control-label">Date</label>
    <div class="col-md-8">
    <div class="input-group">
    <span class="input-group-addon">
    <i class="">
    </i>
    </span>
    <input type="date" class="form-control1" required name="ndate">
    </div>
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-2 control-label">Description</label>
    <div class="col-md-8">
    <div class="input-group">
    <span class="input-group-addon">
    <i class="">
    </i>
    </span>
    <textarea style='height:200px;width: 100%' class="form-control1" required placeholder="Description" name="description">
    </textarea>
    </div>
    </div>
    </div><div class="form-group">
    <label for="exampleInputFile" class="col-md-2 control-label">File input</label> 
 <div class="col-md-8">

    <div class="file-loading">
                <input id="avatar-2" name="userImage" type="file" 
                class="file-loading">
                </div>
    </div>
    </div>
    <div class="registration">
    <label class="checkbox-custom check-success" style="width: 100% !important;">
        <div class="col-md-2">
    <input type="checkbox" required value="aggreed" name="term" id="checkbox1">
    </div>
    <div class="col-md-8">
    <label for="checkbox1">I agree to the Terms of Service and Privacy Policy    </label>
    </div>
    </label>
    </div>
    <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    <button class="btn-success btn" name="submit" type="submit">Submit</button> </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    <?php
    include("includes/footer.php");
    ?>
