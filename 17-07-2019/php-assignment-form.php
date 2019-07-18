
<!DOCTYPE html>
<html>
<head>

<title>Student Registration Form</title>
</head>

<body>

    <?php
    $fname = $lname = $email = $gender = $address = $contact = $city = "";
    $fnameErr = $lnameErr  = $emailErr = $genderErr = $addressErr= $contactErr = $cityErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["fname"])) 
  {
    $fnameErr = "Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed"; 
    }
  }
         if (empty($_POST ["lname"])) {
            $lnameErr = "Name is required";
        }
         else {
            $lname = test_input($_POST["lname"]);
            if(!preg_match("/^[a-zA-Z ]*$/", $lname)) {
            $lnameErr = "Only letters and white space allowed";
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
   if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

<h1>Student Registration Form</h1>

<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>">

First Name : <input type="text" name="fname" value="<?php echo $fname; ?>">
<span class="error">* <?php echo $fnameErr;?></span>
<br><br>

Last Name : <input type="text" name="lname" value="<?php echo $lname;?>" >
<span class="error">* <?php echo $lnameErr;?></span>

<br><br>

Email Id : <input type="text" name="email" value="<?php echo $email; ?>" >
<span class="error">* <?php echo $emailErr;?></span><br><br>

 Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span><br><br>

  City : <input type="text" name="city" value="<?php echo $city;?>">
  <!--   (max 30 characters a-z and A-Z) -->
    <span class="error">* <?php echo $cityErr;?></span><br><br>

      Contact no : <input type="text" name="contact" value="<?php echo $contact;?>">
  <!--   (max 15 NUMBERS) -->
    <span class="error">* <?php echo $contactErr;?></span><br><br>

Residential Address : 
<textarea name="address" rows="4" cols="40"><?php echo $address; ?></textarea>
<span class="error">* <?php echo $addressErr;?></span>

<input type="submit" name="submit" value="Submit"> 


</form>

<?php
echo "<h2>Your Input:</h2>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $city;
echo "<br>";
echo $contact;
echo "<br>";
echo $address;
?>

</body>
</html>