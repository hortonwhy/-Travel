<?php
    if(count($_POST) != 0){

        $email = $_POST['email'];
    
        $file = fopen('Data/emails.txt', 'a');
        fwrite($file, $email . ":" . "\n");
        fclose($file);
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
            <form method="POST">
                <table class="newsletter_email">               
                    <tr>
                      <th colspan="2">
                        <h2>Newsletter Sign-up</h2><br>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <b>Please enter your email:</b>
                        </td>
                          <td colspan="2" class="newsletter_email">
                            <input type="text" name="email" rows="5" cols="36"><br>
                          </td>
                    </tr>
                    <tr>
                          <td>
                            <button type="submit" value="Register">Register</button>
                            <button type="reset" value="Reset">Reset</button>
                          </td>
                    </tr>
                  </table>

            </form>
            </div>
        </div>

    </div>
    <div id="footer">
        <p>Copyright © 3/09/2021  Catherine Chen, Wyatt Horton, Rachel Kim, Jack Spicer</p>
    </div>
</body>

</html>