<?php 
require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("Programmerarr");
$log->pushHandler(new StreamHandler("application.log", Logger::INFO));

$log->info("Hello Wolrd!");
$log->info("Selamat Belajar!!! Coding");