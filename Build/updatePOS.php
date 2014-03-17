<?php
$id=$_GET['theID'];
$alerted=$_GET['theAlert'];
$theNumber=$_GET['whatClicked'];
$size = count($id);
$con = mysql_connect('localhost', 'wpallday_freeze', 'baseball200');
mysql_query("UPDATE `wpallday_Freeze`.`todos` SET `alerttype` = '$alerted' WHERE `todos`.`counter` = $theNumber");

for($i=0;$i<$size;$i++){
	$thePosition=$i;
	$theCounter=$id[$i];
	mysql_query("UPDATE `wpallday_Freeze`.`todos` SET `position` = '$thePosition' WHERE `todos`.`counter` =$theCounter");
}
mysql_close($con);

?>