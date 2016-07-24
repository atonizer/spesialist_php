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
//function say($name="Guest", $h=3){
//    echo "<h$h>Hello, $name!</h$h>";
//}
//
//say("John", 1);
//$n = "Mike";
//say($n);
//say();
?>

<?php
//function my_count($var, $mode=0) {
//    if(is_null($var)) return 0;
//    if(!is_array($var)) return 1;
//    $cnt = 0;
//    foreach ($var as $v)
//        if(is_array($v) and $mode)
//            $cnt += my_count($v, 1);
//        $cnt++;
//    return $cnt;
//}
//
//function foo(){
//    echo func_num_args();
//    print_r(func_get_args());
//    echo func_get_arg(2);
//}
//foo(1,2,3,4,5);
?>
<!---->
<?php
//$x = mktime(0,0,0,7,23,2016);
////echo strftime("%d - %Y", 1234567890);
//echo date("d-m-Y H:i:s", 1234567890);
//
////print_r(getdate($x));
?>
<?php

//print_r(get_defined_constants(true));
//print_r($GLOBALS);

?>
<h1>BEFORE</h1>
<?php
error_reporting(0);
include "test.inc.php";
//    require "test.inc.php";
?>
<h1>AFTER</h1>































