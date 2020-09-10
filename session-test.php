<?php 

ini_set('session.save_handler', 'memcache');
ini_set('session.save_path', 'tcp://memcached-test:11211');
ini_set('memcache.allow_failover',1);
ini_set('memcache.session_redundancy', 4);

header('Content-Type: text/plain');

session_start();
if (!isset($_SESSION['visit'])) {
    echo 'This is the first time you\'re visiting this server\n';
    $_SESSION['visit'] = 0;
} else
    echo 'Your number of visits: '.$_SESSION['visit'] . PHP_EOL;

$_SESSION['visit']++;

echo 'Server IP: '.$_SERVER['SERVER_ADDR'] . '\n';
echo 'Client IP: '.$_SERVER['REMOTE_ADDR'] . '\n';

print_r($_COOKIE);