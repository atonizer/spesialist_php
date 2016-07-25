<?php
error_reporting(0);
set_error_handler("myErrorHandler");
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

// Page header initializing
$title = "The website of our school";
$header = "$welcome! Welcome to our website!";
$id = strtolower(strip_tags(trim($_GET['id'])));
switch ($id) {
    case 'about':
        $title = 'About';
        $header = 'About our website';
        break;
    case 'contact':
        $title = 'Contacts';
        $header = 'Feedback';
        break;
    case 'table':
        $title = 'Multiplication table';
        $header = 'Multiplication table';
        break;
    case 'calc':
        $title = 'Calculator';
        $header = 'School Calculator';
        break;
}

?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title ?></title>
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
    <h1><?php echo $header ?></h1>
    <!-- Header -->
    <!-- Main content -->
    <?php
    switch ($id) {
        case 'about':
            include 'about.php';
            break;
        case 'contact':
            include 'contact.php';
            break;
        case 'table':
            include 'table.php';
            break;
        case 'calc':
            include 'calc.php';
            break;
        default:
            include 'inc/content.inc.php';
    }
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