<?php
$idToDelete = $_POST["recordToDelete"];
$con = mysql_connect('127.0.0.1', 'root', 'root');
mysql_query("DELETE FROM `wpallday_Freeze`.`todos` WHERE `todos`.`counter` = 2");
mysql_close($con);
header('Location: index.php');
?>