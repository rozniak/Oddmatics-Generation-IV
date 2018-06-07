<!DOCTYPE html>

<html>
    <head>
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . "v4/includes/head-content.php");
            include($_SERVER['DOCUMENT_ROOT'] . "v4/includes/global-functions.php");

            IncludePageTitleScript('News');
        ?>

        <!-- Section specific CSS -->
        <link rel="stylesheet" href="/v4/styles/news-scheme.css" type="text/css">
        <!-- !Section specific CSS -->
    </head>
    <body>
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . "v4/includes/site-fixed-header.php");

            EchoHeader("news");
        ?>
        
        <div id="css-fade-overlay"></div>

        <div id="css-column-container"><!--
            Left selection Panel
         --><div id="css-selection-panel-column"><!--
                Begin content box
                 --><div class="css-selection-panel-box-container"><!--
                 --><div class="css-selection-panel-box-space-short"></div><!--
                 --><div class="css-selection-panel-box-top"></div><!--
                 --><div class="css-selection-panel-box-space-short"></div><!--
                 --><div class="css-selection-panel-box-space-tall"></div><!--
                 --><div class="css-selection-panel-box-box">
                        <h2>News</h2>
                        <span id="css-special-select-tag-default">Select an item to check it out...</span>
                        <ul>
                            <li><i class="fa fa-caret-square-o-right"></i> Oddmatics Generation IV Released!</li>
                            <li><i class="fa fa-caret-square-o-right"></i> RozWorld Site Update</li>
                            <li><i class="fa fa-caret-square-o-right"></i> RozWorld on Github</li>
                            <li><i class="fa fa-caret-square-o-right"></i> RozWorld Source Viewer</li>
                        </ul>
                    </div><!--
                 --><div class="css-selection-panel-box-space-tall"></div><!--
                 --><div class="css-selection-panel-box-space-bottom"></div><!--
                 --><div class="css-selection-panel-box-bottom"></div><!--
                 --><div class="css-selection-panel-box-space-bottom"></div><!--
             --></div><!--
                End content box
         --></div><!--

            Right detail panel
         --><div id="css-detail-panel-column"><!--
                Begin content box
                 --><div class="css-detail-panel-box-container"><!--
                 --><div class="css-detail-panel-box-space-short"></div><!--
                 --><div class="css-detail-panel-box-top"></div><!--
                 --><div class="css-detail-panel-box-space-short"></div><!--
                 --><div class="css-detail-panel-box-space-tall"></div><!--
                 --><div class="css-detail-panel-box-box">
                        <h2>Oddmatics Generation IV Released!</h2>
                        <p id="css-special-detail-infostrip">Dated: <span class="css-special-detail-lastinfoitem">28/08/2015</span></p>
                        
                        <img class="css-img-default css-img-right" src="/v4/images/project/oddgeniv-about.jpg">
                        <h3>About</h3>
                        <p>Here's some text about the project.</p>
                        <p>If only I had written anything.</p>
                        <span id="css-float-clear"></span>
                    </div><!--
                 --><div class="css-detail-panel-box-space-tall"></div><!--
                 --><div class="css-detail-panel-box-space-bottom"></div><!--
                 --><div class="css-detail-panel-box-bottom"></div><!--
                 --><div class="css-detail-panel-box-space-bottom"></div><!--
             --></div><!--
                End content box
         --></div>
        </div>

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