<?php
    if(count($_POST) != 0){

        $media = $_POST['media'];
        $watch = $_POST['watch'];
        $rating = $_POST['rating'];
        $rec = $_POST['rec'];
        $comments = $_POST['comments'];
        $file = fopen('Data/opinions.txt', 'a');
        fwrite($file, $media . ":" . $watch . ":" . $rating . ":" . $rec . ":" . $comments . "\n");
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
  <script src="./jquery-3.6.0.js"></script>
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
            <p>
            <div id="map">
            <form id="feedback" name="feedback" method="POST">
              <table class="feedback_table">               
                <tr>
                  <th colspan="2">
                    <h2>Feedback Form</h2><br>
                    <p class="feedback_head">Thank you for taking the time to provide us with feedback. We appreciate your opinions and will consider them carefully.</p>
                  </th>
                </tr>
                <tr>
                  <td>
                    <b>How did you hear about us? </b>
                  </td>
                  <td class="feedback_items">
                    <select name="media" id="media">
                        <option value="null">-</option>
                        <option value="google">Google</option>
                        <option value="facebook">Facebook</option>
                        <option value="email">Email</option>
                        <option value="friend">Friend</option>
                        <option value="other">Other</option>
                  </td>
                </tr>
                <tr>
                  <td>
                    <b>How often do you watch anime?</b>
                  </td>
                  <td class="feedback_items">
                    <label>Every day <input name="watch" type="radio" value="every day"/></label>
                    <label>2-3 times a week <input name="watch" type="radio" value="2-3" /></label>
                    <label>Few times a month <input name="watch" type="radio" value="few times" /></label>
                    <label>Rarely <input name="watch" type="radio" value="rarely" /></label>
    
                  </td>
                </tr>
                <tr>
                  <td>
                    <b>How satisfied are you with the website experience?</b>
                  </td>
                  <td class="feedback_items">
                    <label>Very Satisfied <input name="rating" type="radio" value="very satisfied"/></label>
                    <label>Satisfied <input name="rating" type="radio" value="satisfied" /></label>
                    <label>Neutral <input name="rating" type="radio" value="neutral" /></label>
                    <label>Unsatisfied <input name="rating" type="radio" value="unsatisfied" /></label>
                    <label>Very Unsatisfied <input name="rating" type="radio" value="very unsatisfied" /><br></label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <b>How likely are you to recommend our website to others?</b>
                  </td>
                  <td class="feedback_items">
                    <label>Very Likely <input name="rec" type="radio" value="very likely"/></label>
                    <label>Likely <input name="rec" type="radio" value="likely" /></label>
                    <label>Neutral <input name="rec" type="radio" value="neutral" /></label>
                    <label>Unlikely <input name="rec" type="radio" value="unlikely" /></label>
                    <label>Not at all likely <input name="rec" type="radio" value="not at all likely" /><br></label>
                  </td>
                </tr>
                <tr>
                    <td>
                        <b>What can we do to improve?</b>
                    </td>
                  <td colspan="2" class="feedback_items">
                    <textarea name="comments" rows="5" cols="36">Your Message:</textarea><br>
                  </td>
                </tr>
                <tr>
                  <td>
                  <!--<input type="submit" value ="Submit" onclick="validateMail()">-->
                    <button type="submit" value="Register" onclick="return feedbackForm()">Submit Response</button>
                    <button type="reset" value="Reset">Clear</button>
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
