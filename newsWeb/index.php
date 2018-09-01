<?php 
include("includes/header.php");
?>


<div class="backing">
<div class="container">
<div class="row"> 
<div class="backing_inner">
<div class="row"> 
<div class="col-sm-2 col-md-2 col-lg-2">
<div class="breakingNewsLeft"> 
<h4>Breaking News</h4>
</div>
</div>
<div class="col-sm-10 col-md-10 col-lg-10">
<marquee class="marqueeItem" direction="left" scrollamount="5" onMouseOver="this.setAttribute('scrollamount', 0, 0);" OnMouseOut="this.setAttribute('scrollamount', 5, 0);"> 
<?php
include("includes/database.php"); 
$arr1=array(); $arr2=array(); $arr3=array(); $arr4=array(); $arr5=array(); $arr6=array();






/*************National Category************* */
$sql1="select * from news where category='national'";
//$res1=mysql_query($sql1);
// $res1 = $con->query($sql1);
if ($res1=mysqli_query($con,$sql1)){
//  $arr1=$res1->fetch_assoc();
while($row1=mysqli_fetch_row($res1))         //($row = $res1->fetch_assoc()) 
{
 
     
     ?>
     <a style="color: #596be6!important;font-weight: 600" href="singlenews1.php?id=<?php echo $row1['id'];?>"> * 
        <?php echo $row1[2];?>
        * &nbsp;</a> &nbsp; &nbsp; &nbsp;
     <?php 
    
  }
}

$sql2="select * from news where category='business'";
 //$res2 = $con->query($sql2);

if ($res2=mysqli_query($con,$sql2)){
//  $arr1=$res1->fetch_assoc();
while($row2=mysqli_fetch_row($res2))         //($row = $res1->fetch_assoc()) 
{
     ?>
     <a style="color: #596be6!important;font-weight: 600" href="singlenews1.php?id=<?php echo $row2['id'];?>"> * 
        <?php echo $row2[2];?>
        * &nbsp;</a>  &nbsp; &nbsp; &nbsp;
     <?php 
    
  }
}

$sql3="select * from news where category='politics' ";
 //$res3 = $con->query($sql3);
if ($res3=mysqli_query($con,$sql3)){
//  $arr1=$res1->fetch_assoc();
while($row3=mysqli_fetch_row($res3))         //($row = $res1->fetch_assoc()) 
{
 
     
     ?>
     <a style="color: #596be6!important;font-weight: 600" href="singlenews1.php?id=<?php echo $row3['id'];?>"> * 
        <?php echo $row3[2];?>
        * &nbsp;</a> &nbsp; &nbsp; &nbsp;
     <?php 
    
  }
}


$sql4="SELECT * FROM  `news` WHERE  `category` ='sports' order by id desc";
//$res1=mysql_query($sql1);
if ($res4=mysqli_query($con,$sql4)){
//  $arr1=$res1->fetch_assoc();
while($row4=mysqli_fetch_row($res4))         //($row = $res1->fetch_assoc()) 
{
 
     
     ?>
     <a style="color: #596be6!important;font-weight: 600" href="singlenews1.php?id=<?php echo $row4['id'];?>"> * 
        <?php echo $row4[2];?>
        * &nbsp;</a> &nbsp; &nbsp; &nbsp;
     <?php 
    
  }
}


$sql6="select * from news where category='entertainment' order by id desc";
 if ($res6=mysqli_query($con,$sql6)){
//  $arr1=$res1->fetch_assoc();
while($row5=mysqli_fetch_row($res6))         //($row = $res1->fetch_assoc()) 
{
     ?>
     <a style="color: #596be6!important;font-weight: 600;" href="singlenews1.php?id=<?php echo $row5['id'];?>"> * 
        <?php echo $row5[2];?>
        * &nbsp;</a> &nbsp; &nbsp; &nbsp;
     <?php 
    
  }
}


if($row1 != NULL) 
{
 ?>
 <a  style="color:#fff!important;" href="singlenews1.php?id=<?php echo $row['id'];?>"> * <?php echo $row1['2'];?> * &nbsp;</a>
 <?php 
}
if($row2 != NULL) 
{
    ?>
    <a
    style="color:#fff!important;"
    href="singlenews1.php?id=<?php echo $arr2['id'];?>"> * <?php echo $row2['2'];?> * &nbsp;
    </a>
    <?php
    }
    if($row3 != NULL)
    {
        ?> 
        <a
        style="color:#fff!important;"
        href="singlenews1.php?id=<?php echo $arr3['id'];?>"> * <?php echo $row3['2'];?> * &nbsp;
        </a>
        <?php
        }
        if($row4 != NULL)
        {
            ?>
            <a
            style="color:#fff!important;"
            href="singlenews1.php?id=<?php echo $arr5['id'];?>"> * <?php echo $row4['2'];?> * &nbsp;
            </a>
            <?php
            }
            if($row5 != NULL) 
            {
                ?>
                <a
                style="color:#fff!important;"
                href="singlenews1.php?id=<?php echo $arr6['id'];?>"> * <?php echo $row5['2'];?> * &nbsp;
                </a> 
                <?php
                }
                ?>
                </marquee>
                </div>
                </div>
                </div>
                </div>
                </div> 
                </div>
                <?php 
                include("includes/menu.php");
                ?>
                <!--

                <?php
                include("includes/sidebarleft.php");
                ?>
                <?php
                include("includes/midbrifnews.php");
                ?> 
                <?php include("includes/sidebarright.php");
                ?>

               -->
                
<br><br>
                <div class="container">
                  <div class="row">
<?php
$sql1="select * from news";
if ($res1=mysqli_query($con,$sql1)){
while($row1=mysqli_fetch_row($res1))         //($row = $res1->fetch_assoc()) 
{
     ?>

                    <div class="col-sm-4">
                      <div class="news">
                        <img src="<?php echo $row1[6];?>" class="img-responsive" style="height: 250px; width: 100%">
                        <h5><?php echo $row1[4];?></h5>
                        <p><b><?php echo $row1[2];?></b></p>
                        <p style="margin: 0px !important;"><?php echo $row1[1];?></p>

                      </div>
                    </div>
     <?php 
    
  }
}?>

                    

                  </div>
                </div>
<br><br><br>
<?php include("includes/footer.php"); ?>

<style type="text/css">
  
  .news{
        box-shadow: 1px 1px 15px #a2a2a2;
        min-height: 500px;
        margin-bottom: 30px;
  }

  .news p{
    padding: 10px;
    text-align: justify;
  }

  .news h5{
    color: #075e9b;
    text-transform: uppercase;
    padding-left: 10px;
    font-weight: 600;
  }

</style>