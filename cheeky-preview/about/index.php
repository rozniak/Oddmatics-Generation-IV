<!DOCTYPE html>

<html>
    <head>
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . "v4/includes/head-content.php");
            include($_SERVER['DOCUMENT_ROOT'] . "v4/includes/global-functions.php");

            IncludePageTitleScript('About');
        ?>

        <!-- Section specific CSS -->
        <link rel="stylesheet" href="/v4/styles/about-scheme.css" type="text/css">
        <!-- !Section specific CSS -->
    </head>
    <body>
        <?php
            include($_SERVER['DOCUMENT_ROOT'] . "v4/includes/site-fixed-header.php");

            EchoHeader("about");
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
                        <h2>About</h2>
                        <span id="css-special-select-tag-headings">Select an item to check us out...</span>
                        <h3>Us:</h3>
                        <ul>
                            <li><i class="fa fa-caret-square-o-right"></i> Rory Fewell</li>
                            <li><i class="fa fa-caret-square-o-right"></i> Alex Marlow</li>
                        </ul>

                        <h3>Oddmatics:</h3>
                        <ul>
                            <li><i class="fa fa-caret-square-o-right"></i> In General</li>
                            <li><i class="fa fa-caret-square-o-right"></i> Project Plans</li>
                            <li><i class="fa fa-caret-square-o-right"></i> The Name</li>
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
                        <h2>Us - Alex Marlow</h2>
                        <p id="css-special-detail-infostrip">Responsible for: <span class="css-special-detail-lastinfoitem">Artwork Direction, Storywriting, Gameplay Design, Testing, Review</span></p>
                        <p>Test section body, no lorum ipsum is necessary because language looks vaguely natural when typing about total rubbish, and you can probably imagine some genuine writing taking place here.</p>
                        <p>Out of interest, there's nothing interesting, instead only words that mean nothing other than for purposes that are only temporary in the line of existence.</p>
                        <p>If we look at the facts, the following things have been done to improve mankind:</p>
                        <ul>
                            <li>Raichus in every party</li>
                            <li>Marquee tags</li>
                            <li>Karamel Sutra by Ben and Jezza's</li>
                            <li>Advent calendars</li>
                        </ul>
                        <p>Features are simple to implement, the meaning of life is not.</p>
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
