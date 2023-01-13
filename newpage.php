
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
if(isset($_POST['search']))
{
	$value1=$_POST['search'];
    $value=urldecode($value1);
	$sql5="select bookname from review where bookname='$value' order by srno desc";
$result=$conn->query($sql5);
$count=$result->num_rows;
echo'

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BOOKS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="shortcut icon" href="logo.png">
        <link rel="icon" type="image/png" href="logo.png">
        <link rel="apple-touch-icon" href="logo.png">
	<body id="imagebackground">
	
	<div id="name">
		<span id="websitename">BOOK SPOT</span>
		<br>
		<span id="quote">Your Search Ends Here</span>
	</div>

	<div id="navigation_bar">
		<a class="a" href="index.php"><i style="font-size:24px; color:white" class="fa">&#xf053;</i></a>
	</div>
</body>
</head>
</html>
';

if($count>0)
{
	$check_bookname=array();

	while($row=$result->fetch_array())
	{
		
		$check_bookname[]=$row['bookname'];
				
	}
		$check_bookname=array_unique($check_bookname);

		$main_count=count($check_bookname)-1;
		$check_bookname=array_combine(range(0,$main_count),array_values($check_bookname));	
		
	echo "<br>";
	
	for($i=0;$i<=$main_count;$i++)
	{
		$bookname2=$check_bookname[$i];

		$sql="select * from books where bookname='$bookname2' order by srno desc";
		$result=$conn->query($sql);

		if($result->num_rows>0)
		{
			$row=$result->fetch_array();

		$username=$row['username'];
		$bookname=$row['bookname'];
		$photo=$row['photo'];
		$bookcategory=$row['category'];
		$authorname=$row['authorname'];
		$totalstar=$row['totalstar'];
		$totalcount=$row['total'];

		$average_star=$totalstar/$totalcount;
		$averagestar=(int)$average_star;

		echo '
		<html>
		<body>
		<div class="main">
		<div class="main_name">
		<div><img id="circle" src="upload/defaultbook1.jpg"></div>
		
		<div class="booksname"><a href="https://www.google.com/search?q='.$bookname.' book&oq='.$bookname.' book&aqs=chrome..69i57j69i59j69i60l3.1089j0j7&client=ms-android-rogers-ca-revc&sourceid=chrome-mobile&ie=UTF-8" >'.$bookname.'</a></div></div>';

		if($photo=="")
		{
			echo '
			<div class="image"><img class="photosize" src="upload/defaultbook.jpg"></div>';
		}
		else
		{
			echo '
			<div class="image"><img class="photosize" src="'.$photo.'"></div>';
		}


		echo'
		<label class="tag">Written by</label>
		<div class="authorname">
		'.$authorname.'
		</div>
		<br>
		<label class="tag">Category</label>
		<div class="bookcategory">
		'.$bookcategory.'
		</div>
		<br>';

		if($averagestar=="1")
		{
		 echo "<div class='averagestar'> <div id='star1'>&starf;</div></div><br>";

		}
		else if($averagestar=="2")
		{
		 echo '<div class="averagestar">
		 <div id="star1">&starf;</div>
		 <div id="star1">&starf;</div>
		 </div><br>';
		 
		}
		else if($averagestar=="3")
		{
		 echo '<div class="averagestar">
		 <div id="star1">&starf;</div>
		 <div id="star1">&starf;</div>
		 <div id="star1">&starf;</div>
		 </div><br>';
		}
		else if($averagestar=="4")
		{
		 echo '<div class="averagestar">
		 <div id="star1">&starf;</div>
		 <div id="star1">&starf;</div>
		 <div id="star1">&starf;</div>
		 <div id="star1">&starf;</div>
		 </div><br>';
		}
		else if($averagestar=="5")
		{
		 echo '<div class="averagestar">
		 <div id="star1">&starf;</div>
		 <div id="star1">&starf;</div>
		 <div id="star1">&starf;</div>
		 <div id="star1">&starf;</div>
		 <div id="star1">&starf;</div>
		 </div><br>';
		}

		echo'
		<br>
	
		<div class="line1"></div>
		<div class="comments">
		';
	}

		$sql="select * from review where bookname='$bookname' order by srno desc";
		$result=$conn->query($sql);
		$count1=$result->num_rows;


		if($count1>0)
		{
			$name=array();
			$user_star1=array();
			$review=array();

			while($row=$result->fetch_array())
			{
				$name[]=$row['username'];
				$user_star1[]=$row['rating'];
				$review[]=$row['review'];
			}
			for($j=0;$j<$count1;$j++)
			{
				$name1=$name[$j];
				$user_star=$user_star1[$j];
				$user_review=$review[$j];

				echo '
	
		
		<div class="singlecomment">
		<div class="commentphoto"><img class="cphoto" src="upload/commentphoto.jpg" height="35px" width="100%"></div>
		<div class="username">
		'.$name1.'
		</div>

		<div class="description">
		'.$user_review.'
		</div>';

				if($user_star=="1")
		{
		 echo "<div class='allstar'> <div id='star'>&starf;</div></div><br>";

		}
		else if($user_star=="2")
		{
		 echo '<div class="allstar">
		 <div id="star">&starf;</div>
		 <div id="star">&starf;</div>
		 </div><br>';
		 
		}
		else if($user_star=="3")
		{
		 echo '<div class="allstar">
		 <div id="star">&starf;</div>
		 <div id="star">&starf;</div>
		 <div id="star">&starf;</div>
		 </div><br>';
		}
		else if($user_star=="4")
		{
		 echo '<div class="allstar">
		 <div id="star">&starf;</div>
		 <div id="star">&starf;</div>
		 <div id="star">&starf;</div>
		 <div id="star">&starf;</div>
		 </div><br>';
		}
		else if($user_star=="5")
		{
		 echo '<div class="allstar">
		 <div id="star">&starf;</div>
		 <div id="star">&starf;</div>
		 <div id="star">&starf;</div>
		 <div id="star">&starf;</div>
		 <div id="star">&starf;</div>
		 </div><br>';
		}	
		echo "</div>";
			
			echo "<br>";

			

		}

}
echo '</div></div>
			</body>
			</html>';
		echo "<br>";
		echo "<br>";
		echo "<br>";

			}
			echo "<br>";


	
}

}	
else
{
	 header("location:index.php");
		
}
?>