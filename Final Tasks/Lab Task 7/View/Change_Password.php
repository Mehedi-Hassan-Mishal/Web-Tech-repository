

<!DOCTYPE html>
<html lang="en">
  <head>

  <script src="../JS/jsvalidation.js" type="text/javascript"></script>
 

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <div style="background-color:black ">
   
  <?php 


session_start();

if (isset($_SESSION['username'])) {

    
  echo "<br><a href='Logout.php'></a><br>";

}
else{
    $msg="error";
    header("location:Login.php");
    // echo "<script>location.href='login.php'</script>";
  }

 ?>

</div>


  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
       .background
   {
      background-image: url("../Pictures/background.webp");
       background-repeat: repeat;
   background-position: cover;

   }

   .my-color
   {
    background: #000;
   }
  
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    
    </div>
     <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav my-color">
              <li class="active"><a style="font-size:20px; " href= "Logged_in_dashboard.php">Dashboard</a></li>
              <li><br><a style="font-size:20px; "  href= "adminProfile.php">Profile</a></li>
        <li><a style="font-size:20px; " href= "View_Properties.php">View All Properties</a></li>
        <li><a style="font-size:20px; "  href= "users.php">View Managers</a></li>
        <li><a style="font-size:20px; " href= "insert.php">Hire Manager</a></li>
        <li><a style="font-size:20px; " href= "Edit_Profile.php">Edit profile</a></li>
        
              <li><a style="font-size:20px; " href= "Change_Password.php">Change Password</a></li>
              <li><a style="font-size:20px; " href= "Logout.php">Logout</a></li>
      </ul>
    </div>

  </div>
</nav>



<div class="container-fluid my-color">
  <div class="row content my-color">
    <div class="col-sm-3 sidenav hidden-xs my-color">
      <ul class="nav nav-pills nav-stacked my-color">
        <li class="active"><br><br><a style="font-size:20px; " href= "Logged_in_dashboard.php">Dashboard</a></li>
        <li><br><a style="font-size:20px; "  href= "adminProfile.php">Profile</a></li>
        <li><a style="font-size:20px; " href= "View_Properties.php">View All Properties</a></li>
       <li><a style="font-size:20px; "  href= "users.php">View Managers</a></li>
        <li><a style="font-size:20px; " href= "insert.php">Hire Manager</a></li>
        <li><a style="font-size:20px; " href= "Edit_Profile.php">Edit profile</a></li>
         
              <li><a style="font-size:20px; "  href= "Change_Password.php">Change Password</a></li>
              <li><a style="font-size:20px; " href= "Logout.php">Logout</a></li>
      </ul><br>
    </div>
    
    <br>




    <div class="col-sm-9">
      <div class="well my-color">
        <a class="navbar-brand my-color "> <img src="../Pictures/logo.PNG" alt="logo" style="width:100px"></a>
        <h1 style="font-weight: bold; color: green; font-size: 60px; float: middle; font-family: Brush Script MT;text-align: center; ">Bachelor’s Housing Management Website</h1><br>

    <style >
      .error {color: #FF0000;}
    </style>
 
    <title>CHANGE PASSWORD</title>
  </head>
 



 <form name="myform"  method="post" action="../Controller/changePasswordController.php">
    <fieldset>
  <legend><h2 style="color: skyblue ">Change Password</h2></legend><br>    
   
       <span style="font-size:20px; color:white; "> Current Password:</span> <br>

        <input style="font-size:20px;" type="password" name="cpassword" id="password" onkeyup="checkPass()" onblur="checkPass()" >
        <span class="error" id="passwordErr"><?php if (!empty($_GET['cpasswordErr'])) {echo $_GET['cpasswordErr'];} ?> </span>
      
        <br><br>
        <span style="font-size:20px; color:green">New Password:</span><br>
        <input style="font-size:20px;" type="password" name="npassword"  id="npassword"  onkeyup="changePass()" onblur="changePass()" >
        <span class="error" id="npasswordErr"><?php if (!empty($_GET['npasswordErr'])) {echo $_GET['npasswordErr'];} ?> </span>
        <br><br>
        <span style=" font-size:20px; color:Red">Retype New Password:</span><br>
        <input style="font-size:20px;" type="password" name="rnpassword" id="rnpassword"  onkeyup="retypePass()" onblur="retypePass()">
        <span class="error" id="rnpasswordErr"><?php if (!empty($_GET['rnpasswordErr'])) {echo $_GET['rnpasswordErr'];} ?></span>
        <br><br><br>
        <input style="font-size: 27px ;  "class="btn btn-success"  type="submit" name="submit" value="Submit">
        <br><br>
        
    </fieldset>
  
   <div style="color:white; text-align:center ">

<?php 

 require_once 'footer.php';
 ?>
</div>
    
</div>
</div>
</div>
</div>
  </form>
</body>
</html>