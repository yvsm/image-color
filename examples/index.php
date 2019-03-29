<?php
require '../vendor/autoload.php';
//require '../src/core/Object.php';
//require '../src/util/Color.php';
//require '../src/models/Image.php';

use zunyunkeji\imageColor\models\Image;

$img = new Image();
$img->load(__DIR__ . '/logo.jpg');
$info = $img->primaryColors();

print_r($info);