<?php
// Create connection
$con=mysqli_connect("localhost","myhustle","myhustle","myhustle");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL:<br> " . mysqli_connect_error();
}


// the "insert.php" page:
  $location = mysqli_real_escape_string($con, $_POST['location']);
  $pursuit = mysqli_real_escape_string($con, $_POST['pursuit']);
  
  $sql="INSERT INTO Users (Location, Pursuit)
  VALUES ('$location', '$pursuit')";
  
 
  if (!mysqli_query($con, $sql)) {
  	die('Error: ' . mysqli_erron($con));
  	}
  	/*echo "1 record added";
  	echo "<br>";*/
  	
//header


echo "<html>";
echo "<head>";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\"/>";
echo "</head>";

echo "</body>";
echo "<div id=\"header\">";
echo "<h1> You're not alone! Get together with somebody! </h1>"; //To do later: what if they are alone... 
echo "</div>";
echo "</body>";
echo "</html>";



/*$result = mysqli_query($con,"SELECT * FROM Users WHERE Location='$location' AND Pursuit='$pursuit'"); 

while($row = mysqli_fetch_array($result)) {
	echo $row['Location'] . " " . $row['Pursuit'];
	echo "<br>";
}*/

//selecting like data from mysql database
$query = "SELECT * FROM Users WHERE Location='$location' AND Pursuit='$pursuit'";
// displaying the results to the webpage
   $result = mysqli_query($con, $query); // stores the data returned by the mysqli_query() function in the $result variable
   while ($row = mysqli_fetch_array($result)) { 
   /*we use mysqli_fetch_array() function to return the first row from the recordset as an array
   each call to mysqli_fetch_array() returns the next row in the recordset
   the while loop loops through for as long as it fulfills $result*/
    echo $row['Location'] . " " . $row['Pursuit']; //to print the value of each row, we use the PHP $row variable ($row['Location'] and $row['Pursuit'])
   	echo "<br>";
   }

mysqli_close($con);


?>