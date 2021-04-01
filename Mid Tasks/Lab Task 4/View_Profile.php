<!DOCTYPE HTML>
	<html>
	<head>
	<style>
	.error {color: #FF0000;}
	</style>
	</head>
	<body>

<form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<title>VIEW PROFILE</title>
<h1>The M Company</h1>


Logged in as <a href= "Logged_in_dashboard.php">Bob</a>
<?php 


session_start();

if (isset($_SESSION['uname'])) {

   
	echo "<br><a href='Logout.php'>Logout</a><br>";

	

}
else{
		$msg="error";
		header("location:Login.php");
		// echo "<script>location.href='login.php'</script>";
	}

 ?>
<h2>Account</h2>

<ul> <li><a href= "Logged_in_dashboard.php">Dashboard</a></li>
	<li><a href= "View_Profile.php">View Profile</a></li>
	<li><a href= "Edit_Profile.php">Edit Profile</a></li>
	<li><a href= "Change_Profile_Picture.php">Change Profile Picture</a></li>
	<li><a href= "Change_Password.php">Change Password</a></li>
	<li><a href= "Logout.php">Logout</a></li>
</ul>







<fieldset>
	<legend><h1>PROFILE</h1></legend>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	  Name: <b>Bob</b>
	
	  <br><br>
	   E-mail: <b>bob@aiub.edu</b>
	  <br><br>
   
	Gender:
	  
	  <b> Male</b>
	  
	
      <br><br>

      
	  Date of Birth:
	 
	 <b> 19/09/1998</b>
	
<br><br>
	  

	  <div class="box" >
      	<img style=" border-radius: 50%;
  width: 10px;
  height: 10px; "src="profile.jpg" alt="" class="box-img">
      </div>


<br><a href= "Change_Profile_Picture.php">Change</a><br>
          
<br><a href='Edit_Profile.php'>Edit Profile</a><br>


</fieldset>
 <?php include 'footer.php';?>
</form>
</body>
</html>

