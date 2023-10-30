<?php
require 'config/dbConfig.php';
$dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset:" . DBCHARSET . "";

$connexion = new PDO(
    $dsn,
    DBUSERNAME,
    DBUSERPASSWORD,
    []
);

/* 
mysql:host=localhost;dbname=notes
[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"] */