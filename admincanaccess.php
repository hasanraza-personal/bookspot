<?php
include("connection.php");
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
if(isset($_POST['bookdelete']))
{
	$data=$_POST['bookdelete'];
        $file=$_POST['deletephoto'];

	unlink($file);


	$sql="delete from books where bookname='$data'";
	$conn->query($sql);

	$sql1="delete from review where bookname='$data'";
	$conn->query($sql1);

}

if(isset($_POST['commentdelete']))
{
	$data1=$_POST['commentdelete'];
                
 	$sql="delete from review where srno='$data1'";
 	$conn->query($sql);
}

$sql1="SELECT * FROM `feedback` ORDER BY `feedback`.`srno` DESC";
$result=$conn->query($sql1);

$feedcount=$result->num_rows;

if($feedcount>0)
{
        while($row=$result->fetch_array())
	{
		$srno[]=$row['srno'];
                $type[]=$row['type'];
                $suggestion[]=$row['suggestion'];
	}

}

for($i=0;$i<$feedcount;$i++)
{
        echo '<table>
                    <tr>
                         <td colspan=1>srno </td><td>'.$srno[$i].'</td>
                         <td></td>
                    </tr>
                    <tr>
                         <td>type </td><td>'.$type[$i].'</td>
                    </tr>
                    <tr>     
                         <td>suggestion </td><td>'.$suggestion[$i].'</td>
                    </tr>
              </table>';
}

$sql="select * from books order by srno desc";
$result=$conn->query($sql);

$count=$result->num_rows;

if($count>0)
{
	$bookname=array();

	while($row=$result->fetch_array())
	{
		$bookname[]=$row['bookname'];
                $bookphoto[]=$row['photo'];
	}

	for($i=0;$i<$count;$i++)
	{
		$book_name=$bookname[$i];
                $book_photo=$bookphoto[$i];

		echo'
                <div style="border-style:solid";>
		<form method="post" action="">
                <input type="text" name="deletephoto" value="'.$book_photo.'">
		<button method="post" name="bookdelete" value="'.$book_name.'">Delete bookname->'.$book_name.'</button>
		</form>
		';
		
		$sql3="select * from review where bookname='$book_name' order by srno desc";
		$result1=$conn->query($sql3);

		$count1=$result1->num_rows;

		if($count1>0)
		{
			$srno=array();
			$username=array();
			$review=array();

			while($row=$result1->fetch_array())
			{
				$srno[]=$row['srno'];
				$username[]=$row['username'];
				$review[]=$row['review'];
			}
			for($j=0;$j<$count1;$j++)
			{
				$sr_no=$srno[$j];
				$user_name=$username[$j];
				$user_review=$review[$j];
				echo'
                                <div style="border-style:solid";>
				<form method="post" action="">
				<button method="post" name="commentdelete" value="'.$sr_no.'">delete comment</button>
				</form>
				';	
				echo "username ".$user_name;
				echo "<br>";
				echo "user review ".$user_review;
                                echo "</div>";
			}
		}
		echo "<br>";
                echo "</div>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
	}
}
?>