<?php
$ida = $_GET["recordToDelete"];
$con = mysql_connect('localhost', 'wpallday_freeze', 'baseball200');
mysql_query("DELETE FROM `wpallday_Freeze`.`todos` WHERE `todos`.`counter` = $ida");
mysql_close($con);
?>