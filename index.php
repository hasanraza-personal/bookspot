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
</head>
<?php

include("connection.php");
error_reporting(0);
$sql1="create table if not exists books
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

$query1=$conn->prepare($sql1);
$query1->execute();
$query1->close();


$sql2="create table if not exists review
(
 srno int not null auto_increment,
 username text,
 bookname text,
 category text,
 rating text,
 review text,
 primary key(srno)
)";

$query2=$conn->prepare($sql2);
$query2->execute();
$query2->close();
?>
<body onload="function1();" id="imagebackground" >
<img id="logo" src="logo.jpeg" width="26%" height="85px" style="float:left;">
	<div id="name">
		<span id="websitename">BOOK SPOT</span>
		<br>
		<span id="quote">Your Search Ends Here</span>
	</div>
	<div>
	<div id="navigation_bar">
		<a class="a" href="index.php"><i class="fa fa-home" style="color: white; font-size: 25px;"></i></a>
		<a class="a" href="filldetails.php">Upload</a>
		<a class="a" href="feedback.php">Feedback</a>
                <a class="a" href="about.php"><i class="material-icons" style="font-size:25px">&#xe88e;</i></a>

		<form autocomplete="off" id="form">
			<button id="searchbutton" class="material-icons" style="color: white;" onclick="more1();">search</button>
			<button id="close" class="hide" onclick="close1();">&times;</button>
			<input  class="hide" class="search_bar" id="search" type="search" placeholder="search for the book">
		</form>
	</div>
</div>
	<div id="output" class="hide"></div>
	<div id="button_option1">
		<button id="category1" class="button_option" value="all" onclick="post1();">All</button>
		<button id="category2" class="button_option" value="Horror" onclick="post2();">Horror</button>
		<button id="category3" class="button_option" value="History" onclick="post3();">History</button>
		<button id="category4" class="button_option" value="Comics" onclick="post4();">Comics</button>
		<button id="category5" class="button_option" value="Education" onclick="post5();">Education</button>
		<button id="category6" class="button_option" value="Business" onclick="post6();">Business</button>
		<button id="category7" class="button_option" value="Biography" onclick="post7();">Biography</button>
		<button id="category8" class="button_option" value="Motivation" onclick="post8();">Motivation</button>
		<button id="category9" class="button_option" value="Mysteries" onclick="post9();">Mysteries</button>
		<button id="category10" class="button_option" value="Sci-Fiction" onclick="post10();">Sci-Fiction</button>
		<button id="category11" class="button_option" value="Other" onclick="post11();">Others</button>
	</div>	
		
	<div id="result"></div>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i style="font-size:24px; color:white" class="fa">&#xf077;</i></button>
<script type="text/javascript">
var $jscomp=$jscomp||{};$jscomp.scope={};$jscomp.createTemplateTagFirstArg=function(b){return b.raw=b};$jscomp.createTemplateTagFirstArgWithRaw=function(b,a){b.raw=a;return b};var mybutton=document.getElementById("myBtn");window.onscroll=function(){scrollFunction()};function scrollFunction(){mybutton.style.display=20<document.body.scrollTop||20<document.documentElement.scrollTop?"block":"none"}function topFunction(){document.body.scrollTop=0;document.documentElement.scrollTop=0}
function close1(){$("#search").addClass("hide");$("#close").addClass("hide");document.getElementById("search").value="";document.getElementById("output").innerHTML=""}function more1(){$("#search").removeClass("hide");$("#close").removeClass("hide");$("#searchbutton").addClass("hide")}
function category(){document.getElementById("result").innerHTML="<div class='loader'></div>";var b=$("#category").val();$.post("search.php",{postname:b},function(a){console.log(b);$("#result").html(a);""==a?$("#result").html('<div class="notfound">Be the first to upload book review</div>'):$("#result").html(a)})}
function post1(){document.getElementById("result").innerHTML="<div class='loader'></div>";var b=$("#category1").val();$.post("search.php",{postname:b},function(a){console.log(b);$("#result").html(a);""==a?$("#result").html('<div class="notfound">Be the first to upload book review</div>'):$("#result").html(a)});document.getElementById("category1").style.backgroundColor="#ff0000";document.getElementById("category2").style.backgroundColor="black";document.getElementById("category3").style.backgroundColor=
"black";document.getElementById("category4").style.backgroundColor="black";document.getElementById("category5").style.backgroundColor="black";document.getElementById("category6").style.backgroundColor="black";document.getElementById("category7").style.backgroundColor="black";document.getElementById("category8").style.backgroundColor="black";document.getElementById("category9").style.backgroundColor="black";document.getElementById("category10").style.backgroundColor="black";document.getElementById("category11").style.backgroundColor=
"black"}
function post2(){document.getElementById("result").innerHTML="<div class='loader'></div>";var b=$("#category2").val();$.post("search.php",{postname:b},function(a){console.log(b);$("#result").html(a);""==a?$("#result").html('<div class="notfound">Be the first to upload book review</div>'):$("#result").html(a)});document.getElementById("category1").style.backgroundColor="black";document.getElementById("category2").style.backgroundColor="#ff0000";document.getElementById("category3").style.backgroundColor="black";
document.getElementById("category4").style.backgroundColor="black";document.getElementById("category5").style.backgroundColor="black";document.getElementById("category6").style.backgroundColor="black";document.getElementById("category7").style.backgroundColor="black";document.getElementById("category8").style.backgroundColor="black";document.getElementById("category9").style.backgroundColor="black";document.getElementById("category10").style.backgroundColor="black";document.getElementById("category11").style.backgroundColor=
"black"}
function post3(){document.getElementById("result").innerHTML="<div class='loader'></div>";var b=$("#category3").val();$.post("search.php",{postname:b},function(a){console.log(b);$("#result").html(a);""==a?$("#result").html('<div class="notfound">Be the first to upload book review</div>'):$("#result").html(a)});document.getElementById("category1").style.backgroundColor="black";document.getElementById("category2").style.backgroundColor="black";document.getElementById("category3").style.backgroundColor="#ff0000";
document.getElementById("category4").style.backgroundColor="black";document.getElementById("category5").style.backgroundColor="black";document.getElementById("category6").style.backgroundColor="black";document.getElementById("category7").style.backgroundColor="black";document.getElementById("category8").style.backgroundColor="black";document.getElementById("category9").style.backgroundColor="black";document.getElementById("category10").style.backgroundColor="black";document.getElementById("category11").style.backgroundColor=
"black"}
function post4(){document.getElementById("result").innerHTML="<div class='loader'></div>";var b=$("#category4").val();$.post("search.php",{postname:b},function(a){console.log(b);$("#result").html(a);""==a?$("#result").html('<div class="notfound">Be the first to upload book review</div>'):$("#result").html(a)});document.getElementById("category1").style.backgroundColor="black";document.getElementById("category2").style.backgroundColor="black";document.getElementById("category3").style.backgroundColor="black";
document.getElementById("category4").style.backgroundColor="#ff0000";document.getElementById("category5").style.backgroundColor="black";document.getElementById("category6").style.backgroundColor="black";document.getElementById("category7").style.backgroundColor="black";document.getElementById("category8").style.backgroundColor="black";document.getElementById("category9").style.backgroundColor="black";document.getElementById("category10").style.backgroundColor="black";document.getElementById("category11").style.backgroundColor=
"black"}
function post5(){document.getElementById("result").innerHTML="<div class='loader'></div>";var b=$("#category5").val();$.post("search.php",{postname:b},function(a){console.log(b);$("#result").html(a);""==a?$("#result").html('<div class="notfound">Be the first to upload book review</div>'):$("#result").html(a)});document.getElementById("category1").style.backgroundColor="black";document.getElementById("category2").style.backgroundColor="black";document.getElementById("category3").style.backgroundColor="black";
document.getElementById("category4").style.backgroundColor="black";document.getElementById("category5").style.backgroundColor="#ff0000";document.getElementById("category6").style.backgroundColor="black";document.getElementById("category7").style.backgroundColor="black";document.getElementById("category8").style.backgroundColor="black";document.getElementById("category9").style.backgroundColor="black";document.getElementById("category10").style.backgroundColor="black";document.getElementById("category11").style.backgroundColor=
"black"}
function post6(){document.getElementById("result").innerHTML="<div class='loader'></div>";var b=$("#category6").val();$.post("search.php",{postname:b},function(a){console.log(b);$("#result").html(a);""==a?$("#result").html('<div class="notfound">Be the first to upload book review</div>'):$("#result").html(a)});document.getElementById("category1").style.backgroundColor="black";document.getElementById("category2").style.backgroundColor="black";document.getElementById("category3").style.backgroundColor="black";
document.getElementById("category4").style.backgroundColor="black";document.getElementById("category5").style.backgroundColor="black";document.getElementById("category6").style.backgroundColor="#ff0000";document.getElementById("category7").style.backgroundColor="black";document.getElementById("category8").style.backgroundColor="black";document.getElementById("category9").style.backgroundColor="black";document.getElementById("category10").style.backgroundColor="black";document.getElementById("category11").style.backgroundColor=
"black"}
function post7(){document.getElementById("result").innerHTML="<div class='loader'></div>";var b=$("#category7").val();$.post("search.php",{postname:b},function(a){console.log(b);$("#result").html(a);""==a?$("#result").html('<div class="notfound">Be the first to upload book review</div>'):$("#result").html(a)});document.getElementById("category1").style.backgroundColor="black";document.getElementById("category2").style.backgroundColor="black";document.getElementById("category3").style.backgroundColor="black";
document.getElementById("category4").style.backgroundColor="black";document.getElementById("category5").style.backgroundColor="black";document.getElementById("category6").style.backgroundColor="black";document.getElementById("category7").style.backgroundColor="#ff0000";document.getElementById("category8").style.backgroundColor="black";document.getElementById("category9").style.backgroundColor="black";document.getElementById("category10").style.backgroundColor="black";document.getElementById("category11").style.backgroundColor=
"black"}
function post8(){document.getElementById("result").innerHTML="<div class='loader'></div>";var b=$("#category8").val();$.post("search.php",{postname:b},function(a){console.log(b);$("#result").html(a);""==a?$("#result").html('<div class="notfound">Be the first to upload book review</div>'):$("#result").html(a)});document.getElementById("category1").style.backgroundColor="black";document.getElementById("category2").style.backgroundColor="black";document.getElementById("category3").style.backgroundColor="black";
document.getElementById("category4").style.backgroundColor="black";document.getElementById("category5").style.backgroundColor="black";document.getElementById("category6").style.backgroundColor="black";document.getElementById("category7").style.backgroundColor="black";document.getElementById("category8").style.backgroundColor="#ff0000";document.getElementById("category9").style.backgroundColor="black";document.getElementById("category10").style.backgroundColor="black";document.getElementById("category11").style.backgroundColor=
"black"}
function post9(){document.getElementById("result").innerHTML="<div class='loader'></div>";var b=$("#category9").val();$.post("search.php",{postname:b},function(a){console.log(b);$("#result").html(a);""==a?$("#result").html('<div class="notfound">Be the first to upload book review</div>'):$("#result").html(a)});document.getElementById("category1").style.backgroundColor="black";document.getElementById("category2").style.backgroundColor="black";document.getElementById("category3").style.backgroundColor="black";
document.getElementById("category4").style.backgroundColor="black";document.getElementById("category5").style.backgroundColor="black";document.getElementById("category6").style.backgroundColor="black";document.getElementById("category7").style.backgroundColor="black";document.getElementById("category8").style.backgroundColor="black";document.getElementById("category9").style.backgroundColor="#ff0000";document.getElementById("category10").style.backgroundColor="black";document.getElementById("category11").style.backgroundColor=
"black"}
function post10(){document.getElementById("result").innerHTML="<div class='loader'></div>";var b=$("#category10").val();$.post("search.php",{postname:b},function(a){console.log(b);$("#result").html(a);""==a?$("#result").html('<div class="notfound">Be the first to upload book review</div>'):$("#result").html(a)});document.getElementById("category1").style.backgroundColor="black";document.getElementById("category2").style.backgroundColor="black";document.getElementById("category3").style.backgroundColor="black";
document.getElementById("category4").style.backgroundColor="black";document.getElementById("category5").style.backgroundColor="black";document.getElementById("category6").style.backgroundColor="black";document.getElementById("category7").style.backgroundColor="black";document.getElementById("category8").style.backgroundColor="black";document.getElementById("category9").style.backgroundColor="black";document.getElementById("category10").style.backgroundColor="#ff0000";document.getElementById("category11").style.backgroundColor=
"black"}
function post11(){document.getElementById("result").innerHTML="<div class='loader'></div>";var b=$("#category11").val();$.post("search.php",{postname:b},function(a){console.log(b);$("#result").html(a);""==a?$("#result").html('<div class="notfound">Be the first to upload book review</div>'):$("#result").html(a)});document.getElementById("category1").style.backgroundColor="black";document.getElementById("category2").style.backgroundColor="black";document.getElementById("category3").style.backgroundColor="black";
document.getElementById("category4").style.backgroundColor="black";document.getElementById("category5").style.backgroundColor="black";document.getElementById("category6").style.backgroundColor="black";document.getElementById("category7").style.backgroundColor="black";document.getElementById("category8").style.backgroundColor="black";document.getElementById("category9").style.backgroundColor="black";document.getElementById("category10").style.backgroundColor="black";document.getElementById("category11").style.backgroundColor=
"#ff0000"}close_btn=document.getElementById("close_btn");form=document.getElementById("form");search_input=document.getElementById("search");output=document.getElementById("output");form.addEventListener("submit",submitnot);function submitnot(b){b.preventDefault()}
search_input.addEventListener("keydown",function(b){output.style.display="block";output.innerHTML='<div class="progress">\n      <div class="indeterminate"></div>\n  </div> ';q=b.target.value;var a=new XMLHttpRequest;a.open("GET","booksearch.php?q="+q,!0);a.onload=function(){200==a.status&&(output.innerHTML="",output.innerHTML=a.responseText)};2<=q.length&&a.send();0==q.length&&(output.innerHTML="",output.style.display="none")});
function function1(){document.getElementById("result").innerHTML="<div class='loader'></div>";document.getElementById("category1").style.backgroundColor="#ff0000";$("#category").val();$.post("search.php",{postname:"all"},function(b){$("#result").html(b);$("#result").html(b)})};
</script>

</body>
</html>
