<?php
//=============================================================================
// WPI Sleep App
// _global_html_head.php
//
// Global Document Head Content.
//
// Includes HTML Head section and meta info, and CSS imports
//=============================================================================

echo <<<HTMLHEAD
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>$page_title</title>
    <link rel="stylesheet" href="$server_url/vendors/foundation/css/foundation.min.css" />
    <link rel="stylesheet" href="$server_url/vendors/fontawesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="$server_url/vendors/CSS-Circle-Menu/circle-menu.min.css" />
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="$server_url/resources/css/app.css" />
  </head>
  <body>
HTMLHEAD;
?>
