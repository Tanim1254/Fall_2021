<?php

$formcontrol = array(
	'FirstName'=>$_POST["FirstName"],
	'LastName' =>$_POST["LastName"],
	'Age' => $_POST["Age"],
	'Email' =>$_POST["Email"],
	'Password' =>$_POST["Password"],
	'Designation' =>@$_POST["Designation"],
	'hobby1' =>@$_POST["hobby1"],
	'hobby2' =>@$_POST["hobby2"],
	'hobby3' =>@$_POST["hobby3"],
	'file' => @$_POST["File"]
);

$existingdata = file_get_contents('data.json');
$tempJSONdata = json_decode($existingdata);
$tempJSONdata[] =$formcontrol;
$jsonconvert = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
if(file_put_contents("data.json",$jsonconvert))
{
	echo "Data Saved Successfully";
}
else

	echo " not saved";


?>