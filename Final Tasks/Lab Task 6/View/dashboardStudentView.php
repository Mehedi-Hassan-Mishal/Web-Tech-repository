    <fieldset>
<legend><h1>DASHBOARD</h1></legend>

<?php
session_start();

if(isset($_SESSION['username']))
{


 echo "<h1 align='middle'> Welcome ".$_SESSION['username']."</h2>";
 echo "<br><a href='dashboardStudentView.php'>Dashboard</a>";
 echo "<br><a href='viewProfileStudentView.php'>View Profile</a>";
 echo "<br><a href='editProfileStudentView.php'>Edit Profile</a>";
 // echo "<br><a href='upload.php'>Change Profile Picture</a>";
  echo "<br><a href='changePasswordStudentView.php'>Change Password</a>";
  echo "<br><a href ='../Controller/logoutStudentController.php'>Logout </a>";
 



}
else {
  echo "You can not access the page.";
}
 ?>
</fieldset>