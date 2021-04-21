
<!DOCTYPE html>
<html lang="en">
<title>ADMIN PROFILE</title>
  <head>

 
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
   
   <?php
session_start();
require_once '../Controller/adminInfoController.php';



if(isset($_SESSION['username']))
{
$data = fetchStudent($_SESSION['username']);

 
  if($data!=NULL)
  {
    foreach ($data as $i => $student):

         $name= $student['NAME'] ; 
         $email=$student['EMAIL'];
         $birth=$student['BIRTHDATE'];
         $gender= $student['GENDER'] ;
    endforeach;


  }

  echo "<br><a href='Logout.php'></a><br>";
}

else {
  
       $msg="error";
      header("location:Login.php");
      // echo "<script>location.href='login.php'</script>" 

}
 ?>


 
    
      
    <div class="col-sm-9">
      <div class="well my-color">
        <a class="navbar-brand my-color "> <img src="../Pictures/logo.PNG" alt="logo" style="width:100px"></a>
        <h1 style="font-weight: bold; color: green; font-size: 60px; float: middle; font-family: Brush Script MT;text-align: center; ">Bachelor’s Housing Management Website</h1>





<fieldset>
<legend><h2 style="color:skyblue">ADMIN PROFILE</h2></legend>








  <label  style="font-size: 20px; color: white">Name:</label><br>
   <input  style="font-size: 20px ; color:black; "  type="text" name="name" value="<?php echo $name;?>"><br><br>

   <label  style="font-size: 20px; color: white">E-mail:</label><br>
    <input  style="font-size: 20px; color:black;" type="text" name="email" value="<?php echo $email;?>"><br><br>

   <label  style="font-size: 20px; color: white">Date Of Birth:</label><br>
    <input  style="font-size: 20px; color:black;" type="text" name="dob" value="<?php echo $birth;?>"><br><br>

     <label  style="font-size: 20px; color: white">Gender:</label><br>
      <input  style="font-size: 20px; color:black;" type="text" name="gender" value="<?php echo $gender;?>"><br><br>

<br><a style="font-size: 25px ; color:pink;  "  href='Edit_Profile.php'>Edit Profile</a>

</fieldset>
</div>
</div>
</div>
</div>
</body>
</html>
