<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

}
?>
<!-- Main content-->
<form action=''>
    <label>Number of of columns: </label>
    <br/>
    <input name='cols' type='text' value=""/>
    <br/>
    <label>Number of lines: </label>
    <br/>
    <input name='rows' type='text' value=""/>
    <br/>
    <label>Color: </label>
    <br/>
    <input name='color' type='text' value=""/>
    <br/>
    <br/>
    <input type='submit' value='Create'/>
</form>
<!-- Table -->
<?php
drawTable();
?>
<!-- Table -->
<!-- Main content-->