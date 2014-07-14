<html>
	<head>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/movies.js"></script>
		<meta charset="UTF-8">
		<title>Πρώτη ημέρα, άσκηση ταινίες</title>
	</head>
	<body>
		Ταινία:<br>
		Τίτλος: <input type="text" id="title"><br>
		Είδος: 
		<select id="gendre">
			<option value = "any">any</option>
			<option value = "Drama">Drama</option>
			<option value = "Comedy">Comedy</option>
			<option value = "Horror">Horror</option>
		</select><br>
		<input type="button" value="Αναζήτηση" id="search"><br>
		<div id="results">Δεν έχει γίνει ακόμα αναζήτηση</div><br>
		<a href='code.tar.gz'>Download Code</a>
	</body>
</html>