<?php
header('Content-Type: image/png');
require 'vendor/autoload.php';

$qr = new Endroid\QrCode\QrCode();

if(isset($_GET['text'])){
	
	$text = $_GET['text'];

	$size = isset($_GET['size']) ? $_GET['size'] : 200;
	$padding = isset($_GET['padding']) ? $_GET['padding'] : 10;

	$qr->setText($text);
	$qr->setSize($size);
	$qr->setPadding($padding);
	$qr->render();
}