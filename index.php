<?php
session_start();
require 'config.php';
header('Content-Type: text/html; charset=utf-8');

spl_autoload_register(function ($class) {
    if (strpos($class, 'Controller') > -1) {
        if (file_exists('controllers/' . $class . '.php')) {
            require_once 'controllers/' . $class . '.php';
        }
    } elseif (file_exists('models/' . $class . '.php')) {
        require_once 'models/' . $class . '.php';
    } elseif (file_exists('core/' . $class . '.php')) {
        require_once 'core/' . $class . '.php';
    } else {
        echo "Pagina não encontrada, ERRO 404";
        exit;
    }
});

$core = new Core();
$core->run();
?>