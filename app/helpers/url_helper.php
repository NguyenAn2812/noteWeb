<?php
// Redirect page
function redirect($page) {
    header('location: ' . APP_URL . '/' . $page);
}

// Get current URL
function getCurrentUrl() {
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}

// Sanitize URL
function sanitizeUrl($url) {
    return filter_var($url, FILTER_SANITIZE_URL);
}

// Get base URL
function getBaseUrl() {
    return APP_URL;
} 