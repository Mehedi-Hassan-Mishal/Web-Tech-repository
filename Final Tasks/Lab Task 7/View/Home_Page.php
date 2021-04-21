
<!DOCTYPE HTML>
  <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 

   .my-color
   {
    background: #000;
   }

    /* Tooltip */
  .tooltip > .tooltip-inner {
    background-color: #73AD21; 
    color: #FFFFFF; 
    border: 1px solid green; 
    padding: 15px;
    font-size: 20px;
  }


</style>

</head>

<body>



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" herf="style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



  

<title>LOGIN</title>



<header>

<div class="row">
  <div class="col-lg-12 col-md-6 col-sm-12">

  <nav class="navbar  navbar-expand-sm navbar-dark my-color">

    <a href="#" class="navbar-brand">
      <img src="../Pictures/logo.PNG" alt="logo" style="width:80px">
    </a>
<h1 style="font-weight: bold; color: green; font-size: 60px; float: middle; font-family: Brush Script MT;text-align: center; ">Bachelor’s Housing Management Website</h1>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="menu ml-auto"  style="font-size: 25px;">
  <ul class="navbar-nav">

<?php include 'menu.php';?>
</ul>
</ul>
  </div>
</nav>
</div>

</div>
</div>

</header>



<div class="container">
  
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>

  body{background:url('<?php $a= array('../Pictures/home1.jpg','../Pictures/home2.jpg','../Pictures/home3.jpg','../Pictures/home4.jpg'); echo $a[array_rand($a)];?>');
           
  background-repeat: no-repeat repeat;
  background-size: cover;
             }
  </style>



<h2  
style="
position: middle;
  padding: 20px; 
  text-align: center; 
  color:green;

   bottom: 2000px; border: 2px solid; box-shadow: 5px 10px 18px #888888 ;
    font-family: 'Roboto', sans-serif;" >Welcome!! find here the best rental house for you.. </h2>


</div>
</div>
</div>



<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





</form>
</body>
</html>