<?php
// DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'note_web');

// App Root
define('APPROOT', dirname(dirname(__FILE__)));

// URL Root
define('URLROOT', 'http://localhost/noteWeb');

// Site Name
define('SITENAME', 'Note Web');

// App Version
define('APPVERSION', '1.0.0');

// Application Configuration
define('APP_NAME', 'Note Taking App');
define('APP_URL', 'http://localhost/note-taking-app');
define('APP_ROOT', dirname(dirname(__FILE__)));

// Session Configuration
define('SESSION_NAME', 'note_app_session');
define('SESSION_LIFETIME', 3600); // 1 hour

// File Upload Configuration
define('UPLOAD_DIR', APP_ROOT . '/public/uploads/');
define('MAX_FILE_SIZE', 5 * 1024 * 1024); // 5MB
define('ALLOWED_IMAGE_TYPES', ['image/jpeg', 'image/png', 'image/gif']); 