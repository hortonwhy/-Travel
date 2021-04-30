<?php
session_start();
$loggedIn = true;
if (!isset($_SESSION["loggedIn"])) {
	$loggedIn = false;
	$registering = false;
	if ($_POST["usernameReg"]) {
		if (registerUser($_POST["usernameReg"], $_POST["password"])) {
			$_SESSION["loggedIn"] = $_POST["usernameReg"];
			Header("Location: ./anime.php");
		} else {
			$registering = true;
			printRegister();
			
		}
	}
	if ($_POST["register"]) { 
		$registering = true;
		printRegister();
	}
	if ($_POST["username"]) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		if (verifyLogin($username, $password)) {
			$_SESSION["loggedIn"] = $username;
			if ($_COOKIE["prevPage"]) {
				$loc = $_COOKIE["prevPage"];
				setcookie("prevPage", "", time() - 100, "/");
				Header("Location: ".$loc);
				return;
			}
			Header("Location: ./anime.php");
		}
	}
	if (!$registering) {
	print <<<LOGIN
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
		<th><a href="blogpost.php">Blog</a></th>
                <th><a href="aboutUs.html">About Us</a></th>
                <th><a href="contactUs.html">Contact Us</a></th>
            </tr>
        </table>
    </div>





    <div id="body">
        <div id="description">
            <p>
            <div id="map">
    <table border = "0" style = "width:50%" class = "previewCenter">
        <tr>
          <td>
            <h3>Please Login or Register to Create an Account</h3>
          </td>
        </tr>
        <tr>
          <td>
            <form method='post' action="./anime.php">
            <p>
            
		<label>Username: <input type="text" name="username"></label> <br>
          </td>
         </tr>
            
        <tr>
          <td> 
		<label>Password: <input type="password" name="password"></label> <br><br>
          </td>
        </tr>
            
        <tr>
          <td>
		<input type="submit" value="Login" class = "previewCenter">
		<input type="reset" value="Reset" class = "previewCenter">

           
            </p>
          </td>
        </tr>

            </form>

        <tr>
          <td>
		<form method='post' action="./anime.php">
            <p>
           
		<br><input type="submit" name = "register" value = "Register" class = "previewCenter">
          
            </p>
		</form>
          </td>
        </tr>
    </table>
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
LOGIN;
	}
} 

function verifyLogin ($u, $p) {
	echo $u . $p;
	$server = "spring-2021.cs.utexas.edu";
	$usr = "cs329e_bulko_cchen99";
	$dbName = "cs329e_bulko_cchen99";
	$pwd = "Fire_almond_jazz";
	$mysqli = new mysqli($server, $usr, $pwd, $dbName);
	if ($mysqli->connect_errno) {
		die ("Connect Error: ". $mysqli->connect_errno . ": ". $mysqli->connect_error);
	} else {

	}
	$query = "SELECT * FROM accounts WHERE username='$u' AND password='$p'";
	$mysqli->select_db($dbName) or die($mysqli->error);

	// prevent mysql injection
	$u = $mysqli->real_escape_string($u);
	$p = $mysqli->real_escape_string($p);

	$result = $mysqli->query($query) or die ($mysqli->error);

	$unique = true;
	$row = $result->fetch_row();
	if ((count($row)) > 0) { 
		echo "User Login Successful";
		return true;
	}
	echo "Login Failed";
	return false;
	
}

function registerUser($u, $p) {
	echo $u . $p;
	$server = "spring-2021.cs.utexas.edu";
	$usr = "cs329e_bulko_cchen99";
	$dbName = "cs329e_bulko_cchen99";
	$pwd = "Fire_almond_jazz";
	$mysqli = new mysqli($server, $usr, $pwd, $dbName);
	if ($mysqli->connect_errno) {
		die ("Connect Error: ". $mysqli->connect_errno . ": ". $mysqli->connect_error);
	} else {

	}
	$query = "SELECT * FROM accounts WHERE username='$u'";
	$mysqli->select_db($dbName) or die($mysqli->error);

	// prevent mysql injection
	$u = $mysqli->real_escape_string($u);
	$p = $mysqli->real_escape_string($p);

	$result = $mysqli->query($query) or die ($mysqli->error);

	$unique = true;
	$row = $result->fetch_row();
	if ((count($row)) < 1) { 
		$insertQuery = "INSERT into accounts VALUES ('$u', '$p')";
		$result = $mysqli->query($insertQuery) or die ($mysqli->error);
		echo "User Registered";
		return true;
	}
	return false;
	

}

function printRegister() {
		print <<<REGISTER
<html>
<head>
  <title>Dokidoki Travel</title>
  <link rel="stylesheet" href="main.css">
  <script src="script.js" defer></script>
  <script src="AnimeList.js" defer></script>
  <script src="verification.js" defer></script>
</head> 
<body>
<a href="index.html"><img id="logo" src="assets/images/logo.png" alt="logo pic" width="125px"></a>
    <div id="navBar">
        <table>
            <tr>
                <th><a href="index.html">ドキドキ Travel</a></th>
                <th><a href="anime.html">Anime</a></th>
                <th><a href="prefectures.html">Prefectures</a></th>
		<th><a href="blogpost.php">Blog</a></th>
                <th><a href="aboutUs.html">About Us</a></th>
                <th><a href="contactUs.html">Contact Us</a></th>
            </tr>
        </table>
    </div>

    <div id="body">
        <div id="description">
            <p>
            <div id="map">
		<h4> Register </h4>
              <form method='post' action="./anime.php">
		<label>Username: <input type="text" name="usernameReg"></label> <br>
		<label>Password: <input type="password" name="password"></label> <br>

		<input type="submit" value="Register">
		<input type="reset" value="Reset">
              </form>
		<form method='post' action="./anime.php">
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
REGISTER;
}

if ($_POST["page"] == "confirm" && $loggedIn ) {
	confirmPage();
} elseif ($_POST["page"] == "confirmed" && $loggedIn) {
	lastPage();
}	
else {
	if ($loggedIn) {
	chooseAnime();
	}
}

function chooseAnime() {
print <<<PAGE1
<html>
<head>
  <title>Dokidoki Travel</title>
  <link rel="stylesheet" href="main.css">
  <script src="script.js"></script>
  <script src="AnimeList.js" defer></script>
  <script src="verification.js" defer></script>
</head> 
<body>
<a href="index.html"><img id="logo" src="assets/images/logo.png" alt="logo pic" width="125px"></a>
    <div id="navBar">
        <table>
            <tr>
                <th><a href="index.html">ドキドキ Travel</a></th>
                <th><a href="anime.html">Anime</a></th>
                <th><a href="prefectures.html">Prefectures</a></th>
		<th><a href="blogpost.php">Blog</a></th>
                <th><a href="aboutUs.html">About Us</a></th>
                <th><a href="contactUs.html">Contact Us</a></th>
		<th><a href="logout.php">Logout</a></th>
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
		<th><a href="blogpost.php">Blog</a></th>
                <th><a href="aboutUs.html">About Us</a></th>
                <th><a href="contactUs.html">Contact Us</a></th>
		<th><a href="logout.php">Logout</a></th>
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
		<th><a href="blogpost.php">Blog</a></th>
                <th><a href="aboutUs.html">About Us</a></th>
                <th><a href="contactUs.html">Contact Us</a></th>
		<th><a href="logout.php">Logout</a></th>
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
