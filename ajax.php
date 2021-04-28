<?php 

$counter = trim ($_GET["counter"]);
$change = trim ($_GET["change"]);
echo "This is the count: ". $counter;

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

$query = "SELECT * FROM blogs";
$i = 0;
$result = $mysqli->query($query) or die ($mysqli->error);
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
	//$i++;
	if ($change == 'true') {
		if ($i >= $counter && $i < $counter+3) {
			echo "<h4>$row[title]</h4><h5>Author:$row[author]</h5><p>$row[body]</p>";
			echo "$i";
		}
	} else {
		if ($i <= $counter && $i > $counter-3) {
			echo "<h4>$row[title]</h4><h5>Author:$row[author]</h5><p>$row[body]</p>";
			echo "$i";
		}
	}
	$i++;
}
/*if ($change == 'true') {
	$diff = 3;
} else { 
	$diff = -3;
}
 */
	//$val = $counter + $diff;
	$val = $counter;
	echo "<input id='counter' type='text' hidden value='$val'>";

	echo "<input type=\"button\" value=\"Previous Page\" onclick='ajaxFunction(-3)'>";
	echo "<input type=\"button\" value=\"Next Page\" onclick='ajaxFunction(3)'>";


?>
