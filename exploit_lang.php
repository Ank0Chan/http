<?php
$contenu = file_get_contents("index.php");
$encoded = base64_encode($contenu);
echo "<pre>$encoded</pre>";
?>
