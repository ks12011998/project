<?php
$id=$_POST["id"];
$username=$_POST["username"];
$password=$_POST["password"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$phonecode=$_POST["phonecode"];
$phone=$_POST["phone"];
if(!empty($username) || !empty($id) || !empty($password) || !empty($email) || !empty($phonecode) || !empty($phone) || !empty(gender))
{
$host="localhost";
$username="root";
$password="";
$dbname="newdb";

$conn= mysqli_connect($host,$username,$password,$dbname);
if(mysqli_connect_error())
{
	die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}
else{
	$SELECT="SELECT email From mytable Where Email=? Limit=1";
	$INSERT="INSERT INTO mytable
	values($id,'$username','$password','$gender','$email',$phonecode,$phone)";
  $result = mysqli_query($conn,$INSERT);
  if(!$result)
	  die(mysqli_error($conn));
}
}
else
{
	echo "ALL fields are required";
die();}
?>