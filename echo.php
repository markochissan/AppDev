<?php
echo"data received by Marko \n";
$uname = $_POST['max'];
$proj = $_POST['min'];
$remote = $_Server['REMOTE_ADDR'];
$today = date ( "Y-m-d H:i:s");
$record = $today . '' . $uname . ' ' .$proj. '' . $remote ."\n";
$fname ="mydata.txt";
if(file_exists($fname))
	$fp=fopen($fname,"a");
else $fp = fopen($fname,"w");
fwrite($fp,$record);
fclose($fp);
echo "data stored\n";
?>
