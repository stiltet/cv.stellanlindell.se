<?php
$page  = $_GET['page'];
$lang  = $_GET['lang'];

if(empty($page))
  $page = 'cv';
if(empty($lang))
  $lang = 'sv';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Stellan Lindell - CV</title>
    <link rel="stylesheet" type="text/css" href="css/desktop.css" media="screen and (min-width: 481px)" />
    <link rel="stylesheet" type="text/css" href="css/desktop.css" media="only screen and (max-width: 480px)" /> <!-- TODO PHONE -->
    <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="css/desktop.css" media="all" />
    <![endif]-->
    <meta charset="windows-1252" />
    <meta name="robots" content="all">
    <meta name="description" content="CV - Stellan Lindell" />
    <meta name="keywords" content="CV,Stellan,Lindell,HTML,CSS,XML,JavaScript" />
    <meta name="author" content="Stellan Lindell" />
    <?php require_once ("analyticstracking.php"); ?>
  </head>
  <body>
      <div id="menu">
        <?php require_once 'content/' . $lang . '/menu.php'; ?>
      </div>
      <div id="page">
        <?php require_once 'content/' . $lang . '/' . $page . '.php'; ?>
      </div>
      <!--
      <footer>
          <?php //require_once 'content/' . $lang . '/footer.php'; ?>
      </footer>
      -->
  </body>
</html>