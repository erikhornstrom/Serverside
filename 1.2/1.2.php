<?php
header('Content-type: text/plain');
foreach ($_SERVER as $key => $val) {
    echo "$key: $val \n";
}

foreach ($_ENV as $key => $val) {
    echo "$key: $val \n";
}
?>