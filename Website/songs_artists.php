<?php $page_title = "iSongs| Songs & Artists"; ?>
<?php include("header.php"); ?>
<?php 
DEFINE ('DB_USER', '17076251u');
DEFINE ('DB_PASSWORD', '17076251p');
DEFINE ('DB_HOST', '80.82.113.195');
DEFINE ('DB_NAME', '17076251_music_db');
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
$q = "SELECT songs.Song_name, songs.Release_date, songs.Genre, songs.Price, artist.Artist_name, artist.Nationality, artist.Label FROM songs 
INNER JOIN artist ON  artist.Artist_ID=songs.Artist_ID
ORDER BY Song_name ASC";
$r = @mysqli_query ($dbc, $q);
// Table header
	echo '<table>
	<tr>
    <th scope="col">Song</th>
    <th scope="col">Artist</th>
    <th scope="col">Release Date</th>
    <th scope="col">Genre</th>
    <th scope="col">Price</th>
	<th scope="col">Nationality</th>
	<th scope="col">Label</th>
	</tr>
';
// Fetch and print all the records:
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        echo '<tr><td>' . $row['Song_name'] . 
        '</td><td>' . $row['Artist_name'] . 
        '</td><td>' . $row['Release_date'] . 
        '</td><td>' . $row['Genre'] . 
        '</td><td>' . $row['Price'] . 
        '</td><td>' . $row['Nationality'] . 
        '</td><td>' . $row['Label'] . 
        '</td></tr>';
	}
echo '</table>'; // End table
?>
<?php include("footer.php"); ?>