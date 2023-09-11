<?php

$email=$_POST['email'];
$psw=$_POST['psw'];
$name=$_POST['name'];

$conn = new mysqli('localhost','root','','database');
if($conn->connect_error){
	die('Connection Failed :'.$conn->connect_error);
}else{
	$stmt=$conn->prepare("INSERT INTO data(email,psw,name)
		values(?,?,?)");
	$stmt->bind_param('sss',$email,$psw,$name);
	$stmt->execute();
	
header("Location:index.html");
	
	$stmt->close();
	$conn->close();
	
exit();

}
?>