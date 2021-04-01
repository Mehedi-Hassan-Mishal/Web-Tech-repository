<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php
// define variables and set to empty values
$nameErr = $emailErr = $dobErr = $genderErr = $degreeErr = $bgErr = "";
$name = $email = $dob = $gender = $degree = $bg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required"; }
   else if(!(str_word_count ($name)>=2))
  {
    $nameErr = "contains atleast 2 words";
  }

  else{}
  {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) 
    {
      $nameErr = "Only letters and white space allowed";
    }

  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    

   if (empty($_POST["testDate"])) 
  {
    $dobErr = "Date of Birth is required";
  } 
  else 
  {
   
   if(isset($_POST['submit']))
    {
      $dob = test_input($_POST["testDate"]);
    }
  }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } 
  else 
  {
    $gender = test_input($_POST["gender"]);
  }


  if (empty($_POST["degree"])) 
  {
    $degreeErr = "Atleast two of them must be seltected";
  } 
   else 
  {
    if(isset($_POST['submit']))
    {

    $check =0;

        $values =($_POST['degree']);

        $check = count($values);

        if($check <2)
        {
          $degreeErr = "Please Select Atleast two degree";
        }
  }
    
  }

  
  if (empty($_POST["bg"])) 
  {
    $bgErr = "Blood Group is required";
  } 
   else 
  {
    $bg = test_input($_POST["bg"]);
  }
}

function test_input($array) 
{
  $array = trim($array);
  $array = stripslashes($array);
  $array = htmlspecialchars($array);
  return $array;
}
?>


<h2>Web Tech Lab Task 2</h2>
<p><span class="error">* Required Field</span></p>
<fieldset>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

  <fieldset>
 <legend>  NAME:</legend> <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  </fieldset>
  <br><br>

  <fieldset>
  <legend>E-MAIL:</legend> <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  </fieldset>
  <br><br>

  <fieldset>
  <legend>DATE OF BIRTH:</legend>
   <input type="date" name="testDate">
   <span class="error">* <?php echo $dobErr;?></span>
   </fieldset>
   <br><br>

   <fieldset>
  <legend>GENDER:</legend>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  </fieldset>
  <br><br>

  <fieldset>
  <legend>DEGREE:</legend>
  <input type="checkbox" name="degree[1]" value="SSC">SSC
  <input type="checkbox" name="degree[2]" value="HSC">HSC
  <input type="checkbox" name="degree[3]" value="BSc">BSc
  <input type="checkbox" name="degree[4]" value="MSc">MSc
  <span class="error">* <?php echo $degreeErr;?></span>
  </fieldset>
  <br><br>
     
  <fieldset>
  <legend>BLOOD GROUP:</legend>
  <select id = "bg" name="bg" size="2">
  <option value="A+">A Positive</option>
  <option value="B+">B Positive</option>
  <option value="A-">A Negative</option>
  <option value="B-">B Negative</option>
  <option value="AB+">AB Positive</option>
  <option value="AB-">AB Negative</option>
  <option value="O+">O Positive</option>
  <option value="O-">O Negative</option>
  </select>
  <span class="error">* <?php echo $bgErr;?></span>
  </fieldset>
  <br><br> 


<input type="submit" name="submit" value="Submit">
</form>
</fieldset>


<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dob;
echo "<br>";
echo  'Checked Tutorials:' . var_dump($values);
echo $degree;
echo "<br>";
echo $gender;
echo "<br>";
echo $bg;
echo "<br>";
?>

</body>
</html>