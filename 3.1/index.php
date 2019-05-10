<?php
$myFile = fopen("counter.txt", "r");

while (!flock($myFile, LOCK_EX)) {

}

$currVal = fread($myFile, filesize("counter.txt"));
fclose($myFile); 
$newVal = $currVal + 1;

$myFile = fopen("counter.txt", "w");
fwrite($myFile, $newVal);
flock($myFile, LOCK_UN);
fclose($myFile);

header('Content-type: text/html');
$html = file_get_contents('index.html');
$html = str_replace('---$visits---', $newVal, $html);
echo $html;
?>