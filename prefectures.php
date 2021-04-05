<!DOCTYPE html>

<html lang="en">

<head>
    <title>Dokidoki Travel</title>
    <meta charset="UTF-8">
    <meta name="description" content="ENTER DESCRIPTION HEcRE">
    <meta name="author" content="ENTER NAME HERE">
  <link rel="stylesheet" href="main.css">
  <script src="script.js" defer></script>

</head> 

<body>

<!-- <img src="assets/images/logo.png" alt="logo pic"> -->
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
            <div id="map">
              <h3 class="align-center">Prefectures Index:</h3>
		<table border=2 id="prefTable">
	    <?php

		exec('ls'.' prefectures', $out);
		$count = 3;
		foreach($out as $val) {
			if ($count < 1) {
			echo "</tr>"."\n";
			echo "<tr>";
			$count = 3;
			} else {
			echo "<td>"."<a href="."'prefectures/".$val."'>".$val."</a>"."</td>";
			$count = $count - 1;
			}

		}

	    ?>
		</table>
            </div>

        </div>

    </div>
  
    <div id="footer">
        <p>Copyright © 3/09/2021  Catherine Chen, Wyatt Horton, Rachel Kim, Jack Spicer</p>
    </div>
</body>

</html>
