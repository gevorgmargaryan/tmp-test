<?php 

ini_set('session.save_handler', 'memcached');
ini_set('session.save_path', $_GET['save_path']);

header('Content-Type: text/plain');

session_start();
if (!isset($_SESSION['visit'])) {
    echo "This is the first time you\'re visiting this server\n";
    $_SESSION['visit'] = 0;
} else
    echo 'Your number of visits: '.$_SESSION['visit'] . PHP_EOL;

$_SESSION['visit']++;

print_r($_SESSION);
