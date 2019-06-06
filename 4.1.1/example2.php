<?php 
header('Content-type: text/plain');
foreach ($_GET as $key => $val) {
    echo "$key: $val \n";
}
?>