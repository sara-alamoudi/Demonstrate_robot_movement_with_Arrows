<!DOCTYPE html>
<html>
  <?php
    include ("connect.php");

    error_reporting(0);
    $uforward = $_POST['Forward'];
    $uright = $_POST['Rightward'];
    $uleft = $_POST['Leftward'];

    $sql = "INSERT into moves (tofront,toright,toleft) 
    VALUES ('$uforward','$uright','$uleft')";

    if (mysqli_query($conn, $sql)){
    echo "Data Inserted";
    }
    else {
     echo "Data Not Inserted";
  }
  ?>
  <head>
   <meta charset="utf-8">
   <title>Control Panel</title>
   <link rel="stylesheet" href="style2.css">
   <body>
  	<main>
  		<h1> Control Panel</h1><br></br>
  	</main>
      <form action="autocontrolpanel.php" method="POST">
      	<div class = "content">
    	FORWARD: <input type = "text" name="Forward" placeholder="In Meters"><br></br>
  		RIGHT: <input type = "text" name="Rightward" placeholder="In Meters"><br></br>
      LEFT: <input type = "text" name="Leftward" placeholder="In Meters"><br></br>

    <div class="buttons">
    <button class = "Btn1" name= "button1" type = "reset" >DELETE</button> 
    <button class = "Btn2" name= "button2" type = "submit">SAVE</button> 
    <a href = "connect2.php"><button class = "Btn3" name= "button3" type = "button">START</button> </a>
 </div>
</div>
    </head>
</form>
  </body>
</html>