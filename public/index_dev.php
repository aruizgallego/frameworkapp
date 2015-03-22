<?php

//php ini!!!!!!!meterlo
error_reporting(E_ALL);
ini_set('display_errors', 1);


include "../vendor/autoload.php";
$kernel = new \Mpwarfwk\Bootstrap('dev');
define('DOCUMENT_ROOT', dirname($_SERVER['DOCUMENT_ROOT']));
echo $kernel->execute();


