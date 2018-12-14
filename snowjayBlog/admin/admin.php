<!DOCTYPE html>
<html>
<head>

<?php

$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername,$username);

//
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	echo "Connected successfully";

	
?>

	<title>
		

	</title>
</head>


<body>
	<nav>
		<ol>
			<li> <a href="/snowjay.php"> Home </a> </li>
			<li> <a href="/admin.php"> Admin </a> </li>
		</ol>
	</nav>

<h2> Make a post </h2>
	<textarea rows="4" cols="100"></textarea>

<br>
<button> Create a post </button>

</body>
</html>