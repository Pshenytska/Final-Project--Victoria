<?php
//prevents data from being sent early
ob_start();
date_default_timezone_set('America/Los_Angeles');
//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
//echo THIS_PAGE;
//die;
$li1['#about-me'] = "About";
$li1['#houses'] = "Houses";
$li1['#contact-me'] = "Contact";

switch (THIS_PAGE) {

    case 'template.php':
        $title = "Real Estate with Victoria";
        break;
    case 'contact.php':
        $title = "Contact Agent Victoria";
        break;
}
