<?php
$size = ini_get("post_max-size"); // 8M
$letter = $size{strlen($size)-1}; // M
$size = (int)$size; // 8

switch(strtoupper($letter)){
    case "G": $size *= 1024;
    case "M": $size *= 1024;
    case "K": $size *= 1024;
}
echo $size;
?>

<!DOCTYPE html>
<html>

<head>
  <title>Contacts</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- The upper part of the page -->
    <img src="logo.gif" width="187" height="29" alt="Our logo" class="logo" />
    <span class="slogan">Please, visit our office</span>
    <!-- The upper part of the page -->
  </div>

  <div id="content">
    <!-- Header -->
    <h1>Feedback</h1>
    <!-- Header -->
    <!-- Main content-->
    <h3>Address</h3>
    <p>123456 Moscow, Small American Lane 21</p>
    <h3>Ask a question</h3>
    <form action='' method='post'>
      <label>Letter subject: </label>
      <br />
      <input name='subject' type='text' size="50" />
      <br />
      <label>Content: </label>
      <br />
      <textarea name='body' cols="50" rows="10"></textarea>
      <br />
      <br />
      <input type='submit' value='Send' />
    </form>
    <!-- Main content-->
  </div>
  <div id="nav">
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
  </div>
  <div id="footer">
    <!-- Footer -->
    &copy; Super Mega Webmaster, 2000 &ndash; 2015
    <!-- Footer -->
  </div>
</body>

</html>