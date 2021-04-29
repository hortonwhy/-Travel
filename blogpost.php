<?php
session_start();
if (!isset($_SESSION["loggedIn"])) { 
	setcookie("prevPage", "./blogpost.php", time() + 1500, "/");
	Header("Location: ./anime.php");
}

if (count($_POST) != 0) {
    $posted = true;
    $author = $_SESSION['loggedIn'];
    $title = $_POST['title'];
    $body = $_POST['body'];


    $server = "spring-2021.cs.utexas.edu";
    $user = "cs329e_bulko_cchen99";
    $pwd = "Fire_almond_jazz";
    $dbName = "cs329e_bulko_cchen99";

    $mysqli = new mysqli($server,$user,$pwd,$dbName);
    $author = $mysqli->real_escape_string($author);
	$title = $mysqli->real_escape_string($title);
    $body = $mysqli->real_escape_string($body);
    $mysqli->query("INSERT INTO blogs (title, author, body) VALUES (\"$title\", \"$author\", \"$body\")");   
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dokidoki Travel</title>
    <meta charset="UTF-8">
    <meta name="description" content="ENTER DESCRIPTION HERE">
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
        <form action="blogpost.php" method="POST">
            <table>
                <th>
                    <h3>Create Your Post</h3>
                </th>
                <tr>
                    <td>
                        Posting as: <strong><?php echo($author) ?></strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        Title
                    </td>
                    <td>
                        <input type="text" id="title" name="title">
                    </td>
                </tr>
                <tr>
                    <td>
                        Body
                    </td>
                    <td>
                        <textarea id="body" name="body" rows="4" cols="50" maxlength="200"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <button type="submit" value="Submit">Submit</button>
                    </td>
                    <td>
                        <button type="clear" value="Reset">Reset</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php 
                            if ($posted == true){
                                echo("Blog post has been posted successfully.<br>");
                                echo("See your blog post <a href='index.php'>here</a>");
                            }
                            ?>
                    </td>
                </tr>
            </table>
        </form>
</body>

</html>
