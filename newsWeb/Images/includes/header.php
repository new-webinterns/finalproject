<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">


<!DOCTYPE html>
<html lang="en"> 
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Daily News Website | Home</title> 
<link href="images/shortcart_logo.png" rel="shortcut icon" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> 
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" /> 
<link href="css/style.css" rel="stylesheet" type="text/css"/> 
<link rel="stylesheet" type="text/css" href="css/elastislide.css" /> 
<script src="js/jquery_v1_10.0.js" type="text/javascript">
</script> 
<script type="text/javascript" src="js/bootstrap.js">
</script> 
<script src="js/script.js">
</script>
<script type="text/javascript" src="engine1/jquery.js">
</script>
<script src="js/modernizr.custom.17475.js">
</script>
</head> 

<body> 
 <div class="header" style="background: linear-gradient(#035c9a,#8db4cc,#ffffff);">
   <div class="container">
     <div class="row"> 
       <div class="col-sm-12 col-md-12 col-lg-12"> 
         <div class="header_inner">
           <div class="col-sm-2 col-md-2 col-lg-2">
             <div class="logo"> 
                <h1>
                    <a href="index.php">
                        <img class="img-responsive" src="Images/news-portal-Logo.png" alt="logo" class="img-responsive">
                    </a>
                </h1>
             </div> 
            </div> 
            <div class="col-sm-5 col-md-5 col-lg-5">
              <h1 style="padding:15px 0 0 0;color: #fff;font-family: fantasy;letter-spacing: 2px;text-shadow: -2px 3px 2px #000"> Online News Portal</h1>
              <h5 id="datetime" style="padding:0 0 0 0;"> 
               <script type="text/javascript">
                function datetime()
                {
                  var d=new Date(), year=d.getFullYear(), month=d.getMonth()+1, day=d.getDate(), time=d.toLocaleTimeString(); document.getElementById('datetime').innerHTML="Today is : "+year+"-"+month+"-"+day+"&nbsp; || &nbsp;Time is :"+time; 
                } 
                setInterval(function()
                {
                  datetime();},1000);
                </script>
              </h5>
        </div>
        <div class="col-sm-5 col-md-5 col-lg-5"> <br><br>
          <div class="search_box">
            <div class="input-group pull-right">
                <div class="row">
                <!-- <form action="form.php" method="POST"> 
                    <div class="col-sm-8" style="padding: 0px">
                   <input type="text" name="query" class="form-control" required/>
                   </div>
                   <div class="col-sm-4" style="padding: 0px">
                   <input type="submit" name="submit" value="GO" class="form- control1" style="height: 34px;padding: 0px !important;" />
                   </div>
                 </form> -->
                </div>
            </div>
          </div> 
        </div>
     </div>
    </div>
   </div>
  </div>
</div>

</body>
</html>




<style type="text/css">
	input {
    width: 100% !important;
    padding: 9px !important;
}
</style>