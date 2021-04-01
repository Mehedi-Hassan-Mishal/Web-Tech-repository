<?php 


session_start();

 ?>





<!DOCTYPE html>
<html>
<body>




<form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<title>HOME PAGE</title>
<h1>The M Company</h1>

<div class="menu">
<?php include 'menu.php';?>
</div>

<h1>Welcome to The M Company</h1>

<?php include 'footer.php';?>

</form>
</body>
</html>
