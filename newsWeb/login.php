<?php 
ob_start();
session_start();

    include('includes/database.php');
?>


<!DOCTYPE html>
<html>
<head>
    <STYLE>
     .hell {
        position: absolute;
        bottom:0;
        width:100%;
       
     }
</STYLE>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Daily News Website | Login</title> 
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<script type="application/x-javascript"> 
addEventListener("load", function() { setTimeout(hideURLbar, 0);}, false); 
function hideURLbar()
{
     window.scrollTo(0,1); 
     } 
</script> 

<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js">
</script> 
<script src="js/bootstrap.min.js">
</script>
</head> 


<body class="hold-transition login-page" id="login">
     
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Login</b> Panel</a>
  </div>
 

<div class="app-cam login-box-body">

    <p class="login-box-msg">Sign in to start your session</p>
<form method="POST" action="">
<input type="text" class="text" name="user" required="required" placeholder="User Name"> <br><br>
<input type="password" name="psw" required="required" placeholder="Password"> <br><br>
<a href="home.php?id=<?php echo base64_encode($arr['adminId']); ?>
"><div class="submit">
<input type="submit" name="submit" value="Login" class="pull-right" style="background: linear-gradient(#66a0f7,#2a3ba7);color: #fff;width: 50% !important;">
</div>
</a>
<div class="login-social-link">
<!-- <a href="" class="facebook">
Facebook </a> 
<a href="" class="twitter"> Twitter </a> -->
</div>
</form>
<div class="clearfix"></div><br>
</div> 
 </div>


<div class="copy_layout login container"> 
<p style="text-align: center;">Copyright &copy; 
<?php
echo date("Y");
?>
&nbsp;
&nbsp;
Daily News Website. All Rights Reserved.</p>
</div>
</body> 
</html>

<?php
if(isset($_POST['submit']))
{
    $u=$_POST['user'];
    $p=$_POST['psw'];
    $pp=base64_encode($p); 
    $sql="SELECT * FROM admin WHERE username =  '$u' AND PASSWORD =  '$p'"; 
    $res=$con->query($sql);
if($arr = $res->fetch_assoc()) 
{
     //$arr=mysql_fetch_assoc($res);
        $_SESSION['id']=$arr['adminId'];
        //$_SESSION['applicant']=$arr['applicant']; 
        $_SESSION['username']=$arr['username']; 
       // $_SESSION['password']=base64_decode($_arr['password']); 
       header('location:newsadd.php');
}

    
   else
    {
        echo "<h3 style='color:red;
        text-align:center;
        font-weight:normal;'>Invalid Username or Password.</h3>";
    }
}
?>


<style type="text/css">
    input {
    width: 100% !important;
    padding: 9px !important;
}
</style>