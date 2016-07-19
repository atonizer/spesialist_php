<?php
//$x = 10;
//$name = "John";
?>
<!---->
<!--<p>One</p>-->
<? //= $name?>
<?php
//echo "Hello", " ", "PHP\n";
//
//echo strftime('%d-%B-%Y, %A');
//
?>
<!--<p>Two</p>-->
<?php
//define("AAA", 100);
//echo AAA;
//
?>

<?php
//$name = "John";
//
//echo <<<HEREDOC
//Hello
//       $name
//HEREDOC;
//
//echo <<<'NOWDOC'
//Hello
//       $name
//NOWDOC;
?>

<?php
//$arr = []; $arr1 = array();
//$arr = [
//    "name" => "John",
//    "login" => "root",
//    "pass" => "1234"
//];
////echo count($arr);
//$arr["age"] = 25;
//$arr[] = true;
////var_dump($arr);
//echo is_array($arr);
//print_r($arr);
?>

<?php
//for ($i=0;$i<5; print $i++){
//
//}

//for($i=1; $i<50; $i+=2){
//    echo "$i\n";
//}
//echo "\n\n";
//
//$var = "HELLO";
//$len = strlen($var);
//$i = 0;
//while ($i < $len) {
//    echo $var{$i} . "\n";
//    $i++;
//}

?>

<?php
//$arr = [
//    "name"=>"John",
//    "login"=>"root",
//    "age"=>25
//];
//
//foreach ($arr as $key=>$value){
//    echo "<br/>$key: $value\n";
//}
//
//$nums = [1,2,3,4,5];
//print_r($nums);
//foreach ($nums as &$num)
//    $num *=10;
//print_r($nums);
?>

<?php
function say($name="Guest", $h=3){
    echo "<h$h>Hello, $name!</h$h>";
}

say("John", 1);
$n = "Mike";
say($n);
say();
?>


































