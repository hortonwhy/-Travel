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
            <p>
            <div id="map">
              <p class="body-text">
                &emsp;Anime popularity has seen unprecedented growth in the past decade, and it’s reach and influence has expanded similarly so. Because of this, it is important to allow fans to learn about the regions and culture that their favorite show, movie, or song originated from. However, coinciding with this breakthrough, anime faced public negativity. Specifically, the negativity surrounding anime exploded around the same time with the arrest of Tsutomu Miyazaki, the "Otaku Murderer". Despite this, anime's popularity continued to surge. Following this trend, we intend to mitigate the barriers of entry between societies. In doing so, this website will produce opportunities for fans, as well as the general public, to discover more about their favorite anime location.
              </p>
            <form method="POST">
              <table>               
                <tr>
                  <th>
                    Send us a message!
                  </th>
                </tr>
                <tr>
                  <td>
                    <label>Name: </label>
                  </td>
                  <td>
                    <input id="name" type="text"><br>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label>Email: </label>
                  </td>
                  <td>
                    <input id="email" type="text"><br>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <textarea name="comments" rows="5" cols="36">Your Message:</textarea><br>
                  </td>
                </tr>
                <tr>
                  <td>
                  <!--<input type="submit" value ="Submit" onclick="validateMail()">-->
                    <input type="button" onclick="validateMail()" value="Submit" />
                    <input type="reset" value="Clear"/>
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
