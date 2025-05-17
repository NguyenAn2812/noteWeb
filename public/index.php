<?php
// Define root path
define('ROOT_PATH', dirname(__DIR__));

// Load Config
require_once ROOT_PATH . '/app/config/config.php';

// Load Helpers
require_once ROOT_PATH . '/app/helpers/session_helper.php';
require_once ROOT_PATH . '/app/helpers/url_helper.php';

// Load Core Libraries
require_once ROOT_PATH . '/app/libraries/Controller.php';
require_once ROOT_PATH . '/app/libraries/Core.php';
require_once ROOT_PATH . '/app/libraries/Database.php';

// Start Session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Initialize Core
$init = new Core(); 