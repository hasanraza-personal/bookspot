<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BOOKS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>feedback form</title>
        <link rel="shortcut icon" href="logo.png">
        <link rel="icon" type="image/png" href="logo.png">
        <link rel="apple-touch-icon" href="logo.png">
</head>
<body id="imagebackground">
	<h2 style="margin-left:7%;">Feedback Form</h2>
	<form style="margin-left:5%;" method="post" action="submitfeed.php">
		<input type="radio" name="error" value="issue">
		<label>Issues</label>
		
		<input type="radio" name="error" value="suggestion">
		<label>Suggestions</label>
		<br>
		<br>
		<textarea name="description" cols="35" rows="7" placeholder="please enter your review about the website"></textarea>
		<br>
		<br>
		<button id="button2" method="post" name="submit">Submit</button>
		<button id="button1"><a id="link1" href="index.php">HOME</a></button>
	</form>
</body>
</html>