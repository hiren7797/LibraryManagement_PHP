<?php
session_start();
header("Content-Type: image/png");
require "vendor/autoload.php";

use Endroid\QrCode\QrCode;

$qrcode = new QrCode($_SESSION['uname']);

echo $qrcode->writeString();
die();