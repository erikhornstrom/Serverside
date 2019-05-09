<!DOCTYPE html>
<html>
<body>

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

echo $newVal;

?>

</body>
</html>