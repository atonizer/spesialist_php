<?php
$size = ini_get("post_max-size"); // 8M
$letter = $size{strlen($size) - 1}; // M
$size = (int)$size; // 8

switch (strtoupper($letter)) {
    case "G":
        $size *= 1024;
    case "M":
        $size *= 1024;
    case "K":
        $size *= 1024;
}
echo $size;
?>
<!-- Main content-->
<h3>Address</h3>
<p>123456 Moscow, Small American Lane 21</p>
<h3>Ask a question</h3>
<form action='' method='post'>
    <label>Letter subject: </label>
    <br/>
    <input name='subject' type='text' size="50"/>
    <br/>
    <label>Content: </label>
    <br/>
    <textarea name='body' cols="50" rows="10"></textarea>
    <br/>
    <br/>
    <input type='submit' value='Send'/>
</form>
<!-- Main content-->