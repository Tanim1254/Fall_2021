<?php
class db{
function OpenCon()
{
$servername="localhost";
$username="root";
$password="";
$dbname="CV";

$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection failed: ".$conn->connect_error);
}
return $conn;
}
/*$a_name="Sazia Rahman";
$a_id=1001;
$a_password=123;
$a_email="saziabc@gmail.com";
$a_phone=212324;
$sql="INSERT INTO admin(a_name,a_id,a_password,a_email,a_phone) VALUES ('$a_name','$a_id','$a_password','$a_email','$a_phone')";*/
function ShowAll($conn,$table)
{
    $result=$conn->query("select * from $table");
    return $result;
}
function CloseCon()
{
    $conn->close();
}
}
?>
<?php
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
$connection= new db();
$connobj=$connection->OpenCon();



$sql="INSERT INTO admin(User_Name,Password,Full_Name,Mobile_No,Date_of_Birth,University,Degree,Major,Results,Passing) 
VALUES ('$name','$password','$fname','$mobile','$dateOfBirth','$university','$degree','$major','$results','$yearpassed')";
function Insert($conn)
{
    $result=$conn->query($sql);
    return $result;
if($conn->query($sql)==TRUE)
{
    echo "insertion successful";
}
}

?>