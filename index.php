<!DOCTYPE html>
<html>
<head>
	<title>Hustle Together</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<!--calling the javascript api(similar to framework) from google-->
	<script src="http://google.com/jsapi"></script>
	<script src="js/script.js"></script>
</head>


<body>
 <?php
// Create connection
$con=mysqli_connect("localhost","myhustle","myhustle","myhustle");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL:<br> " . mysqli_connect_error();
}
/*else {
  echo "It worked!<br>"; 
  }
  
  echo "I'm learning PHP!<br>"; //fucking the smallest syntax errors!!*/
  
  ?>
<div id="content">


<form action="insert.php" method="post">
<h1>Where are you hustlin'?</h1>
		 <input type="text" name="location" value="ie. Dallas, Austin, San Fran...">
<h1>What's your hustle?</h1> 
		 <input type="text" name="pursuit" value="ie. Styling, Modeling, Sewing...">
		 <br><br><br>
		 <input type="submit">
</form>
</div>
<div id="footer"> Made by <a href="https://twitter.com/ayeee_lexis/" target="_blank">Alexis Hunter</a> in her leopard sheeted bed. </div>

</body>
</html>
