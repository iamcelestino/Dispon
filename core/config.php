<?php

namespace Core;


if (!defined('BASE_URL')) {
    define('BASE_URL', 'http://localhost/Dispon/public/');
}

if (!defined('ASSETS_URL')) {
    define('ASSETS_URL', BASE_URL . 'assets/');
}

if (!defined('HOST')) {
    define('HOST', 'localhost');
}

if (!defined('DBNAME')) {
    define('DBNAME', 'dispon');
}

if (!defined('USER')) {
    define('USER', 'root');
}

if (!defined('PASSWORD')) {
    define('PASSWORD', '');
}

if (!defined('DBDRIVER')) {
    define('DBDRIVER', 'mysql');
}

