<?php
session_start();
if(isset($_SESSION['fname']))
{
    header("Location: Page2.php");
}

?>

<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

$fname=$lname =$mobile=$dateOfBirth=$password= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
  $fname = test_input($_POST["fname"]);
 
if(strlen(test_input($_POST["password"]))<=8)
  {$password = test_input($_POST["password"]);}
  else
  {echo "Sorry, there was an error entering password.";}
$mobile= test_input($_POST["mobile"]);

$dateOfBirth= test_input($_POST["dateOfBirth"]);
$university = test_input($_POST["university"]);
  $degree = test_input($_POST["degree"]);
 
$major = test_input($_POST["major"]);
  
$results= test_input($_POST["results"]);

$yearpassed= test_input($_POST["yearpassed"]);


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form action="LabExam.php" method="post" enctype="multipart/form-data">
User Name: <input type="text" name="name">
  <br>  
  Password: <input type="password" name="password">
  <br>
  Full Name: <input type="text" name="fname">
  <br>
  Mobile Number: <input type="text" name="mobile">
  <br>
  Date of Birth:
  <input type="date" name="dateOfBirth">
 
 <a href="Page2.php">
  Next </a>
 
</form>
</body>
</html>
