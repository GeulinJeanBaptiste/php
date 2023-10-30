<?php
require 'config/dbConfig.php';
$dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset:" . DBCHARSET . "";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

];

$connexion = new PDO($dsn, DBUSERNAME, DBUSERPASSWORD, []);

/* 
mysql:host=localhost;dbname=notes
[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"] */
