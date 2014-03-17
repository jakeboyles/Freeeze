<?php
$click = $_GET["projectClicked"];
$con = mysql_connect('localhost', 'wpallday_freeze', 'baseball200');
mysql_query("UPDATE `wpallday_Freeze`.`Clicked` SET `value` = '$click' WHERE `Clicked`.`item` = 'Updating'");
mysql_close($con);
?>