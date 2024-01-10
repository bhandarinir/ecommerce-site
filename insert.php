<?php 
$username ='root';
$password ='';
$server ='localhost';
$database ='project';
$con = new mysqli($server,$username,$password,$database);


$name =$_POST['Name'];
$email =$_POST['Email'];
$subject =$_POST['Subject'];
$text =$_POST['Number'];

$sql = "INSERT INTO `form`(`Name`, `Email`, `Subject`, `Number`) VALUES ('[$name]','[$email]','[$subject]','[$text]')";
if($con-> query($sql)==true)
{
	echo "YOUR ORDER IS PALACED. THANK YOU FOR TRUST US. WE ARE ALWAYS WITH YOU.";
}
else{

	echo "sorry";
}

?>


