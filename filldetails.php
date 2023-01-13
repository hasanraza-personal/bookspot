<!DOCTYPE html>
<html>

<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FILL DETAILS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
    <link rel="shortcut icon" href="logo.png">
    <link rel="icon" type="image/png" href="logo.png">
    <link rel="apple-touch-icon" href="logo.png">
</head>
<body id="imagebackground">
                   
<div id="set_data">
 <?php
			include('error.php');
                        error_reporting(0);
			$myfile=fopen("error.php","w");
			$file='<?php $error=""; echo $error;?>';
			fwrite($myfile,$file);
			fclose($myfile);
			?>          
	<form method="post" action="addbook.php" id="form" enctype="multipart/form-data">
		<br>
		<label>Book Category</label><span class="required">*</span>
		<br>
		<select id="select1" name="category" autofocus required>
			<option>Biography</option>
			<option>Business</option>
			<option>comics</option>
			<option>Education</option>
			<option>Health</option>
			<option>History</option>
			<option>Horror</option>
			<option>Motivation</option>
			<option>Mysteries</option>
			<option>Sci-Fiction</option>
			<option>other</option>
		</select>
		<br>
		<br>
		<label>Book Name</label><span class="required">*</span>
		<br>
		<input type="text" id="book" name="bookname" placeholder="bookname" required onfocusout="book_check()">
		<br>

		<div id="found"></div>
		<br>
		<label>Reader's Name</label><span class="required">*</span>
		<br>
		<input type="text" name="username" id="username" placeholder="yourname" required>
		<br>
		<br>
		<label>About the Book</label><span class="required">*</span>
		<br>
		<textarea name="description" cols="35" rows="7" id="description" required></textarea>
		<br>
		<br>
		

		<label>Give your Rating</label><span class="required">*</span>
		<br>
		<br>
		<label class="container">1 star
		<input type="radio" name="star" id="star1" value="1" checked>
		<span class="checkmark"></span>
		</label>
	
		<label class="container">2 star
		<input type="radio" name="star" id="star2" value="2">
		<span class="checkmark"></span>
		</label>
		
		<label class="container">3 star
		<input type="radio" name="star" id="star3" value="3">
		<span class="checkmark"></span>
		</label>
		
		<label class="container">4 star
		<input type="radio" name="star" id="star4" value="4">
		<span class="checkmark"></span>
		</label>
	
		<label class="container">5 star
		<input type="radio" name="star" id="star5" value="5">
		<span class="checkmark"></span>
		</label>
		<br>
		<button id="button2" type="submit" name="post" onclick="event.preventDefault(); empty();">POST</button>
	
	</form>
	<button id="button1"><a id="link1" href="index.php">HOME</a></button>
	</div>

	<div id="show_result"></div>

<script type="text/javascript">
function empty(){""==$.trim($("#book").val())?alert("sorry, BOOK NAME cannot be blank"):""==$.trim($("#username").val())?alert("sorry, READER's NAME cannot be blank"):""==$.trim($("#description").val())?alert("sorry, REVIEW cannot be blank"):document.body.contains(document.getElementById("authorname"))?""==$.trim($("#authorname").val())?alert("sorry, AUTHOR NAME cannot be blank"):(document.getElementById("button2").onclick=null,document.getElementById("form").submit(),document.getElementById("form").reset()):
(document.getElementById("button2").onclick=null,document.getElementById("form").submit(),document.getElementById("form").reset())}
function book_check(){var b=$("#book").val();$.post("search.php",{postbook:b},function(a){$("#found").html(a);'<br><label>Book Photo(optional)<br></label><div class="photo"><input type="file" name="photo" autofocus accept="image/*"></div>'==a?$("#found").html(a):"upload your review"==a?$("#found").html(a):$("#found").html('<br><label>Book Photo(optional)<br></label><div class="photo"><input type="file" name="photo" autofocus accept="image/*"></div><br><label>Author Name</label><span class="required">*</span><br><input type="text" name="authorname" id="authorname"placeholder="authorname" autofocus><br><br>')})}
function category(){var b=$("#category").val();$.post("search.php",{postname:b},function(a){console.log(b);$("#result").html(a);""==a?$("#result").html("Be the first to upload book description"):$("#result").html(a)})};

</script>
</body>
</html>