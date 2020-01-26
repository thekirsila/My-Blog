<html>
    <head>
        <title>Michael's Midweek Madness</title>
        <link rel="stylesheet" type="text/css" href="mainStyle.css">
        <!--Google fonts links-->
        <link href='https://fonts.googleapis.com/css?family=Jura' rel='stylesheet' type='text/css'>
        <!--Meta tag for mobile viewing-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title icon-->
        <link rel="shortcut icon" type="image/x-icon" href="icon.ico" />
    </head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/jquery.shadow-animation/1/mainfile"></script>
    <script src="js/interactive.js"></script>
    <script src="js/swMain.js"></script>
    
    <body>
        <div id="header">
            <h1 align="center">Michael's Midweek Madness<h1>
        </div>
                
        <div id="mobileMenu">
            <div id="mobileMenuItems">
                <h2 id="mobileMenuItemBlog"><a href="index.php" id="link">Blog</a></h2>
                <h2 id="mobileMenuItemAbout"><a href="about.html" id="link">About</a></h2>
                <h2 id="mobileMenuItemChangelog"><a href="changelog.html" id="link">Changelog</a></h2>
            </div>
        </div>
                
        <div id="content">
            <form action="newpost()" method="post">
                <h2>New post</h2>
                Title:<br>
                <input type="text" name="title"><br><br>
                Content:<br>
                <textarea cols="100" rows="50" name="content"></textarea><br><br>
                Description:<br>
                <textarea cols="100" rows="10" name="description"></textarea><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
                
                <?php
function newpost() {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $desc = $_POST["description"];
    
    $myFile = fopen("postCount.txt", "r");
    $postCount = fread($myFile, filesize("postCount.txt"));
    fclose($myFile);
    
    $filepath = "posts/" . $postCount . "title.txt";
    $myFile = fopen($filepath, "w");
    fwrite($filepath;, $title);
    fclose($myFile);
    
    $filepath = "posts/" . $postCount . "desc.txt";
    $myFile = fopen($filepath, "w");
    fwrite($filepath;, $desc);
    fclose($myFile);
    
    $filepath = "posts/" . $postCount . ".txt";
    for ($i)
}
                ?>
                
        <div id="menu">
            <h2 id="menuItemBlog"><a href="index.php" id="link">Blog</a></h2>
            <h2 id="menuItemAbout"><a href="about.html" id="link">About</a></h2>
            <h2 id="menuItemChangelog"><a href="changelog.html" id="link">Changelog</a></h2>
        </div>
    </body>
</html>