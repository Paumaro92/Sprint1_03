<?php
$X = array (10, 20, 30, 40, 50,60);

echo count($X) . "\n";

unset($X[3]);

$X = array_values($X);


echo count($X) . "\n";


?>