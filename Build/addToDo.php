<?php 
$desc=$_GET['desc'];
$project=$_GET['project'];
$con = mysql_connect('localhost', 'wpallday_freeze', 'baseball200');
$mydb = mysql_select_db("wpallday_Freeze");
mysql_query("INSERT INTO todos VALUES ('$desc', '$project', '0', NULL , ' ', '0', '')"); 
mysql_close($con);
header('Location: index.php');
?> 