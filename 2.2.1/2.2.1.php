<?php
header('Content-type: text/plain');
foreach ($_POST as $key => $val) {
    echo "$key: $val \n";
}
?>