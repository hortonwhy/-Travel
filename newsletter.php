<?php
    if(count($_POST) != 0){

        $email = $_POST['email'];

        $server = "spring-2021.cs.utexas.edu";
        $user = "cs329e_bulko_cchen99";
        $pwd = "Fire_almond_jazz";
        $dbName = "cs329e_bulko_cchen99";

        $mysqli = new mysqli($server,$user,$pwd,$dbName);

        $email = $mysqli->real_escape_string($email);

        $mysqli->query("INSERT INTO newsletterEmails VALUES (\"$email\")");  

        echo '<script>alert("You have successfully signed up for the newsletter!")</script>';
    

    }

?>


<!DOCTYPE html>

<html lang="en">

<head>
    <title>Dokidoki Travel</title>
    <meta charset="UTF-8">
    <meta name="description" content="ENTER DESCRIPTION HEcRE">
    <meta name="author" content="ENTER NAME HERE">
  <link rel="stylesheet" href="main.css">
  <script src="script.js" defer></script>
  <script src="verification.js" defer></script>
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
		<th><a href="blogpost.php">Blog</a></th>
                <th><a href="aboutUs.html">About Us</a></th>
                <th><a href="contactUs.html">Contact Us</a></th>
            </tr>
        </table>
    </div>

    <div id="body" class="default">
        <div id="description">
        
            <div id="map">
            <form method="POST" name="newsletter">
                <table border = "0" style = "width:50%" class= "previewCenter">               
                    <tr>
                      <th colspan="2">
                        <h2>Newsletter Sign-up</h2><br>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <b>Please enter your email:</b>
                        </td>
                          <td>
                            <input type="email" name="email" id="email"><br>
                          </td>
                    </tr>
                </table>

                <table border="0" style = "width:50%" class= "previewCenter">
                    <tr>
                          <td class="previewCenter">
                            <button type="submit" value="Register" onclick="return isEmail()">Signup</button>
                            <button type="reset" value="Reset">Reset</button>
                        </td>
                          
                    </tr>

                </table>
                  

            </form>

            </div>
        </div>

    </div>
    <div id="footer">
        <p>Copyright © 2021 Catherine Chen, Wyatt Horton, Rachel Kim, Jack Spicer</p>
    </div>
</body>

</html>
