<!DOCTYPE html>
<html>
<head>
	<title>STAR RATING</title>
	<style type="text/css">
		#star
		{
			font-size:300%;
			color:yellow;
			float: left;
		}

		.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
	</style>
</head>
<body>
	<form method="post" action="storerating.php">
		<label class="container">1 star
		<input type="radio" name="star" id="star1" value="1">
		<span class="checkmark"></span>
		</label>
		<br>
		<label class="container">2 star
		<input type="radio" name="star" id="star2" value="2">
		<span class="checkmark"></span>
		</label>
		<br>
		<label class="container">3 star
		<input type="radio" name="star" id="star3" value="3">
		<span class="checkmark"></span>
		</label>
		<br>
		<label class="container">4 star
		<input type="radio" name="star" id="star4" value="4">
		<span class="checkmark"></span>
		</label>
		<br>
		<label class="container">5 star
		<input type="radio" name="star" id="star5" value="5">
		<span class="checkmark"></span>
		</label>
		<br>
		<br>
		<button type="submit" name="submit">POST</button>
	</form>
</body>
</html>

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
$sql="select * from rating";
$query=$conn->prepare($sql);
$query->execute();
$result=$query->get_result();

$count=$result->num_rows;
if($count>0)
{
	$user_star=array();

	while($row=$result->fetch_array())
	{
		$user_star[]=$row['rating'];
	}
	for($i=0;$i<$count;$i++)
	{
		$star=$user_star[$i];

		echo'
		<html>
		<head>
		<style type="text/css">

		

		</style>
		</head>
		<body>';

		if($star=="1")
		{
		 echo "<div id='star'>&starf;</div>";

		}
		if($star=="2")
		{
		 echo '<div id="star">&starf;</div>
		 <div id="star">&starf;</div>';
		 
		}
		if($star=="3")
		{
		 echo '<div id="star">&starf;</div>
		 <div id="star">&starf;</div>
		 <div id="star">&starf;</div>';
		}
		if($star=="4")
		{
		 echo '<div id="star">&starf;</div>
		 <div id="star">&starf;</div>
		 <div id="star">&starf;</div>
		 <div id="star">&starf;</div>';
		}
		if($star=="5")
		{
		 echo '<div id="star">&starf;</div>
		 <div id="star">&starf;</div>
		 <div id="star">&starf;</div>
		 <div id="star">&starf;</div>
		 <div id="star">&starf;</div>';
		}

		'
		</body>
		</html>';
	}
}
else
{

}

?>

