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
if(isset($_POST['postbook']))
{
	$searchbook=$_POST['postbook'];
        
        $searchbook=trim($searchbook);

        $searchbook = preg_replace('!\s+!', ' ', $searchbook);

	$sql="select bookname,photo from books where bookname=?";
	$query=$conn->prepare($sql);
	$query->bind_param("s",$searchbook);
	$query->execute();
	$query->store_result();
	$result=$query->num_rows;
	$query->bind_result($book_name,$book_photo);

	if($result>0)
	{
		$query->fetch();
	
		if(($book_photo==NULL)&&($book_name!=""))
		{
			echo '<br><label>Book Photo(optional)<br></label><div class="photo"><input type="file" name="photo" autofocus accept="image/*"></div>';
		}
		else if(($book_photo!="")&&($book_name!=""))
		{
			echo "upload your review";
		}
	}
	else
	{
		
	}
}

if(isset($_POST['postname']))
{
$name=$_POST['postname'];

if($name=="all")
{

$sql5="select bookname from review order by srno desc";
$result=$conn->query($sql5);
$count=$result->num_rows;


if($count>0)
{
	$check_bookname=array();

	while($row=$result->fetch_array())
	{
		
		$check_bookname[]=$row['bookname'];
				
	}
        //print_r($check_bookname);
	
		$check_bookname=array_unique($check_bookname);
                
                $check_bookname=array_unique($check_bookname);
            
		$main_count=count($check_bookname)-1;
		$check_bookname=array_combine(range(0,$main_count),array_values($check_bookname));	
		
               // echo $main_count;

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
		<label class="tag">written by</label>
		<div class="authorname">
		'.$authorname.'
		</div>
		<br>
		<label class="tag">category</label>
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
$sql5="select bookname from review where category='$name' order by srno desc";
$result=$conn->query($sql5);
$count=$result->num_rows;


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
			<div class="image"><img src="upload/defaultbook.jpg" height="149px" width="100%"></div>';
		}
		else
		{
			    
			echo '
			<div class="image"><img class="photosize" src="'.$photo.'"></div>';
		}


		echo'
		<label class="tag">wtitten by</label>
		<div class="authorname">
		'.$authorname.'
		</div>
		<br>
		<label class="tag">category</label>
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

			}
			
		}
		echo'
				</div>
				</div>
				</body>
				</html>';

		echo "<br>";
		echo "<br>";
	}
	
}	
}
}
?>
