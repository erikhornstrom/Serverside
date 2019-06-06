<?php 
header('Content-type: text/html');

$link;

foreach ($_GET as $key => $val) {
     $link = '?'.$key.'='.$val;
}

$newLink1 = $link . "&email=kalle.anka@foomail.se";
$newLink2 = $link . "&email=musse.pigg@foomail.se";

?>

<p>Email: <a href="example2.php<?= $newLink1 ?>">example2.php<?= $newLink1 ?></a></p>
<p>Email: <a href="example2.php<?= $newLink2 ?>">example2.php<?= $newLink2 ?></a></p>