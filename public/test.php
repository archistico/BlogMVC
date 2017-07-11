<?php
define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();
var_dump(App::getInstance()->getMenu()) ;