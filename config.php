<?php
session_start();
// Database Credentials

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 123456);
define('DB_NAME', 'auth');

// URL
define('URLROOT', 'http://localhost/php-authentication-bootstrap');

// APP URL
define('APPROOT', dirname(__FILE__));

require_once 'functions.php';

// Make DATABASE Connection

$objDB = objDB();