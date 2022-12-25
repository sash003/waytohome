<?php
echo 1;
//include_once "/ajaxController.php";
/*
error_reporting(E_ALL);

if(isset($_POST['name'])) 
{
echo $_POST['name'].' - '.$_POST['location'];
die();
}

ob_start();
session_start();

header ("Content-Type:text/html; charset=UTF-8", false);
  
// запрет кэширования
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0,pre-check=0", false);
header("Cache-Control: max-age=0", false);
header("Pragma: no-cache");
  
// Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);
mb_internal_encoding('utf-8');
  
// константа абсолютного пути
define('ROOT', dirname(__FILE__));
  
require_once ROOT."/components/Autoload.php";
  
function myCustomErrorHandler($errNo, $errMsg, $file, $line){
  //include_once '/404.php';
  echo "Ух ты, мой обработчик ошибок получил crash в [$file] на [$line]: <br/ > [$errMsg]";
}

//set_error_handler('myCustomErrorHandler');
  
// Вызов Router
$router = new \components\Router();
$router->run();
  
ob_end_flush();
*/
