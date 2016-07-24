<?php
function myErrorHandler($errnum, $errmsg, $errfile, $errline){
    $dt = date("d-m-Y H:i:s");
    $str = "[$dt] - $errmsg in $errfile:$errline\n";
    switch ($errnum){
        case E_USER_ERROR:
        case E_USER_WARNING:
        case E_USER_NOTICE:
            echo $errmsg;
        //default: echo $errmsg;
    }
    error_log($str, 3, "error.log");
}
function drawMenu($menu, $vertical=true){
    if(!is_array($menu))
        return false;
    $style = "";
    if(!$vertical)
        $style = " style='display:inline; margin-right:15px'";
    echo "<ul>";
    foreach ($menu as $item){
        echo "<li$style>";
        echo "<a href='{$item['href']}'>{$item['link']}</a>";
        echo "</li>";
    }
    echo "</ul>";
    return true;
}

function drawTable($cols = 10, $rows = 10, $color = "yellow")
{
    echo "<table border='1'>\n";
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo "\t<tr>\n";
        for ($td = 1; $td <= $cols; $td++) {
            if ($tr == 1 || $td == 1)
                echo "\t<th style='background:$color'>" . $tr * $td . "</th>\n";
            else
                echo "\t<td>" . $tr * $td . "</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";
}
?>