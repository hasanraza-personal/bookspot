<?php
include("connection.php");
error_reporting(0);
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
if(isset($_GET['q']))
{
	$q=htmlspecialchars($_GET['q']);

	$likeString = '%'.$q.'%';
	$sql="select bookname from books where bookname like ?";
	
	$query=$conn->prepare($sql);
	$query->bind_param("s",$likeString);
	$query->execute();
	$query->store_result();
	$result=$query->num_rows;
	$query->bind_result($search_value);	

	if($result>0)
	{
		while($query->fetch())
		{

			echo '<form method="post" action="newpage.php">
			<button id="searchvalue" type="submit" value='.urlencode($search_value).' name="search"><img class="sphoto" src="upload/defaultbook1.jpg" height="25px" width="7%">'.$search_value.'</button>';
		}
	}
	else
	{
		echo "no data found";
	}
}
else
{
	echo "bad request";
}

?>