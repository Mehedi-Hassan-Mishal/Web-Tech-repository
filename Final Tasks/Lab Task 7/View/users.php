<!DOCTYPE html>
<html lang="en">

  <title>MANAGERS LIST</title>
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
   .table-condensed{
  font-size: 20px;
}

   .my-color
   {
    background: #000;
   }

  </style>
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
              <li><a style="font-size:20px; "  href= "adminProfile.php">Profile</a></li>
        <li><a style="font-size:20px; " href= "View_Properties.php">View All Properties</a></li>
        <li><a style="font-size:20px; "  href= "users.php">View Managers</a></li>
        <li><a style="font-size:20px; " href= "insert.php">Hire Manager</a></li>
        <li><a style="font-size:20px; " href= "Edit_Profile.php">Edit Profile</a></li>
         
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
        <li><a style="font-size:20px; "  href= "adminProfile.php">Profile</a></li>
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

if (isset($_SESSION['username'])) {

    
  echo "<br><a href='Logout.php'></a><br>";

}
else{
    $msg="error";
    header("location:Login.php");
    // echo "<script>location.href='login.php'</script>";
  }

 ?>
    <div class="col-sm-9">
      <div class="well my-color">
        <a class="navbar-brand my-color "> <img src="../Pictures/logo.PNG" alt="logo" style="width:100px"></a>
        <p style="font-weight: bold; color: green; font-size: 60px; float: middle; font-family: Brush Script MT;text-align: center; ">Bachelor’s Housing Management Website</p><br><br><br>
  
   

</div>
</div>

<br><br>
  <div class="col-sm-9 ">
          <div class="well  my-color">
            <br>	<h2 style="text-align:center; color:white ">List of all Managers</h2><br>
     
     </div>
        </div>
     
  

 
  <div class="col-sm-12">
          <div class="well my-color"><br><br>
          	
<?php 

require_once 'connect.php';



echo "<div class='container'>";

if( isset($_POST['delete'])){
	$sql = "DELETE FROM users WHERE user_id=" . $_POST['userid'];
	if($con->query($sql) === TRUE){
		echo "<div class='alert alert-success'>Successfully deleted</div>";
	}
}


$sql 	= "SELECT * FROM users";
$result = $con->query($sql); 

if( $result->num_rows > 0)
{ 
	?>
	
	<table class="table table-bordered table-hover text-primary table-condensed ">
		<thead class="thead-light">
	     <tr class="table-success">
			<td style="color: brown; font-size:20px;  font-weight: bold; ">First Name</td>
			<td style="color: brown; font-size:20px;  font-weight: bold; ">Lastname</td>
			<td style="color: brown; font-size:20px;  font-weight: bold; ">Address</td>
			<td style="color: brown; font-size:20px;  font-weight: bold; ">Contact</td>
			<td style="color: brown; font-size:20px;  font-weight: bold; " width="100px">Delete</td>
			<td style="color: brown; font-size:20px;  font-weight: bold; " width="100px">EDIT</td>
		</tr>
	</thead>
	<?php
	while( $row = $result->fetch_assoc()){ 
		echo "<form  action='' method='POST'>";	//added
		echo "<input type='hidden' value='". $row['user_id']."' name='userid' />"; //added
		echo "<tr>";
		echo "<td>".$row['firstname'] . "</td>";
		echo "<td>".$row['lastname'] . "</td>";
		echo "<td>".$row['address'] . "</td>";
		echo "<td>".$row['contact'] . "</td>";
		echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>";  
		echo "<td><a href='edit.php?id=".$row['user_id']."' class='btn btn-info'>Edit</a></td>";
		echo "</tr>";
		echo "</form>"; //added 
	}
	?>
	</table>


<?php 
}
else
{
	echo "<br><br>No Record Found";
}
?> 



 <div style="color:white; text-align:center ">

<?php 

 require_once 'footer.php';
 ?>
</div>
</div>
  </div>
</div>
</div>

  </body>
</html>
