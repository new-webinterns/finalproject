 <?php 
 include("includes/header.php");
 ?> 
 <?php 
 include("includes/braking.php");
 ?> 
 <?php 
include("includes/menu.php"); 
?>
<div class="col-smn-12" style="border:2px solid #ddd; padding:10px;">
<div class="content"> 
<div class="news001"> 
<?php 
$term=$_POST['query'];
$sql="select * from news where (title like '%$term%'|| newsDesc like '%$term%'|| date like '%$term%')";
$res=mysql_query($sql);
if(!$res)
{ 
    echo"mysql_error()";
}
$count=mysql_num_rows($res);
if($count != NULL)
{
    $i=0;
    while($results=mysql_fetch_assoc($res))
    {
        $i++;
        ?>
        <h4>
        <u>
        <?php
        echo $results['title'];
        ?>
        </u>
        </h4>
        <h5 style="margin:10px 0px;">
        Published date :
        <?php
        echo $results['date'];
        ?>
        </h5>
        <p style="text-align:justify;">
        <?php
        echo $results['newsDesc'];
        ?>
        </p>
        <br>
        <br>
        <br>
        <?php
        }
    }
    else
    {
        echo "<h3>No record found!</h3>";
    }
    ?>
    </div>
    </div>
    </div>
    <?php
    include("includes/sidebarleft1.php");
    ?>
    <?php
    include("includes/footer.php");
    ?>
