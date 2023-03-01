<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<h2>REGISTRATION FORM </h2>
  <style>
   h2{
    text-align:center;
   }
   form 
   {
    background-image:url("fog.jpg");
    margin-left:auto;
    margin-right:auto;
    font-weight:bolder;
    background-color:none;
    box-shadow:0 5px 50px rgba(0,0,0,0.15);
      max width:500px;
   }
   </style>
<?php
// define variables and set to empty value
$useridErr=$useridErr=$comment=$useridErr="";
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed {
      if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}*$/",$email));{
        $emailErr= "Invalid email format";
      }

}
  }
  if (empty($_POST["Address"])) {
    $website = "";
  } else {
    $website = test_input($_POST["Address"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$Address)) {
      $AddressErr = "Address is requires";
    }    
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = " Required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<p><span class="error"></span></p>
<form class="container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  Name: <input type="text" name="name" class="form-control">
 <span class="error">* <?php echo $nameErr;?></span><br><br>

  Address:<input type="text" name="Address" class="form-control">
  <span class="error">* <?php echo $AddressErr;?></span><br><br>
  Country:
  <select>
    <option>India</option>
    <option>Europe</option>
    <option>Canada</option>
</select>
    <span class="error">* <?php echo $CountryErr;?></span><br><br>    
  ZIP Code:</td><td><input type="text" name="ZIP Code" class="form-control">
  <span class="error">* <?php echo $ZIPCodeErr;?></span><br><br>

  E-mail:</td><td> <input type="text" name="email"class="form-control">
  <span class="error">* <?php echo $emailErr;?></span><br><br>
  Sex:
  <input type="radio" name="sex" value="female">Female
  <input type="radio" name="sex" value="male">Male
  <span class="error">* <?php echo $genderErr;?></span><br><br>
  Language:
  <input type="checkbox" name="English" value="English"> English
  <input type="checkbox" name="Non English" value="Non English">Non English
  <span class="error">* <?php echo $LanguageErr;?></span><br><br>
  About:<br>
  <textarea name="comment" rows="5" cols="40"class="form-control"></textarea>
  <span class="error">* <?php echo $LanguageErr;?></span><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $Country;
echo "<br>";
echo $About;
echo "<br>";
echo $Sex;
echo"<br>";
echo $Address;
echo"<br>";
echo$Zipcode;
echo"<br>";
echo$Language;
echo"<br>";
?>
</body>
</html>