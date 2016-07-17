<?php
$x = 10;
$name = "John";
?>

<p>One</p>
<?= $name?>
<?php
echo "Hello", " ", "PHP\n";

echo strftime('%d-%B-%Y, %A');

?>
<p>Two</p>
<?php
define("AAA", 100);
echo AAA;

?>

<?php
$name = "John";

echo <<<HEREDOC
Hello
       $name
HEREDOC;

echo <<<'NOWDOC'
Hello
       $name
NOWDOC;


?>
