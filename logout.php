<?php

session_start();
require_once(__DIR__ . '/functions.php');
session_destroy();
setcookie(
    'LOGGED_USER',
    '',
    [
        'expires' => time(),
        'secure' => true,
        'httponly' => true
    ]
    );

redirectToUrl('index.php');