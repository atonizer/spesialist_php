<?php
function drawMenu($menu, $vertical=true){
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