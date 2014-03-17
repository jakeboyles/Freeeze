<?php 
$name=$_GET['name'];
$con = mysql_connect('localhost', 'wpallday_freeze', 'baseball200');
$mydb = mysql_select_db("wpallday_Freeze");
mysql_query("INSERT INTO Project VALUES ('$name')"); 
mysql_close($con);
header('Location: index.php');
?> 