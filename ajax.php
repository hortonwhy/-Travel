<?php 
$counter = trim ($_GET["counter"]);
$change = trim ($_GET["change"]);
//echo "This is the count: ". $counter;

$server = "spring-2021.cs.utexas.edu";
$usr = "cs329e_bulko_cchen99";
$dbName = "cs329e_bulko_cchen99";
$pwd = "Fire_almond_jazz";

$mysqli = new mysqli($server, $usr, $pwd, $dbName);

if ($mysqli->connect_errno) {
	die ("connect error");
} else {
}

$mysqli->select_db($dbName) or die($mysqli->error);

$query = "SELECT * FROM blogs ORDER BY id DESC";

if ($counter < 2) {
	$counter = 2;
}

if ($change == 'true') {
	$end = $counter;
	$i = $counter -3;
} else {
	$end = $counter;
	$i = $counter - 3;

}


$result = $mysqli->query($query) or die ($mysqli->error);
$j = 0;
$count = 0;
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

	if ($j > $i && $j <= $end) {
		if ($count >= 3) {
			$count = 0;
		}
		echo "<div id='blog$count'><h4>$row[title]</h4><h5>Author: $row[author]</h5><p>$row[body]</p></div>";
		$count++;
	}
	$j++;
}
	$val = $counter;
	echo "<input id='counter' type='text' hidden value='$val'>";

	echo "<input type=\"button\" value=\"Previous Page\" onclick='ajaxFunction(-3)'>";
	echo "<input type=\"button\" value=\"Next Page\" onclick='ajaxFunction(3)'>";
	echo "<p></p>";
	return;
?>
