
<?php 
include("includes/header.php");
?>
<?php 
include("includes/braking.php");
?>
<?php 
include("includes/menu.php"); 
?>
<?php 
include("includes/sidebarleft1.php"); 
?>
<div class="col-smn-12">
<div class="content">
<div class="news001" style="border:2px solid #ddd; padding:10px;">
<?php
include("includes/database.php");
$category=$_GET['category'];
if(isset($_GET['lim']))
{
    $sl=$_GET['lim'];
}
else
{
    $sl=0;
}
$sql="select * from news where category='$category' order by id desc limit $sl,5";
$res=mysql_query($sql,$con);
$count=mysql_num_rows($res);
if($count!=0)
{
    while($arr=mysql_fetch_assoc($res))
    {
        ?>
        <div class="bs-example5" data-example-id="default-media">
        <div class="media">
        <div class="media-left">
        <a href="singlenews.php?id=<?php echo base64_encode($arr['id']);?>"> <img class="media-object" data-src="holder.js/64x64" alt="No image for this news" src="../admin/
        <?php
        echo $arr['photo'];
        ?>
        " data-holder-rendered="true" style="width: 150px;
        height: 100px;">
        </a>
        </div>
        <div class="media-body">
        <h4 class="media-heading" style="color:blue;">
        <u>
        <?php
        echo $arr['title'];
        ?>
        </u>
        </h4>
        <?php
        $string =$arr['newsDesc'];
        $maxLength =200;
        if (strlen($string) > $maxLength)
        {
            $stringCut = substr($string, 0, $maxLength);
            $string = substr($stringCut, 0, strrpos($stringCut, ' '));
        }
        ?>
        <p>
        <?php
        echo $string;
        ?>
        ...</p>
        <a href="singlenews.php?id=
        <?php
        echo base64_encode($arr['id']);
        ?>
        "><button>Details.....</button>
        </a>
        <?php
        echo "<br>"."<br>";
        ?>
        </div>
        <div class="clearfix">
        </div>
        </div>
        </div>
        <br/>
        <?php
        }
    }
    else
    {
        echo"<h3 style='color:red;
        '>Sorry! No News is Available.</h3>";
    }
    ?>
    <?php
    $i=0;
    $j=1;
    $l=0;
    $sql_link="select * from news where category='$category'"; $res=mysql_query($sql_link);
    while($arr=mysql_fetch_assoc($res))
    {
        if($i%5==0)
        {
            ?>
            <div class="pagination">
            <a href="singlecategory.php?category=
            <?php
            echo $category.'&&lim='.$l;
            ?>
            ">&nbsp;
            <?php
            echo $j;
            ?>
            </a>
            </div>
            <?php 
            $j++;
            $i=0;
            $l=$l+5;
        }
        $i++;
    }
    ?>
    <br>
    <br>
    <br>
    </div>
    </div>
    </div>
    <?php 
    include("includes/footer.php");
    ?> 
