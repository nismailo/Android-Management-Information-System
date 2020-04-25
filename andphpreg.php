<?php
$servername="localhost";
$mysql_user="root";
$mysql_password="";
$dbname="doctormis";
$mysqli_connect($servername,$mysql_use,$mysql_passwordr,$dbname);
if($conn){
echo("connection success");
}
else {
echo ("connection not sucess");
}
if($ SERVER['REQUEST_METHOD']=='POST'){
$doctorname=$_POST ['doctorname'];
$phone=$_POST ['phone'];
$email=$_POST ['email'];
$username=$_POST ['username'];
$password=$_POST ['password'];
$confirmpassword=$_POST ['confirmpassword'];
$male=$_POST ['male'];
$female=$_POST ['female'];
$query= INSERT INTO `registration`(`editDoctorName`, `editPhone`, `editEmail`, `rdMale`, `rdFemale`, `Txtspinnerr`, `editUserName`, `editPassword`) VALUES ('$doctorname','$phone','$email','$username','$password','$confirmpassword','$male','$female')
if(mysqli_query($conn,$query)){
echo("registered sucessfully");
}else {
echo("error in request method");
}

?>