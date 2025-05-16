<?php
// Load Config
require_once '../app/config/config.php';

// Load Helpers
require_once '../app/helpers/session_helper.php';
require_once '../app/helpers/url_helper.php';

// Autoload Core Libraries
spl_autoload_register(function($className) {
    require_once '../app/libraries/' . $className . '.php';
});

// Start Session
session_start();

// Initialize Core
$init = new Core(); 