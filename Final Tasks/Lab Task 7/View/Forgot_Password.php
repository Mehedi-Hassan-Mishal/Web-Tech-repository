

 <!DOCTYPE HTML>
	<html>
	
	<style>

		  .my-color
   {
    background: #000;
   }
   .background
   {
   	  background-image: url("../Pictures/background.webp");
   	   background-repeat: no-repeat;
  background-size: cover;

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

	<body>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<title>FORGOT PASSWORD</title>



<header>

<div class="row">
  <div class="col-lg-12 col-md-6 col-sm-12">

  <nav class="navbar  navbar-expand-sm navbar-dark my-color">

    <a href="#" class="navbar-brand">
      <img src="../Pictures/logo.PNG" alt="logo" style="width:100px">
    </a>
<h1 style="font-weight: bold; color: green; font-size: 70px; float: middle; font-family: Brush Script MT;text-align: center; ">Bachelor’s Housing Management Website</h1>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="menu ml-auto"  style="font-size: 25px;">
  <ul class="navbar-nav">

<?php include 'menu.php';?>
</ul>
  </div>
</nav>
</div>

</div>
</div>

</header>



<?php
	

	 $emailErr= "";
	 $email = "";
	$flag=1;


   if (empty($_POST["email"])) {
	    $emailErr = "Email is required";
	    $flag=0;
	  } else {
	    $email = test_input($_POST["email"]);
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	      $emailErr = "Invalid email format";
	      $flag=0;
	    }
	  }


	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	?>



<form style="padding:6em;  text-align: center; font-size: 20px;  background-color: green;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

	<fieldset>
	    <legend><h1>FORGOT PASSWORD</h1></legend>
	    
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


     <label style="font-size: 30px ;">Enter email:</label>
			<input style="font-size: 30px ;"  type="email" name="email" size="40">
		</div>
		<div class="form-group">
			<br><button style="font-size: 30px ; background-color: purple; " type="submit" name="reset-password" class="login-btn">Submit</button>
		</div>




</fieldset>

<?php include 'footer.php';?>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</form>

</form>

</body>
</html>