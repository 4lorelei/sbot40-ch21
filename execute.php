<?php
//$star_code = 0x1F31F;
$star_code = 0x2605;
setlocale(LC_TIME, 'it_IT');
date_default_timezone_set('Europe/Rome');
$content = file_get_contents("php://input");
$update = json_decode($content, true);
print_r("PARTITO");
