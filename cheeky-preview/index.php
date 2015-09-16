<!DOCTYPE html>

<html>
    <head>
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . "v4/includes/head-content.php");
            include($_SERVER['DOCUMENT_ROOT'] . "v4/includes/global-functions.php");
            
            IncludePageTitleScript('Home');
        ?>

        <!-- Section specific CSS -->
        <link rel="stylesheet" href="/v4/styles/home-scheme.css" type="text/css">
        <!-- !Section specific CSS -->
    </head>
    <body>
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . "v4/includes/site-fixed-header.php");

            EchoHeader("home");
        ?>
        
        <div id="css-fade-overlay"></div>

        <div id="css-column-container">
            <!-- Left panel -->
            <div id="css-content-panel-column">
                
                <!-- Begin content box -->
                <div class="css-content-panel-post-container">
                    <div class="css-content-panel-post-space-short"></div><!--
                 --><div class="css-content-panel-post-top"></div><!--
                 --><div class="css-content-panel-post-display"><!--
                     --><i class="fa fa-minus"></i><!--
                 --></div><!--
                 --><div class="css-content-panel-post-space-short"></div><!--
                 --><div class="css-content-panel-post-space-tall"></div><!--
                 --><div class="css-content-panel-post-box">
                        <h2 id="css-special-header-welcome">Welcome to Oddmatics</h2>
                        <p>Welcome to Oddmatics, home of rozza's projects and development blog. </p>
                        <p>Remember to check out /newstuff for recent posts specifically to do with development and less rambling. Enjoy! </p>
                    </div><!--
                 --><div class="css-content-panel-post-space-tall"></div><!--
                 --><div class="css-content-panel-post-space-bottom"></div><!--
                 --><div class="css-content-panel-post-bottom-noperm"></div><!--
                 --><div class="css-content-panel-post-space-bottom"></div><!--
             --></div>
                <!-- End content box -->

                <hr>

                <!-- Begin content box -->
                <div class="css-content-panel-post-container">
                    <div class="css-content-panel-post-space-short"></div><!--
                 --><div class="css-content-panel-post-top"><!--
                     --><div class="css-content-panel-post-date">Posted: 23/08/15</div><!--
                 --></div><!--
                 --><div class="css-content-panel-post-display"><!--
                     --><i class="fa fa-minus"></i><!--
                 --></div><!--
                 --><div class="css-content-panel-post-space-short"></div><!--
                 --><div class="css-content-panel-post-space-tall"></div><!--
                 --><div class="css-content-panel-post-box">
                        <h2><span class="css-title-permalink">Work in Progress</span></h2>
                        <p>This design is a <b>work in progress</b>, not the live version!</p>
                        <p>Also this background will be gone at some point, hopefully the original content will look even better [<i>hopefully</i>].</p>
                        <p><b>The page source is a mess</b>, it will be minimised in future.</p>
                    </div><!--
                 --><div class="css-content-panel-post-space-tall"></div><!--
                 --><div class="css-content-panel-post-space-bottom"></div><!--
                 --><div class="css-content-panel-post-bottom-perm"></div><!--
                 --><div class="css-content-panel-post-perm">Permalink</div><!--
                 --><div class="css-content-panel-post-space-bottom"></div><!--
             --></div>
                <!-- End content box -->

                <!-- Begin content box -->
                <div class="css-content-panel-post-container">
                    <div class="css-content-panel-post-space-short"></div><!--
                 --><div class="css-content-panel-post-top"><!--
                     --><div class="css-content-panel-post-date">Posted: 19/08/15</div><!--
                 --></div><!--
                 --><div class="css-content-panel-post-display"><!--
                     --><i class="fa fa-minus"></i><!--
                 --></div><!--
                 --><div class="css-content-panel-post-space-short"></div><!--
                 --><div class="css-content-panel-post-space-tall"></div><!--
                 --><div class="css-content-panel-post-box">
                        <h2><span class="css-title-permalink">This is a Text Post</span></h2>
                        <p>This is a demonstration blog post to test the layout of Oddmatics Generation IV.</p>
                        <p>As you can see the <i>home page</i> is very green, the reason for this is because the new version of Oddmatics will feature distinct colour palettes based on destinations of the site.</p>
                        <p>The destination colour schemes are as follows:</p>
                        <ul>
                            <li>Home: Green</li>
                            <li>Projects: Yellow</li>
                            <li>News: Blue</li>
                            <li>Archive: Pink</li>
                            <li>About: Red</li>
                            <li>Contact: White</li>
                        </ul>
                        <p>Each destination will also have a unique background and some kind of animation style (parallax, shines, glows etc.), the whole site basically will look fresh.</p>
                    </div><!--
                 --><div class="css-content-panel-post-space-tall"></div><!--
                 --><div class="css-content-panel-post-space-bottom"></div><!--
                 --><div class="css-content-panel-post-bottom-perm"></div><!--
                 --><div class="css-content-panel-post-perm">Permalink</div><!--
                 --><div class="css-content-panel-post-space-bottom"></div><!--
             --></div>
                <!-- End content box -->
            </div>
        </div>

        <?php include($_SERVER['DOCUMENT_ROOT'] . "v4/includes/site-auxiliary-panel-default.php"); ?>

        <div id="css-body-footer">
            <p>oddmatics presents generation iv</p>
            <p>4.00</p>
            <p>web-design and programming &copy; oddmatics 2015</p>
            <p>- - -</p>
            <p>websites | games | applications | design & development</p>
            <p>- - -</p>
            <p>rorlex | oddmatics</p>
        </div>

        <!-- Backdrop -->
        <div id="css-body-backdrop-image"></div>
    </body>
</html>