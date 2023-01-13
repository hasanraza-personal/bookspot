<?php
include("connection.php");
error_reporting(0);
$sql="create table if not exists feedback
(
	srno int not null auto_increment,
	type text,
	suggestion text,
	primary key(srno)
);";
$query=$conn->prepare($sql);
$query->execute();
$query->close();

if(isset($_POST['submit']))
{
	$type=$_POST['error'];
	$suggestion=$_POST['description'];
	
	$sql2="insert into feedback(type,suggestion) values(?,?)";
	$query2=$conn->prepare($sql2);
	$query2->bind_param("ss",$type,$suggestion);
	$query2->execute();
	$query2->close();
	header("location:index.php");
}
else
{
	header("location:index.php");
}
?>