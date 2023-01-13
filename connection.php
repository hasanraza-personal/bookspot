<?php
error_reporting(0);
$servername="fdb26.awardspace.net";
$username="3394989_book";
$password="H@san7292khan";
$dbname="3394989_book";
$conn=new mysqli($servername,$username,$password,$dbname);

$alltables = mysqli_query($conn,"SHOW TABLES;");
 
// record the output
$output = array();
 
while($table = mysqli_fetch_assoc($alltables)){
 foreach($table as $db => $tablename){
  $sql = 'OPTIMIZE TABLE '.$tablename.';';
  $response = mysqli_query($conn,$sql) or die(mysql_error());
  $output[] = mysqli_fetch_assoc($response);
 };
};

?>