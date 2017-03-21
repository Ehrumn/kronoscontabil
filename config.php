<?php
require 'environment.php';

global $config;

$config = array();

if (ENVIRONMENT == 'development') {
    $config['dbname'] = 'kronoscontabil';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    $config['dbname'] = 'kronoscontabil';
    $config['host'] = 'kronoscontabil.mysql.uhserver.com';
    $config['dbuser'] = 'kronos';
    $config['dbpass'] = '@felipe2013'; 
}
?>