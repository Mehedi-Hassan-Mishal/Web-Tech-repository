<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <fieldset>
  <legend><h2>Change Password</h2></legend>
    
    <form method="post" action="../Controller/changePasswordStudentController.php">
        Current Password: <input type="text" name="cpassword" >
        <br><br>
        <span style="color:green">New Password:</span>
        <input type="text" name="npassword" >
        <br><br>
        <span style="color:Red">Retype New Password:</span>
        <input type="text" name="rnpassword" >
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>

    </fieldset>
    </form>
    
  </body>
</html>