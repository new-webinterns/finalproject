<?php 

include("includes/header.php");

include("includes/navbar-header.php");

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
include("includes/footer.php");
?> 
