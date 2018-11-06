<?php
$passwordused=$_POST["passwordused"];
$emailid=$_POST["emailid"];
if(!empty($passwordused) || !empty($emailid))
{
$host="localhost";
$username="root";
$password="";
$dbname="newdb1";

$conn= mysqli_connect($host,$username,$password,$dbname);
if(mysqli_connect_error())
{
	die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
}
else{
	$SELECT="SELECT emailid From othertable Where emailid=? Limit=1";
	$INSERT="INSERT INTO othertable
	values('$emailid','$passwordused')";
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