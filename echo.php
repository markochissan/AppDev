<?php

echo "data received by Fan Rongxue\n";
$uname = $_POST['max'];
$proj = $_POST['min'];
$remote = $_SERVER['REMOTE_ADDR'];
$today = date("Y-m-d H:i:s");
$record = $today . ' ' . $uname . ' ' . $proj . "\n";
$fname = "mydata.txt";
if(file_exists($fname))
    $fp = fopen($fname, "a");
else $fp = fopen($fname, "w");
fwrite($fp, $record);
fclose($fp);
echo "Alex has no brain, he dropped it in...\n";
?>