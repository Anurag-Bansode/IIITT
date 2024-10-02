<?php
require_once '../vendor/autoload.php'; // Load dependencies
require_once '../controllers/UrlController.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

// Get DB credentials
$temp=

$dbHost = $_ENV['DB_HOST'];
$dbUser = $_ENV['DB_USER'];
$dbPass = $_ENV['DB_PASS'];
$dbName = $_ENV['DB_NAME'];



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
