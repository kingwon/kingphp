<?php
header("Content-type: text/html;charset=utf-8");
ini_set('memory_limit','32M');
error_reporting(E_ERROR | E_WARNING | E_PARSE);
define('Kingphp', true);
define('UPLOAD_PATH', './Uploads/');
define('APP_NAME', 'kingphp');
define('APP_PATH', './kingphp/');
define('APP_DEBUG', TRUE);
define('FRAMEWORK_VERSION', '3.1.3_full');
define('THINK_PHP', './Framework/ThinkPHP' . FRAMEWORK_VERSION . '/ThinkPHP');
define('ROOT', '..');
require THINK_PHP.'/ThinkPHP.php';