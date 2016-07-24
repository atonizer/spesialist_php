<?php
require_once "inc/lib.inc.php";
require_once "inc/data.inc.php";
// To set locals and choose settings
setlocale(LC_ALL, "english");
//setlocale(LC_ALL, "russian");
$day = strftime('%d');
$month = strftime('%B');
//$month = iconv('windows-1251', 'utf-8', $month);
$year = strftime('%Y');
$wday = strftime('%A');

/* Greetings */
$hour = (int)strftime('%H');
$welcome = '';
if ($hour > 0 && $hour < 6):
    $welcome = "Good night";
elseif ($hour >= 5 && $hour < 12):
    $welcome = "Good morning";
elseif ($hour >= 12 && $hour < 18):
    $welcome = "Good day";
elseif ($hour >= 18 && $hour < 23):
    $welcome = "Good evening";
else:
    $welcome = "Good night";
endif;

?>
<!DOCTYPE html>
<html>

<head>
    <title>The website of our school</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css"/>
</head>

<body>

<div id="header">
    <!-- The upper part of the page -->
    <?php
    require_once "inc/top.inc.php";
    ?>
    <!-- The upper part of the page -->
</div>

<div id="content">
    <!-- Header -->
    <h1><?= $welcome ?>! Welcome to our website!</h1>
    <!-- Header -->
    <!-- Main content -->
    <?php
    require_once "inc/content.inc.php";
    ?>
    <!-- Main content -->
</div>
<div id="nav">
    <!-- Navigation -->
    <?php
    include_once "inc/nav.inc.php";
    ?>
    <!-- Navigation -->
</div>
<div id="footer">
    <!-- Footer -->
    <?php
    require_once "inc/footer.inc.php";
    ?>
    <!-- Footer -->
</div>
</body>

</html>