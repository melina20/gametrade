<?php

/**
 * Main Application Controller
 */

namespace Gametrade;
session_start();

require_once ('src/autoload.php');


$baseUrl = 'http://localhost/gametrade/';

$requestUrl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$requestString = substr($requestUrl, strlen($baseUrl));

$urlParams = explode('/', $requestString);
if (empty($urlParams[0])) {
    //load the default controller
    $controllerName = __NAMESPACE__ . '\HomeController';
    $actionName = 'Action';
} else {
    $controllerName = __NAMESPACE__ . '\\' . ucfirst(array_shift($urlParams)) . 'Controller';
    $actionName = strtolower(array_shift($urlParams)) . 'Action';
}
// Here you should probably gather the rest as params
// Call the action
$controller = new $controllerName; 
$controller->$actionName();
