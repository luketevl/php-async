<?php
$content = isset($_POST['c']) && !empty($_POST['c']) ? $_POST['c'] : 'no content';

$time = isset($_POST['t']) && !empty($_POST['t']) ? $_POST['t'] : 3;

sleep($time);

$fileName = 'log.txt';

$file = fopen($fileName, 'a');

fwrite($file, date('Y-m-d h:m:s').PHP_EOL.$content.PHP_EOL);

fclose($file);


