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
ini_set('memory_limit', '1024M');

function compressImage($source,$destination,$quality)
        {
        $imgInfo=getimagesize($source);
	
	$mime=$imgInfo['mime'];
        
       
	//create a new image from file   
	switch($mime)
	{
		case 'image/jpg':
		$image=imagecreatefromjpg($source);
		break;

		case 'image/jpeg':
		$image=imagecreatefromjpeg($source);
		break;

		case 'image/png':
		$image=imagecreatefrompng($source);
                break;

		default:
		$image=imagecreatefromjpeg($source);
                break;
	}

	//save image
	imagejpeg($image,$destination,$quality);

	//return the compress image
	return $destination;
}

$sql="create table if not exists books
(
 srno int not null auto_increment,
 username text,
 bookname text,
 photo text,
 category text,
 authorname text,
 totalstar int,
 total int,
 primary key(srno)
);";
$query=$conn->prepare($sql);
$query->execute();
$query->close();

if(isset($_POST['bookname']))
{
	$user_name=htmlspecialchars($_POST['username']);
	$book_name4=htmlspecialchars($_POST['bookname']);
	
        $book_name4=trim($book_name4);

        $book_name4 = preg_replace('!\s+!', ' ', $book_name4);
        
        $book_name=strtoupper($book_name4);
	$user_rating=htmlspecialchars($_POST['star']);

	$sql1="select bookname,photo,authorname from books where bookname=?";
	$query1=$conn->prepare($sql1);
	$query1->bind_param("s",$book_name);
	$query1->execute();
	$query1->store_result();
	$result=$query1->num_rows;
	$query1->bind_result($book_name1,$book_photo1,$author_name1);
	
	if($result>0)
	{
		$query1->fetch();

		if(($book_name1!="")&&($book_photo1==NULL))
		{
			$photo=$_FILES['photo']['name'];
			if($photo!="")
			{
				$change_name=md5(rand()).'.'.$photo;
				$bookphoto="upload/".$change_name;
				$filetype=pathinfo($bookphoto, PATHINFO_EXTENSION);

				$allowtypes=array('jpg','png','jpeg');
				if(in_array($filetype,$allowtypes))
				{
					//image temp source and size
					$imagetemp=$_FILES['photo']['tmp_name'];
					$imagesize=$_FILES['photo']['size'];
			
					//compress size and upload image
					$compressedimage=compressImage($imagetemp,$bookphoto,10);
					//move_uploaded_file($_FILES['photo']['tmp_name'],$compressedimage);
				}
				else
				{
				$myfile=fopen("error.php","w");
			        $file='<?php
			        $error="<div class=error ><b>FILE FORMAT NOT SUPPORTED, ONLY JPG AND PNG ARE SUPPORTED</b></div>";
			        echo $error;?>';
			        fwrite($myfile,$file);
			        fclose($myfile);
			        header('location:filldetails.php');
				exit;
                                }
			}
			else
			{

			}
			$sql2="update books set photo=? where bookname=?";
			$query2=$conn->prepare($sql2);
			$query2->bind_param("ss",$compressedimage,$book_name);
			$query2->execute();
			$query2->close();
		}
		else if(($book_name1!="")&&($book_photo1!=""))
		{

		}
	}
	else
	{
		$photo=$_FILES['photo']['name'];
		if($photo=="")
		{
                
              	}
		else
		{
				$change_name=md5(rand()).'.'.$photo;
				$bookphoto="upload/".$change_name;
				$filetype=pathinfo($bookphoto, PATHINFO_EXTENSION);

				$allowtypes=array('jpg','png','jpeg');
				if(in_array($filetype,$allowtypes))
				{
					//image temp source and size
					$imagetemp=$_FILES['photo']['tmp_name'];
					$imagesize=$_FILES['photo']['size'];
			
					//compress size and upload image
					$compressedimage=compressImage($imagetemp,$bookphoto,10);
					$compressedimagesize=filesize($compressedimage);
					
				}
				else
				{
                                 $myfile=fopen("error.php","w");
			        $file='<?php
			        $error="<div class=error><b>FILE FORMAT NOT SUPPORTED, ONLY JPG AND PNG ARE SUPPORTED</b></div>";
			        echo $error;?>';
			        fwrite($myfile,$file);
			        fclose($myfile);
			        header('location:filldetails.php');
				exit;

				}
		}
		$author_name=$_POST['authorname'];
		$count=1;
		$total_star=$user_rating;
	}
	$book_category=htmlspecialchars($_POST['category']);
	$description=htmlspecialchars($_POST['description']);
	

	$sql3="select category,totalstar,total from books where bookname=?";
	$query3=$conn->prepare($sql3);
	$query3->bind_param("s",$book_name);
	$query3->execute();
	$query3->store_result();
	$result2=$query3->num_rows;
	$query3->bind_result($user_category,$total_stars,$total_count);
	
	if($result2>0)
	{
		$query3->fetch();

		$total_count++;

		$user_review=$description;

		$sql4="create table if not exists review
		(
			srno int not null auto_increment,
			username text,
			bookname text,
			category text,
			rating text,
			review text,
			primary key(srno)
		);";
		$sql4=$conn->prepare($sql4);
		$sql4->execute();
		$sql4->close();
                
                $book_name=trim($book_name);

                $book_name = preg_replace('!\s+!', ' ', $book_name);
                
		$sql5="insert into review(username,bookname,category,rating,review) values(?,?,?,?,?)";
		$query5=$conn->prepare($sql5);
		$query5->bind_param("sssss",$user_name,$book_name,$user_category,$user_rating,$user_review);
		$query5->execute();
		$query5->close();


		$total_stars=$total_stars+$user_rating;

		$sql7="update books set total=?, totalstar=? where bookname=?";
		$query7=$conn->prepare($sql7);
		$query7->bind_param("sss",$total_count,$total_stars,$book_name);
		$query7->execute();
		$query7->close();
	}
	else
	{
                $book_name=trim($book_name);

                $book_name = preg_replace('!\s+!', ' ', $book_name);

		$sql6="insert into books(username,bookname,photo,category,authorname,totalstar,total)values(?,?,?,?,?,?,?)";
		$query6=$conn->prepare($sql6);
		$query6->bind_param("sssssss",$user_name,$book_name,$compressedimage,$book_category,$author_name,$total_star,$count);
		$query6->execute();
		$query6->close();


		$sql5="insert into review(username,bookname,category,review,rating) values(?,?,?,?,?)";
		$query5=$conn->prepare($sql5);
		$query5->bind_param("sssss",$user_name,$book_name,$book_category,$description,$user_rating);
		$query5->execute();
		$query5->close();
	//	move_uploaded_file($_FILES['photo']['tmp_name'],$book_photo);
	}
	header("location:index.php");
}
?>