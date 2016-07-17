<?php
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
    <img src="logo.gif" width="187" height="29" alt="Our logo" class="logo"/>
    <span class="slogan">Please, visit our office</span>
    <!-- The upper part of the page -->
</div>

<div id="content">
    <!-- Header -->
    <h1><?= $welcome ?>! Welcome to our website!</h1>
    <!-- Header -->
    <!-- Main content -->
    <h3>Why we are attending school?</h3>
    <blockquote>
        <?php
        echo "Today is $day of $month $year, $wday";
        ?>
    </blockquote>
    <p>
        We have every moment that something is happening and full of life. Take lessons and noise changes, someone
        responsible at the board, someone desperately crams to control the material covered, someone put the "five" for
        the essay, someone blamed for unread book on the school playground children playing soccer, and girls -
        volleyball, some are preparing for a competition, others are involved in rehearsals holidays ... </p>
    <h3>What is USE?</h3>
    <p>
        USE stands for "Unified State Exam." Why is the "single"? CSE is both entrance exam and the final evaluation of
        each graduate school. In addition, the entire territory of Russia used the same type of tasks and single
        evaluation system. </p>
    <p>
        Exam results are evaluated on a 100-point and five-point system and recorded in the certificate of the results
        of the unified state exam. The validity of this document expires on 31 December of the year following the year
        of issue, so students have the opportunity to enroll in college entrance exam with a certificate for two
        years. </p>
    <!-- Main content -->
</div>
<div id="nav">
    <!-- Navigation -->
    <h2>Navigation bar</h2>
    <!-- Menu -->
    <ul>
        <li><a href='index.php'>Home</a>
        </li>
        <li><a href='about.php'>About</a>
        </li>
        <li><a href='contact.php'>Contacts</a>
        </li>
        <li><a href='table.php'>Multiplication table</a>
        </li>
        <li><a href='calc.php'>Calculator</a>
        </li>
    </ul>
    <!-- Menu -->
    <!-- Navigation -->
</div>
<div id="footer">
    <!-- Footer -->
    &copy; Super Mega Webmaster, 2000 &ndash; <?= $year ?>
    <!-- Footer -->
</div>
</body>

</html>