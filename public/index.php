<?php
require "../vendor/autoload.php";

use App\{Hello as bonjourno, Bye as arrivederci}; /* test du multi use et des alias*/

$welcome = new bonjourno();
$welcome->talk();
$leave = new arrivederci();
$leave->talk();
