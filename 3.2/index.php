<?php
header('Content-type: text/html');
$html = file_get_contents('index.html');
$html_pieces = explode("<!--===xxx===-->", $html);

print $html_pieces[0];


foreach ($_SERVER as $key => $val) {
    $html = str_replace("---name---", $key, $html_pieces[1]);
    $html = str_replace("---value---", $val, $html); 
    print $html;
}

foreach ($_ENV as $key => $val) {
    $html = str_replace("---name---", $key, $html_pieces[1]);
    $html = str_replace("---value---", $val, $html);
    print $html;
}

print $html_pieces[2];

?>