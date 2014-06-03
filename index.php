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
 
<div id="content">

	<div id="find">
	<form action="search.php" method="post">
	<h1>Find who you're looking for</h1>
		<h3>Where are you hustlin'?</h3>
		 <input type="text" name="location" value="ie. Dallas, Austin, San Fran...">
		<h3>What's your hustle?</h3> 
		 <input type="text" name="pursuit" value="ie. Styling, Modeling, Sewing...">
		 <br><br><br>
		 <input type="submit">
	</form>
	</div>
	
	<div id="help">
	<form action="insert.php" method="post">
	<h1> Help others find you</h1>
		<h3>What's your name?</h3>
		<input type="text" name="name" value="ie. Jimi Hendrix">
		<h3>Where are you hustlin'?</h3>
		<input type="text" name="location" value="ie. Dallas, Austin, San Fran...">
		<h3>What's your hustle?</h3>
		<input type="text" name="pursuit" value="ie. Styling, Modeling, Sewing...">
		<h3>How can you be reached?</h3>
		<input type="text" name="ContactInfo" value="ie. Email addy, Phone #, Twitter acct url">
		
		<!--how to insert a file through the html form
		
			<form action="upload_file.php" method="post"
			enctype="multipart/form-data"> //the enctype attribute specifies which content-type to use
			<h3>What do you look like?</h3>
			<label for="file">Choose a kewl pic:</label>
			<input type="file" name="file" id="file"><br> //the type attribute specifies that the input should be processed as a file, instead of say a "submit" button
			<input type="submit" name="submit" value="Upload your pic">
			</form>-->
	    <br><br><br>
		<input type="submit">	
	</form>
	</div>

<!--</div>-->
		

<!--<div id="footer"> Made by <a href="https://twitter.com/ayeee_lexis/" target="_blank">Alexis Hunter</a> in her leopard sheeted bed. </div>-->

</body>
</html>
