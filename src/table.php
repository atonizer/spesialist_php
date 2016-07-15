<!DOCTYPE html>
<html>

<head>
  <title>Multiplication table</title>
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
    <h1>Multiplication table</h1>
    <!-- Header -->
    <!-- Main content-->
    <form action=''>
      <label>Number of of columns: </label>
      <br />
      <input name='cols' type='text' value="" />
      <br />
      <label>Number of lines: </label>
      <br />
      <input name='rows' type='text' value="" />
      <br />
      <label>Color: </label>
      <br />
      <input name='color' type='text' value="" />
      <br />
      <br />
      <input type='submit' value='Create' />
    </form>
    <!-- Table -->
    <table border='1' width="200">
      <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
      </tr>
      <tr>
        <td>2</td>
        <td>4</td>
        <td>6</td>
        <td>8</td>
        <td>10</td>
      </tr>
      <tr>
        <td>3</td>
        <td>6</td>
        <td>9</td>
        <td>12</td>
        <td>15</td>
      </tr>
      <tr>
        <td>4</td>
        <td>8</td>
        <td>12</td>
        <td>16</td>
        <td>10</td>
      </tr>
      <tr>
        <td>5</td>
        <td>10</td>
        <td>15</td>
        <td>20</td>
        <td>25</td>
      </tr>
    </table>
    <!-- Table -->
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