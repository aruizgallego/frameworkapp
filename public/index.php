<?php

//php ini!!!!!!!meterlo
error_reporting(E_ALL);
ini_set('display_errors', 1);


include "../vendor/autoload.php";
$kernel = new \Mpwarfwk\Bootstrap('prod');



define('DOCUMENT_ROOT', dirname($_SERVER['DOCUMENT_ROOT']));
$response = $kernel->execute();
$response->send();


