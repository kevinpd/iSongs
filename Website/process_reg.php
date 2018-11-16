
<html>
<head>
	<title>The Form Output</title>
</head>
<body>
	<?php
	DEFINE ('DB_USER','17076251u');
	DEFINE ('DB_PASSWORD','17076251p');
	DEFINE ('DB_HOST','80.82.113.195');
	DEFINE ('DB_NAME','17076251_music_db');
	$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$email = $_POST['email'];
	$date = date("Y-m-d");

	echo "Data Inserted!";
	mysqli_query($dbc, "INSERT INTO customers(First_name,Last_name, email, reg_date) VALUES('$firstname', '$lastname', '$email', '$date') ");
	?>
</body>