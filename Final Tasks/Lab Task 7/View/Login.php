
<!DOCTYPE HTML>
	<html>
<head>
   <script src="../JS/jsvalidation.js" type="text/javascript"></script>
  <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap"
      rel="stylesheet"
    />

      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" herf="style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</head>

<body>
 

 

	

<title>LOGIN</title>

<form name="myform"  style="text-align:center;  background-color: black;" method="post" action="../Controller/loginController.php" onclick="validateform()" > 



<header>

<div class="row">
  <div class="col-lg-12 col-md-6 col-sm-12">

  <nav class="navbar  navbar-expand-sm navbar-dark my-color">

    <a href="#" class="navbar-brand">
      <img src="../Pictures/logo.PNG" alt="logo" style="width:100px">
    </a>
<h1 style="font-weight: bold; color: green; font-size: 70px; float: middle; font-family: Brush Script MT;text-align: center;">Bachelor’s Housing Management Website</h1>

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



		<br>
		<fieldset>
			<legend><h2 style="font-size: 40px; color:white  ">Login Here</h2></legend>	
		<?php if(isset($msg)){?>
		    <h1><?php echo $msg;?></h1>
		    
    	<?php } ?> <br>
		 <body>
    


    
        

       
		  <br>  <label style="font-size: 35px; color:white ;" class="fa fa-user icon" >User Name</label><br>
      <input style="font-size: 25px; border: 2px solid; " type="text" id="username"  name="username" placeholder="Enter your name" 
      onkeyup="checkUsername()" onblur="checkUsername()"><br>

       <span style="color:red; font-size:20px;" class="error" id="usernameErr"><?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span>

	         <br><br>

            


			<label class="fa fa-key icon" style="font-size: 35px ;color:white ; ">Password</label><br>
			<input style="font-size: 25px; border: 2px solid;  "  type="password" id="password" name="password" placeholder="Enter password" onkeyup="checkPass()" onblur="checkPass()"><br>

       <span style="color:red; font-size:20px;"class="error" id="passwordErr"><?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];} ?></span>
	        <br><br>
           




			<?php
echo '<a href="Logged_in_dashboard.php"><input style="font-size: 35px ;border: 2px solid;" type="submit" name="login" value="Login" class="btn btn-success"></a><br><br>
         <a style="font-size: 30px;color:blue " href="Forgot_Password.php">Forgot Password?</a><br><br>';


?>






<div style="color:white">
<?php 

 require_once 'footer.php';
 ?>
</div>

</form>
		
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

