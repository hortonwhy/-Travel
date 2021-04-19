<?php
session_start();

if ($_POST["page"] == "confirm") {
	confirmPage();
} elseif ($_POST["page"] == "confirmed") {
	lastPage();
}	
else {
	chooseAnime();
}

function chooseAnime() {
print <<<PAGE1
<html>
<head>
  <title>Dokidoki Travel</title>
  <link rel="stylesheet" href="main.css">
  <script src="script.js" defer></script>
  <script src="AnimeList.js" defer></script>
</head> 
<body>
<a href="index.html"><img id="logo" src="assets/images/logo.png" alt="logo pic" width="125px"></a>
    <div id="navBar">
        <table>
            <tr>
                <th><a href="index.html">ドキドキ Travel</a></th>
                <th><a href="anime.html">Anime</a></th>
                <th><a href="prefectures.html">Prefectures</a></th>
                <th><a href="aboutUs.html">About Us</a></th>
                <th><a href="contactUs.html">Contact Us</a></th>
            </tr>
        </table>
    </div>

    <div id="body">
        <div id="description">
            <p>
            <div id="map">
              <h3 class="align-center">Anime Index: Select what anime you have seen, and we'll compile it into a list for you!</h3>
              <form method='post' action="./anime.php">
              <table id="animeList" border=2>
	      </table>
		<input type="hidden" name="page" value="confirm" />
              </form>
              <br><br><br><br><br>
              <br><br><br><br><br>
            </div>
                <!-- Content -->
            </p>
            <p>
                <!-- Content -->
            </p>
        </div>

    </div>

    <div id="footer">
        <p>Copyright © 3/09/2021  Catherine Chen, Wyatt Horton, Rachel Kim, Jack Spicer</p>
    </div>
</body>

</html>
PAGE1;
}

function confirmPage() {
	$_SESSION['chooseAnime'] = $_POST['anime'];
print <<<PAGE2

<html lang="en">

<head>
    <title>Dokidoki Travel</title>
  <link rel="stylesheet" href="main.css">
  <script src="script.js" defer></script>
  <script src="AnimeList.js" defer></script>
</head> 

<body>
<a href="index.html"><img id="logo" src="assets/images/logo.png" alt="logo pic" width="125px"></a>
    <div id="navBar">
        <table>
            <tr>
                <!--<th><img src="assets/images/logo.png" alt="logo pic" width="75px"></th>-->
                <th><a href="index.html">ドキドキ Travel</a></th>
                <th><a href="anime.html">Anime</a></th>
                <th><a href="prefectures.html">Prefectures</a></th>
                <th><a href="aboutUs.html">About Us</a></th>
                <th><a href="contactUs.html">Contact Us</a></th>
            </tr>
        </table>
    </div>

    <div id="body">
        <div id="description">
            <p>
            <div id="map">
	      <h3 class="align-center">Here is All the Anime You Selected. Please Confirm.</h3>
<h4 class="align-center">If you missed any, you can select more from the table. Please reselect the ones listed as well.</h4>
	      <form method='post' action="./anime.php">
PAGE2;
 $count = 0;
foreach ($_POST['anime'] as $anime) {
	$animeSelected[] = $anime;
	print("<li> $anime </li>");
	print("<br>");
	$count++;
}
print <<<PAGE2CONT

              <table id="animeList" border=2>
	      </table>
		<input type="hidden" name="page" value="confirm" />
		<input type="hidden" name="page" value="confirmed" /><br>
		<input type="submit" value="Confirm" />
              </form>
              <br><br><br><br><br>
              <br><br><br><br><br>
            </div>
                <!-- Content -->
            </p>
            <p>
                <!-- Content -->
            </p>
        </div>

    </div>

    <div id="footer">
        <p>Copyright © 3/09/2021  Catherine Chen, Wyatt Horton, Rachel Kim, Jack Spicer</p>
    </div>
</body>

</html>
PAGE2CONT;
}

function lastPage() {
	$temp = $_SESSION['chooseAnime'];
print <<<PAGE2

<html lang="en">

<head>
    <title>Dokidoki Travel</title>
  <link rel="stylesheet" href="main.css">
  <script src="script.js" defer></script>
  <script src="AnimeList.js" defer></script>
</head> 

<body>
<a href="index.html"><img id="logo" src="assets/images/logo.png" alt="logo pic" width="125px"></a>
    <div id="navBar">
        <table>
            <tr>
                <!--<th><img src="assets/images/logo.png" alt="logo pic" width="75px"></th>-->
                <th><a href="index.html">ドキドキ Travel</a></th>
                <th><a href="anime.html">Anime</a></th>
                <th><a href="prefectures.html">Prefectures</a></th>
                <th><a href="aboutUs.html">About Us</a></th>
                <th><a href="contactUs.html">Contact Us</a></th>
            </tr>
        </table>
    </div>

    <div id="body">
        <div id="description">
            <p>
            <div id="map">
	      <h3 class="align-center"></h3>
PAGE2;
$count = 0;
foreach ($temp as $anime) {
	print("<li> $anime </li>");
	print("<br>");
	$count++;
}
print <<<LASTPAGE
	<p><b> Amount Watched:</b> $count </p>	
              <br><br><br><br><br>
              <br><br><br><br><br>
            </div>
                <!-- Content -->
            </p>
            <p>
                <!-- Content -->
            </p>
        </div>

    </div>

    <div id="footer">
        <p>Copyright © 3/09/2021  Catherine Chen, Wyatt Horton, Rachel Kim, Jack Spicer</p>
    </div>
</body>

</html>
LASTPAGE;
}

?>
