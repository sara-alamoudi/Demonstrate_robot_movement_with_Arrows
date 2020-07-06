<!DOCTYPE html>
<html>
<head>
<style>
body{
	background-color:#E0E0E0; 
}
 th, td{
	position: relative;
    top: 100px;
    left:300px;
	border: 2px solid #212121;
	font-family: Georgia,serif;
	background-color: #F6FAFF;
	font-size:20px;
	text-align:center;	
}
</style>
</head>
<body>


<?php
    include ("connect.php");
$sqll = "SELECT * FROM moves;";
$result = mysqli_query($conn,$sqll);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck>0){
    echo "<table><tr><th>RIGHT</th><th>LEFT</th><th>FORWARD</th></tr>";
    // output data of each row
while ($row=mysqli_fetch_assoc($result)){
        echo "<tr><td>". $row["toright"]."</td><td>" . $row["toleft"]. "</td><td>". $row["tofront"]. "</td></tr>";
	echo"<br>";
	$right = 0;
while ($right<$row['toright']){
	include "arrow101.html";
	$right++;
}
    $left = 0;
while ($left<$row['toleft']){
	include "arrow102.html";
	$left++;
}
    $forward = 0;
while ($forward<$row['tofront']){
	include "arrow103.html";
	$forward++;
}
}
echo"</table>";
}

else{
	echo"No Data to Display";
}
?>