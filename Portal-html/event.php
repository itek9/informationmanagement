<?php

$Event=$_POST['Event'];
$Category=$_POST['Category'];
$Team1=$_POST['Team1'];
$Team2=$_POST['Team2'];
$Location=$_POST['Location'];


$conn = new mysqli('localhost','root','','database');
if($conn->connect_error){
	die('Connection Failed :'.$conn->connect_error);
}else{
	$stmt=$conn->prepare("INSERT INTO event( Event ,Category,Team1,Team2, Location)
		values(?,?,?,?,?)");
	$stmt->bind_param('sssss',$Event,$Category,$Team1,$Team2,$Location);
	$stmt->execute();
	
header("Location:Events.php");
	
	$stmt->close();
	$conn->close();
	
exit();

}
?>