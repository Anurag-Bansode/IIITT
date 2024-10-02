<?php
require_once '../vendor/autoload.php'; // Load dependencies
require_once '../controllers/UrlController.php';

// Get DB credentials
$dbHost = getenv('DB_HOST');
$dbUser = getenv('DB_USER');
$dbPass = getenv('DB_PASS');
$dbName = getenv('DB_NAME');



// Create controller instance
$controller = new UrlController($dbHost, $dbUser, $dbPass, $dbName);

// Handle form submission
$action = $_GET['action'] ?? null;

if ($action === 'submit' && !empty($_POST['urlinput'])) {
    $url = $_POST['urlinput'];
    $shortUrl = "short.ly/" . uniqid(); // Simple shortening logic
    $controller->insertUrl($url, $shortUrl);
}

// Fetch all URLs and render the views
$urls = $controller->getAllUrls();

// Include views
include '../views/url_form.php';
include '../views/url_list.php';
?>
