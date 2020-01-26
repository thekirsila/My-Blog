<html>
    <head>
        <title>Michael's Midweek Madness</title>
        <link rel="stylesheet" type="text/css" href="mainStyle.css">
        <!--Google fonts links-->
        <link href='https://fonts.googleapis.com/css?family=Jura' rel='stylesheet' type='text/css'>
        <!--Typekit reference tag-->
        <script src="https://use.typekit.net/thv5ekk.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <!--Meta tag for mobile viewing-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Meta tags for search engines-->
        <meta name="description" content="Talking about the basic facts of the digital era and living the life of a student" />
        <meta name="keywords" content="programming, code, news, blog, html, css, javascript, java, modding, projects, internet security, NSA, Edward, Snowden, Edward Snowden, data gathering, google, data, security, data security" />
        <meta name="robots" content="index, follow" />
        <!--Open Graph meta tags-->
        <meta name="og:url" content="http://www.michaelsmidweekmadness.com/index.php" />
        <meta name="og:title" content="The blog of a student" />
        <meta name="og:description" content="Talking about the basic facts of the digital era and living the life of a student" />
        <meta name="og:site_name" content="Michael's Midweek Madness" />
        <meta name="fb:app_id" content="220388298334466" />
        <meta name="og:locale" content="en_US" />
        <!--Title icon-->
        <link rel="shortcut icon" type="image/x-icon" href="icon.ico" />
    </head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/jquery.shadow-animation/1/mainfile"></script>
    <script src="js/interactive.js"></script>
    <script src="js/swMain.js"></script>
    <!--Load the Google Analytics API-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-75969063-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!--Load the Facebook API-->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '220388298334466',
                xfbml      : true,
                version    : 'v2.6'
            });
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!--Load the Twitter API-->
    <script>
        !function(d,s,id){
            var js,
                fjs=d.getElementsByTagName(s)[0],
                p=/^http:/.test(d.location)?'http':'https';
            if(!d.getElementById(id)){
                js=d.createElement(s);
                js.id=id;
                js.src=p+'://platform.twitter.com/widgets.js';
                fjs.parentNode.insertBefore(js,fjs);
            }
        }
        (document, 'script', 'twitter-wjs');
    </script>
    <!--Load the Google+ API-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    
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
            <div id="mobileAds">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Mobile ad unit -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-9522713196442291"
                     data-ad-slot="1942001560"
                     data-ad-format="auto"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <?php
                $countFile = fopen("postCount.txt", "r");
                $postCount = intval(fread($countFile, filesize("postCount.txt")));
                fclose($countFile);

                for ($x = $postCount; $x > 0; $x--) {
                    //Declare paths of data and title files
                    $postDataFilePath = "posts/$x.txt";
                    $postTitleFilePath = "posts/" . $x . "title.txt";
                    
                    if (file_exists($postDataFilePath)) {
                        //Fetch post data to variable
                        $dataFile = fopen($postDataFilePath, "r");
                        $postData = fread($dataFile, 300);
                        fclose($dataFile);
                    
                        //Fetch post title to variable
                        $dataFile = fopen($postTitleFilePath, "r");
                        $titleData = fread($dataFile, filesize($postTitleFilePath));
                        fclose($dataFile);
                    
                        //Echo post link
                        echo '<a href="post.php?postNumber=' . $x . '">';
                    
                        //Echo post container
                        echo '<div id="postContainer">';
                    
                        //Echo title
                        echo '<div id="title">';
                        echo strval($titleData);
                        echo '</div>';
                    
                        //Echo data
                        echo '<div id="post">';
                        echo strval($postData);
                        echo '...';
                        echo '</div>';
                    
                        //Echo closings
                        echo '</div>';
                        echo '</a>';
                    } else {
                        //Declare paths of data and title files
                        $postDataFilePath = "posts/" . $x . "totd.txt";
                        $postTitleFilePath = "posts/" . $x . "totdtitle.txt";
                        
                        //Fetch post data to variable
                        $dataFile = fopen($postDataFilePath, "r");
                        $postData = fread($dataFile, filesize($postDataFilePath));
                        fclose($dataFile);
                    
                        //Fetch post title to variable
                        $dataFile = fopen($postTitleFilePath, "r");
                        $titleData = fread($dataFile, filesize($postTitleFilePath));
                        fclose($dataFile);
                        
                        //Echo post container
                        echo '<div id="totdContainer">';
                    
                        //Echo title
                        echo '<div id="title">';
                        echo strval($titleData);
                        echo '</div>';
                    
                        //Echo data
                        echo '<div id="post">';
                        echo strval($postData);
                        echo '</div>';
                    
                        //Echo closings
                        echo '</div>';
                    }
                }
            ?>
        </div>
                
        <div id="menu">
            <h2 id="menuItemBlog"><a href="index.php" id="link">Blog</a></h2>
            <h2 id="menuItemAbout"><a href="about.html" id="link">About</a></h2>
            <h2 id="menuItemChangelog"><a href="changelog.html" id="link">Changelog</a></h2>
            <h2 id="menuItemSocial">
                <!--Facebook Like Button-->
                <div 
                     class="fb-like" 
                     data-href="http://michaelsmidweekmadness.com/" 
                     data-width="50" 
                     data-layout="button" 
                     data-action="like" 
                     data-show-faces="false" 
                     data-share="false">
                </div>
                <!--Twitter Tweet button-->
                <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                <!--Google+ +1 icon-->
                <div class="g-plusone" data-annotation="none"></div>
            </h2>
            <form action="subscribe.php" method="post">
                Subscribe here:<br>
                Email: <input type="text" name="email">
                <input type="submit" value="Send">
            </form>
        </div>
                
        <div id="ads">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Basic ad unit -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-9522713196442291"
                 data-ad-slot="9171000762"
                 data-ad-format="auto"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
                
        <div id="footer">
            <!--Facebook Like Button-->
            <div 
                 class="fb-like" 
                 data-href="http://michaelsmidweekmadness.com/" 
                 data-width="50" 
                 data-layout="button" 
                 data-action="like" 
                 data-show-faces="false" 
                 data-share="false">
            </div>
            <!--Twitter Tweet button-->
            <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
            <!--Google+ +1 icon-->
            <div class="g-plusone" data-annotation="none"></div><br>
            <!--Email subscribe-->
            <form action="subscribe.php" method="post">
                Subscribe: <input type="text" name="email" value="Email">
                <input type="submit" value="Send">
            </form>
        </div>
    </body>
</html>