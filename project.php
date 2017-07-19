<!DOCTYPE html>
<html>
<head>
	<title><My Project</title>
	<style type="text/css">
		header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
img{
	margin-left: 270px;
	margin-right: 270px; 
    padding: 1em;
    overflow: hidden;
    border-radius: 4px;
    width: 550px;
    border: 1px solid gray;
    
}

	</style>


</head>

<body background="wallpaper_004.jpg">
<header>
   <h1>My Project</h1>
</header>

<script type="text/javascript" src="jquery-3.2.1.min.js">"http://code.jquery.com/jquery-1.11.0.min.js"> /*takes all jqery library function through this lin
a={"data":"1"};
a={"data1":"1"};
$.ajax({
	type: "GET",
	data: "a",
	data1: "b",
	url:"http://localhost/iot/project.php"//"http://skubotics.in/ttt/iot4/a.php",
	success:function(c)
	{
	console.log(c);
	}
}); */
</script> 	


<?php
header("access-control-allow-origin:*");
// refresh data every 5 seconds
echo '<meta http-equiv="refresh" content="5">';
if($_GET['a'] && $_GET['b']){
	echo"Good Morning : <img src='good-morning-coffee-wallpaper.jpg'";
}
else if ($_GET['b'])
	{echo"Good Night : <img src='Good-Night3.jpg'";}
else
echo "Put proper datar";
echo "<br>";

?>


<footer>Submitted By: Priya Jyoti (TECHLST170256)</footer>
</body>
</html>