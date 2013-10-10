<?php
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Decline static file requests back to the PHP built-in webserver
if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}

// Some simple ZF2 Tutorial To Go initialisation:
if (!file_exists('data/album.sqlite')) {
    copy('data/album.sqlite.dist', 'data/album.sqlite');
}
if (!file_exists('config/autoload/local.php')) {
    copy('config/autoload/local.php.dist', 'config/autoload/local.php');
}

// Setup autoloading
require 'init_autoloader.php';

// Run the application!
Zend\Mvc\Application::init(require 'config/application.config.php')->run();
