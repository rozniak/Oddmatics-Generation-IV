<?php
    function EchoHeader($pageSection)
    {
        include($_SERVER['DOCUMENT_ROOT'] . "v4/includes/site-fixed-header-firsthalf.php");

        switch ($pageSection)
        {
            case "home":
                echo "<img id=\"css-navigation-bar-logo\" src=\"/v4/images/site-ui/logo-nav-home.png\">";
                break;

            case "projects":
                echo "<img id=\"css-navigation-bar-logo\" src=\"/v4/images/site-ui/logo-nav-projects.png\">";
                break;

            case "news":
                echo "<img id=\"css-navigation-bar-logo\" src=\"/v4/images/site-ui/logo-nav-news.png\">";
                break;

            case "about":
                echo "<img id=\"css-navigation-bar-logo\" src=\"/v4/images/site-ui/logo-nav-about.png\">";
                break;

            case "archive":
                echo "<img id=\"css-navigation-bar-logo\" src=\"/v4/images/site-ui/logo-nav-archive.png\">";
                break;

            case "contact":
                echo "<img id=\"css-navigation-bar-logo\" src=\"/v4/images/site-ui/logo-nav-contact.png\">";
                break;
        }

        include($_SERVER['DOCUMENT_ROOT'] . "v4/includes/site-fixed-header-lasthalf.php");
    }
?> 

   <!--
             --><!--
             -->