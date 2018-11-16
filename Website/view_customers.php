<?php $page_title = "iSongs| Homepage"; ?>
<?php include("header.php"); ?>
<?php 
DEFINE ('DB_USER', '17076251u');
DEFINE ('DB_PASSWORD', '17076251p');
DEFINE ('DB_HOST', '80.82.113.195');
DEFINE ('DB_NAME', '17076251_music_db');
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
$q = "SELECT First_name,Last_name, email, reg_date FROM customers ORDER BY last_name ASC ";
$r = @mysqli_query ($dbc, $q);
// Table header
	echo '<table>
	<tr>
	<th scope="col">Last Name</th>
	<th scope="col">First Name</th>
	<th scope="col">Email</th>
	</tr>
';
// Fetch and print all the records:
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		echo '<tr><td>' . $row['Last_name'] . '</td><td>' . $row['First_name'] .
		 '</td><td>' . $row['email'] . '</td></tr>
		';
	}
echo '</table>'; // End table
?>
<?php include("footer.php"); ?>