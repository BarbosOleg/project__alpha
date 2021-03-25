<?php
/**
 * prevent some browser throw error ERR_CACHE_MISS when you try go back
 * without send any data with post method
 */
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
/**
 * start session and include init file 
 */
session_start();
include "../app/init.php";

$path = $_SERVER['REQUEST_SCHEME'] ."://". $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
$path = str_replace('index.php', "", $path);

define('ROOT', $path);
define('ASSETS', $path . "assets/");

$app = new App();

