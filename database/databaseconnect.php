<?php
include_once(__DIR__ . '/../config/mysql.php');


try {
    $mysqlClient = new PDO(
        "mysql:host={$HOST};dbname={$DBNAME};charset=utf8",
        $USER,
        $PASSWORD,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}